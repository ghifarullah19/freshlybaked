<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Cart;
use App\Models\CartDetail;
use Carbon\Carbon;

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
            return redirect('/products')->with('error', 'Stok tidak cukup');
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

        return redirect('/products')->with('success', 'Menu berhasil ditambahkan ke keranjang');
    }
}
