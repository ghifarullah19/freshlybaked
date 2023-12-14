<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.products.index', [
            // 'posts' => Post::where('user_id', auth()->user()->id)->get()
            'menus' => Menu::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:menus',
            'category_id' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('menu-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 100));
        // $validatedData['excerpt'] = substr($request->body, 0, 255);

        Menu::create($validatedData);

        return redirect('/dashboard/products')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $product)
    {
        return view('dashboard.products.show', [
            'menu' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $product)
    {
        return view('dashboard.products.edit', [
            'menu' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $product)
    {
        $rules = [
            'name' => 'required|max:255',
            // 'slug' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:menus';
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
            $validatedData['image'] = $request->file('image')->store('menu-images');
        }

        // $validatedData['user_id'] = auth()->user()->id;

        Menu::where('id', $product->id)->update($validatedData);

        return redirect('/dashboard/products')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $product)
    {
        // Jika ada file image yang dikirim dari form delete post
        if ($product->image) {
            // Maka file image lama akan dihapus dari storage
            Storage::delete($product->image);
        }

        Menu::destroy($product->id);
        return redirect('/dashboard/products')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Menu::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
