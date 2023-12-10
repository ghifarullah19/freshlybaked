<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        
        $validateData['password'] = bcrypt($validateData['password']);

        if (User::where('email', $validateData['email'])->value('google_id')) {
            return redirect('/login')->with('error', 'Email already registered with Google!');
        }

        User::create($validateData);

        return redirect('/login')->with('success', 'Register Success!');
    }
}
