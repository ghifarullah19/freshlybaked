<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class GoogleController extends Controller
{

    public function index()
    {
        return view('register.google');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['google_id'] = $request['google_id'];
        $validateData['password'] = bcrypt($validateData['password']);

        if (User::where('email', $validateData['email'])->value('google_id')) {
            return redirect('/login')->with('error', 'Email already registered with Google!');
        }

        User::create($validateData);

        return redirect('/login')->with('success', 'Register Success!');
    }

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
                $new_user = [
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    // 'password' => bcrypt('password'),
                ];

                // Auth::login($new_user);
                return redirect('/register/google')->with('google_user', $new_user);
            } else {
                Auth::login($user);
                return redirect()->intended('/');
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
