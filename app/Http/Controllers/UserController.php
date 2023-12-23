<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('profile', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone_number' => 'required|numeric',
            'address' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
        ];

        $user = User::find(auth()->id());

        $validatedData = $request->validate($rules);

        // Jika ada file image yang dikirim dari form create post maka akan disimpan di storage
        if ($request->file('image')) {
            // Jika ada file image lama yang dikirim dari form edit post 
            if ($request->oldImage) {
                // Maka file image lama akan dihapus dari storage
                Storage::delete($request->oldImage);
            }
            // Menyimpan file image baru ke dalam storage
            $validatedData['image'] = $request->file('image')->store('User-images');
        }

        $user->fill($validatedData);
        $user->save();
        
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function updateProfile(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . auth()->id(),
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone_number' => 'required|numeric',
            'address' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
        ];

        $user = User::find(auth()->id());

        $validatedData = $request->validate($rules);

        // Jika ada file image yang dikirim dari form create post maka akan disimpan di storage
        if ($request->file('image')) {
            // Jika ada file image lama yang dikirim dari form edit post 
            if ($request->oldImage) {
                // Maka file image lama akan dihapus dari storage
                Storage::delete($request->oldImage);
            }
            // Menyimpan file image baru ke dalam storage
            $validatedData['image'] = $request->file('image')->store('User-images');
        }

        $user->fill($validatedData);
        $user->save();
        
        return redirect('/profile')->with('success', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
