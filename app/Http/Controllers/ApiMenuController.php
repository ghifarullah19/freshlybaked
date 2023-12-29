<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class ApiMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = menu::find('is_api', true)->get();

        return view('api-products', [
            "menus" => $menu,
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
        try {
            $api = Http::get('https://www.themealdb.com/api/json/v1/1/filter.php?c=side');
            $api = $api['meals'];
            $api = collect($api)->take(8);

            $menu = [];

            foreach ($api as $m) {
                if (!Menu::where('id', $m['idMeal'])->first()) {
                    $menu[] = Menu::create([
                        'id' => $m['idMeal'],
                        'name' => $m['strMeal'],
                        'slug' => Str::slug($m['strMeal']),
                        'category_id' => 4,
                        'price' => null,
                        'quantity' => null,
                        'image' => $m['strMealThumb'],
                        'is_api' => true,
                        'description' => $m['strMeal'] . ' made by the mealdb api',
                    ]);
                } else {
                    $menu[] = Menu::where('id', $m['idMeal'])->first();
                }
            }
            return redirect('/dashboard/products')->with('success', 'Menu berhasil ditambahkan');
        } catch (\Throwable $th) {
            dd($th);
            return redirect('/dashboard/products')->with('error', 'Menu gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(menu $menu)
    {
        $menu = menu::where('id', $menu->id)->first();

        return view('api-product', [
            "menu" => $menu,
        ]);
    }

    public function dashboardShow(menu $menu)
    {
        $menu = menu::where('is_api', true)->get();

        return view('dashboard.products.index', [
            "menus" => $menu,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(menu $menu)
    {
        return view('dashboard.products.edit', [
            "menu" => $menu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, menu $menu)
    {
        $rules = [
            'name' => 'required|max:255',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ];

        if ($request->slug != $menu->slug) {
            $rules['slug'] = 'required|unique:menus';
        }

        $validatedData = $request->validate($rules);

        menu::where('id', $menu->id)->update($validatedData);

        return redirect('/dashboard/products')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(menu $menu)
    {
        menu::destroy($menu->id);
        return redirect('/dashboard/products')->with('success', 'Post has been deleted!');
    }
}
