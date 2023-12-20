<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Models\Category;
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
Route::get('/products/{menu:slug}', [MenuController::class, 'show']);
Route::get('search', [MenuController::class, 'search']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/products/checkSlug', [DashboardMenuController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/products', DashboardMenuController::class)->middleware('auth');
Route::get('/dashboard/users/checkSlug', [DashboardUserController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/users', DashboardUserController::class)->middleware('auth');

Route::post('/settings', [UserController::class, 'update'])->name('settings.update');
Route::post('/create-product', [MenuController::class, 'store'])->name('product.create');

Route::get('/dashboard/print/products', [DashboardMenuController::class, 'print'])->middleware('auth');
Route::get('/dashboard/products/sortByPrice', [DashboardMenuController::class, 'sortByPrice'])->middleware('auth');

// Route::get('/dashboard/products', function () {
//     return view('dashboard.products.index', [
//         "title" => "Products",
//         "active" => "products",
//         "menus" => Menu::all()
//     ]);
// });

Route::get('/dashboard/products/create', function () {
    return view('dashboard.products.create', [
        "title" => "Create Product",
        "active" => "products",
        "categories" => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/categories', [CategoryController::class, 'index']);

// Route::get('/dashboard/products.create', function () {
//     return view('dashboard.products.create');
// });

// Route::get('/dashboard/users', function () {
//     return view('dashboard.users.index', [
//         "title" => "Users",
//         "active" => "users",
//         "users" => User::all()
//     ]);
// });

// Route::get('/dashboard/categories', function () {
//     return view('dashboard.categories.index');
// });

//login google
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('/register/google', [GoogleController::class, 'index']);
Route::post('/register/google', [GoogleController::class, 'store']);

Route::post('/products/cart/{menu:id}', [CartController::class, 'addToCart'])->middleware('auth');
Route::get('/checkout', [CartController::class, 'checkOut'])->middleware('auth');
Route::delete('/checkout/{menu:id}', [CartController::class, 'delete'])->middleware('auth');
Route::post('/confirm-checkout', [CartController::class, 'confirm'])->middleware('auth');