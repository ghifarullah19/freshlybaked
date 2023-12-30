<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use App\Models\Category;

class ApiMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->category) {
            $category = Category::where('name', $request->category)->first();
            $menu = Menu::latest()->where('is_api', 1)->where('category_id', $category->id)->filter(request(['search', 'category']))->paginate(8)->withQueryString();
        } else {
            $menu = Menu::latest()->where('is_api', 1)->filter(request(['search', 'category']))->paginate(8)->withQueryString();
        }

        return view('products', [
            "menus" => $menu,
            "categories" => [],
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
                if (!Menu::where('slug', Str::slug($m['strMeal']))->first()) {
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
            return redirect('/dashboard/api-products')->with('success', 'Menu berhasil ditambahkan');
        } catch (\Throwable $th) {
            dd($th);
            return redirect('/dashboard/api-products')->with('error', 'Menu gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(menu $menu)
    {
        $menu = menu::where('id', $menu->id)->first();

        return view('product', [
            "menu" => $menu,
            "route" => 'api-products'
        ]);
    }

    public function dashboardShow()
    {
        if (request('col') && request('sort')) {
            if (request('col') == 'category') {
                return view('dashboard.api-products.index', [
                    'menus' => Menu::join('categories', 'categories.id', '=', 'menus.category_id')
                    ->where('is_api', 1)
                    ->orderBy('categories.name', request('sort'))
                    ->select('menus.*', 'categories.name as category_name')
                    ->get(),
                ]);
            } else {
                return view('dashboard.api-products.index', [
                    'menus' => Menu::where('is_api', 1)->orderBy('menus.' . request('col'), request('sort'))->get(),
                ]);
            }
        } else {
            return view('dashboard.api-products.index', [
                'menus' => Menu::where('is_api', 1)->get(),
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(menu $menu)
    {
        return view('dashboard.api-products.edit', [
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
            'image' => 'required',
            'description' => 'required'
        ];

        if ($request->slug != $menu->slug) {
            $rules['slug'] = 'required|unique:menus';
        }

        $validatedData = $request->validate($rules);

        menu::where('id', $menu->id)->update($validatedData);

        return redirect('/dashboard/api-products')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(menu $menu)
    {
        menu::destroy($menu->id);
        $menu = menu::where('is_api', true)->get();
        return view('dashboard.products.index', ['menus' => $menu])->with('success', 'Post has been deleted!');
    }

    public function search(Request $request) {
        $output = '';

        if ($request->ajax()) {
            $data = Menu::where('name', 'LIKE', $request->search . '%')->where('is_api', true)->get();

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
