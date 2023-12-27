<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Cart;
use App\Models\CartDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index() {
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', 0)->get();
        $cart_first = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $cart_details = CartDetail::where('cart_id', $cart_first->id)->get();

        return view('cart.index', [
            "title" => "Cart",
            "active" => "cart",
            "carts" => $cart,
            "cart_details" => $cart_details
        ]);
    }

    public function addToCart(Request $request, $id) {
        $menu = Menu::find($id);

        if ($request->quantity > $menu->quantity) {
            return redirect('/products/'. $menu->slug)->with('error', 'Stok tidak cukup');
        }

        $check_cart = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();

        if (empty($check_cart)) {
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->date = date('Y-m-d');
            $cart->status = 0;
            $cart->total_price = 0;
            $cart->save();
        }

        $new_cart = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();

        $check_cart_detail = CartDetail::where('menu_id', $menu->id)->where('cart_id', $new_cart->id)->first();

        if (empty($check_cart_detail)) {
            $cartDetail = new CartDetail;
            // $cartDetail->user_id = auth()->user()->id;
            $cartDetail->menu_id = $menu->id;
            $cartDetail->cart_id = $new_cart->id;
            $cartDetail->quantity = $request->quantity;
            $cartDetail->price = $menu->price;
            $cartDetail->total_price = $menu->price * $request->quantity;
            $cartDetail->save();
        } else {
            $cartDetail = CartDetail::where('menu_id', $menu->id)->where('cart_id', $new_cart->id)->first();
            $cartDetail->quantity = $cartDetail->quantity + $request->quantity;
            $cartDetail->price = $menu->price;
            $cartDetail->total_price = $cartDetail->total_price + ($menu->price * $request->quantity);
            $cartDetail->update();
        }

        $cart = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $cart->total_price = $cart->total_price + ($menu->price * $request->quantity);
        $cart->update();

        return redirect('/products/'. $menu->slug)->with('success', 'Menu berhasil ditambahkan ke keranjang');
    }

    public function cart() {
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', 0)->latest()->get();
        
        $cart_first = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();

        if (!empty($cart_first)) {
            $cart_details = CartDetail::where('cart_id', $cart_first->id)->get();

            return view('cart.cart', [
                "title" => "cart",
                "active" => "cart",
                "cart" => $cart,
                "cart_details" => $cart_details
            ]);
        } else {
            return view('cart.cart', [
                "title" => "cart",
                "active" => "cart",
                "carts" => [],
                "cart_details" => []
            ]);
        }
        
    }

    public function delete($id) {
        $cart_detail = CartDetail::find($id);
        $cart = Cart::where('id', $cart_detail->cart_id)->first();
        $cart->total_price = $cart->total_price - $cart_detail->total_price;
        $cart->status = 0;
        $cart->update();
        $cart_detail->delete();

        return redirect('/cart')->with('success', 'Menu berhasil dihapus dari keranjang');
    }

    public function confirm() {
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $cart_id = $cart->id;

        $cart_details = CartDetail::where('cart_id', $cart_id)->get();
        $cart_details_array = [];

        foreach ($cart_details as $cart_detail) {
            $menu = Menu::find($cart_detail->menu_id);
            if ($menu->quantity < $cart_detail->quantity) {
                return redirect('/cart')->with('error', $menu->name . 'Stok tidak cukup');
            }
            $cart_details_array[] = array(
                'id' => $menu->id,
                'price' => $menu->price,
                'quantity' => $cart_detail->quantity,
                'name' => $menu->name
            );
        }

        /*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
        `composer require midtrans/midtrans-php

        Alternatively, if you are not using **Composer**, you can download midtrans-php library 
        (https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
        the file manually.   

        require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-f-IjwMbNeRBfsRPqLP8E7bZA';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $cart->total_price,
            ),
            'item_details' => $cart_details_array,
            'customer_details' => array(
                'first_name' => $cart->user->name,
                'email' => $cart->user->email,
                'phone' => '08111222333',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        if ($snapToken) {
            return redirect('/cart')->with('token', $snapToken);
        } else {
            return redirect('/cart')->with('error', 'Checkout gagal');
        }
    }

    public function updateDataPayment() {
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $cart_details = CartDetail::where('cart_id', $cart->id)->get();

        $cart->status = 1;
        $cart->update();
        
        foreach ($cart_details as $cart_detail) {
            $menu = Menu::find($cart_detail->menu_id);
            $menu->quantity = $menu->quantity - $cart_detail->quantity;
            $menu->update();
        }
    }

    public function ubah(Request $request, $id) {
        $rules = [
            'quantity' => 'required',
        ];

        $validatedData = $request->validate($rules);

        // $validatedData['user_id'] = auth()->user()->id;

        CartDetail::where('id', $id)->update($validatedData);

        return $this->cart();
    }
}
