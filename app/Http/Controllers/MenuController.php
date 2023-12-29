<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use App\Http\Requests\UpdateMenuRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "";

        $menu = Menu::latest()->where('is_api', -1)->filter(request(['search', 'category']))->paginate(7)->withQueryString();

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        // Membuat query untuk mengambil data post yang sudah di filter
        return view('/products', [
            'title' => "All Posts" . $title,
            'active' => 'products',
            'menus' => $menu
        ]);
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

        Menu::create($validatedData);

        return redirect('/dashboard/products')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view('/product', [
            'title' => $menu->name,
            'active' => 'products',
            'menu' => $menu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }

    public function search(Request $request) {
        $output = '';

        if ($request->ajax()) {
            $data = Menu::where('name', 'LIKE', $request->search . '%')->get();

            if (count($data) > 0) {
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

                foreach ($data as $row) {
                    $output .= '<li class="list-group-item my-1 mx-2 relative"><a href="/products/' . $row->slug . '"
                    class="hover:text-gray-600">'
                    . $row->name .
                    '</a></li><hr>';
                }

                $output .= '</ul>';
            }
        }

        return $output;
    }
}
