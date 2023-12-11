<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home",
        "menus" => Menu::take(4)->get()
    ]);
});

// Halaman Products
// Route::get('/products', function () {
//     return view('products');
// });

Route::get('/products', [MenuController::class, 'index']);

// Halaman Single Products
Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/products', function () {
    return view('dashboard.products.index', [
        "title" => "Products",
        "active" => "products",
        "menus" => Menu::all()
    ]);
});

Route::get('/dashboard/products.create', function () {
    return view('dashboard.products.create');
});

Route::get('/dashboard/categories', function () {
    return view('dashboard.categories.index');
});

//login google
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('/register/google', [GoogleController::class, 'index']);
Route::post('/register/google', [GoogleController::class, 'store']);