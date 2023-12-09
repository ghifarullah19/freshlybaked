<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // INI EMANG MERAH, TAPI GAK ERROR. BIARIN AJA, JANGAN DIUBAH.
            $google_user = Socialite::driver('google')->stateless()->user();
            // INI EMANG MERAH, TAPI GAK ERROR. BIARIN AJA, JANGAN DIUBAH.
            $user = User::where('google_id', $google_user->getId())->first();
            
            if (!$user) {
                $new_user =  User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'password' => bcrypt('12345678'),
                ]);
                
                Auth::login($new_user);
                return redirect()->intended('/dashboard');
            } else {
                Auth::login($user);
                return redirect()->intended('/dashboard');
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
