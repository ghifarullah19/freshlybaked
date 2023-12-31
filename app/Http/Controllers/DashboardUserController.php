<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('col') && request('sort')) {
            return view('dashboard.users.index', [
                'users' => User::orderBy('users.' . request('col'), request('sort'))->get(),
            ]);
        } else {
            return view('dashboard.users.index', [
                'users' => User::all(),
            ]);
        }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('dashboard.users.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'image|file|max:1024',
        ];
        
        $user = User::find(auth()->id());

        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        if ($request->username != $user->username) {
            $rules['username'] = 'required|unique:users';
        }

        $validatedData = $request->validate($rules);

        // Jika ada file image yang dikirim dari form create post maka akan disimpan di storage
        if ($request->file('image')) {
            // Jika ada file image lama yang dikirim dari form edit post 
            if ($request->oldImage) {
                // Maka file image lama akan dihapus dari storage
                Storage::delete($request->oldImage);
            }
            // Menyimpan file image baru ke dalam storage
            $validatedData['image'] = $request->file('image')->store('user-images');
        }

        $user->fill($validatedData);
        $user->save();

        return redirect('/dashboard/users')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Jika ada file image yang dikirim dari form delete post
        if ($user->image) {
            // Maka file image lama akan dihapus dari storage
            Storage::delete($user->image);
        }

        User::destroy($user->id);
        return redirect('/dashboard/users')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(User::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
