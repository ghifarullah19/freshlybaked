<?php

namespace App\Http\Controllers;

use App\Models\ApiMenu;
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
        $menu = ApiMenu::all();

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
            $menu = Http::get('https://www.themealdb.com/api/json/v1/1/filter.php?c=side');
            $menu = $menu['meals'];
            $menu = collect($menu)->take(8);

            $apiMenu = [];

            foreach ($menu as $m) {
                if (!ApiMenu::where('idMeal', $m['idMeal'])->first()) {
                    $apiMenu[] = ApiMenu::create([
                        'idMeal' => $m['idMeal'],
                        'strMeal' => $m['strMeal'],
                        'strSlug' => Str::slug($m['strMeal']),
                        'category_id' => 4,
                        'strPrice' => null,
                        'strQuantity' => null,
                        'strMealThumb' => $m['strMealThumb'],
                        'strDescription' => $m['strMeal'] . ' made by the mealdb api',
                    ]);
                } else {
                    $apiMenu[] = ApiMenu::where('idMeal', $m['idMeal'])->first();
                }
            }

            return redirect('/dashboard/api-products')->with('success', 'Menu berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect('/dashboard/api-products')->with('error', 'Menu gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ApiMenu $apiMenu)
    {
        $apiMenu = ApiMenu::where('id', $apiMenu->id)->first();

        return view('api-product', [
            "menu" => $apiMenu,
        ]);
    }

    public function dashboardShow(ApiMenu $apiMenu)
    {
        $apiMenu = ApiMenu::all();

        return view('dashboard.api-products.index', [
            "menus" => $apiMenu,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApiMenu $apiMenu)
    {
        return view('dashboard.api-products.edit', [
            "menu" => $apiMenu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ApiMenu $apiMenu)
    {
        $rules = [
            'strMeal' => 'required|max:255',
            'strPrice' => 'required',
            'strQuantity' => 'required',
            'strMealThumb' => 'image|file|max:1024',
            'strDescription' => 'required'
        ];

        if ($request->slug != $apiMenu->slug) {
            $rules['slug'] = 'required|unique:menus';
        }

        $validatedData = $request->validate($rules);

        ApiMenu::where('id', $apiMenu->id)->update($validatedData);

        return redirect('/dashboard/api-products')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApiMenu $apiMenu)
    {
        ApiMenu::destroy($apiMenu->id);
        return redirect('/dashboard/api-products')->with('success', 'Post has been deleted!');
    }
}
