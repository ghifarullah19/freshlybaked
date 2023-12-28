<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;
use App\Models\User;

class MailController extends Controller
{
    public function sendMail() {
        $user = User::find(auth()->user()->id);

        $cart_first = \App\Models\Cart::where('user_id', auth()->user()->id)->where('status', 1)->latest()->get();
        $cart_details = [];

        for ($i = 0; $i < count($cart_first); $i++) {
            $cart_details = \App\Models\CartDetail::where('cart_id', $cart_first[$i]->id)->latest()->get();
        }

        
        Mail::to($user->email)->send(new SignUp($user));
        return view('profile', [
            "cart_details" => $cart_details,
        ]);
    }
}
