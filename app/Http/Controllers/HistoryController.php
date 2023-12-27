<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Cart;
use App\Models\CartDetail;

class HistoryController extends Controller
{
    public function index() {
        $histories = Cart::where('user_id', auth()->user()->id)->where('status', 0)->orWhere('status', 1)->get();

        return view('history.index', [
            "title" => "History",
            "active" => "history",
            "histories" => $histories
        ]);
    }

    public function detail($id) {
        $history = Cart::where('id', $id)->first();
        $history_details = CartDetail::where('cart_id', $history->id)->get();

        return view('history.detail', [
            "title" => "History",
            "active" => "history",
            "history" => $history,
            "history_details" => $history_details
        ]);
    }

    public function all($id) {
        $history = Cart::where('id', $id)->get();

        $history_details = [];

        foreach ($history as $h) {
            $history_details[] = CartDetail::where('cart_id', $h->id)->get();
        }

        dd($history_details);

        // $history_details = CartDetail::where('cart_id', $history->id)->get();

        return view('history.detail', [
            "title" => "History",
            "active" => "history",
            "history" => $history,
            "history_details" => $history_details
        ]);
    }
}
