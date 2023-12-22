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
        if (Auth::login() == null) {
            return redirect('/login')->with('error', 'Silahkan login terlebih dahulu');
        }
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
            $cartDetail->total_price = $menu->price * $request->quantity;
            $cartDetail->save();
        } else {
            $cartDetail = CartDetail::where('menu_id', $menu->id)->where('cart_id', $new_cart->id)->first();
            $cartDetail->quantity = $cartDetail->quantity + $request->quantity;
            $cartDetail->total_price = $cartDetail->total_price + ($menu->price * $request->quantity);
            $cartDetail->update();
        }

        $cart = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $cart->total_price = $cart->total_price + ($menu->price * $request->quantity);
        $cart->update();

        return redirect('/products/'. $menu->slug)->with('success', 'Menu berhasil ditambahkan ke keranjang');
    }

    public function checkOut() {
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', 0)->get();
        
        $cart_first = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();

        if (!empty($cart_first)) {
            $cart_details = CartDetail::where('cart_id', $cart_first->id)->get();

            return view('cart.checkout', [
                "title" => "Checkout",
                "active" => "cart",
                "carts" => $cart,
                "cart_details" => $cart_details
            ]);
        } else {
            return view('cart.checkout', [
                "title" => "Checkout",
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
        $cart->update();
        $cart_detail->delete();

        return redirect('/checkout')->with('success', 'Menu berhasil dihapus dari keranjang');
    }

    public function confirm() {
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $cart_id = $cart->id;
        $cart->status = 1;
        $cart->update();

        $cart_details = CartDetail::where('cart_id', $cart_id)->get();
        foreach ($cart_details as $cart_detail) {
            $menu = Menu::find($cart_detail->menu_id);
            $menu->quantity = $menu->quantity - $cart_detail->quantity;
            $menu->update();
        }

        return redirect('/checkout')->with('success', 'Pesanan berhasil dibuat');
    }
}
