<?php

use App\Models\Cart;
use App\Models\Menu;
use App\Models\CartDetail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiMenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardCartController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardUserController;

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

// User
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home",
        "menus" => Menu::take(4)->get()
    ]);
});

Route::get('/dashboard/api-products', [ApiMenuController::class, 'dashboardShow'])->middleware('admin');
Route::get('/dashboard/api-products/get', [ApiMenuController::class, 'store'])->middleware('admin');
Route::get('/dashboard/api-products/{apiMenu:slug}', [ApiMenuController::class, 'show'])->middleware('admin');
Route::post('/dashboard/api-products/{apiMenu:slug}', [ApiMenuController::class, 'update'])->middleware('admin');
Route::get('/dashboard/api-products/{apiMenu:slug}/edit', [ApiMenuController::class, 'edit'])->middleware('admin');
Route::delete('/dashboard/api-products/{apiMenu:slug}', [ApiMenuController::class, 'destroy'])->middleware('admin');

Route::get('/products', [MenuController::class, 'index']);
Route::get('/products/{menu:slug}', [MenuController::class, 'show']);
Route::get('search', [MenuController::class, 'search']);

Route::get('/others', [ApiMenuController::class, 'index'])->middleware('auth');
Route::get('/others/{apiMenu:slug}', [ApiMenuController::class, 'show'])->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
})->middleware('auth');

// View untuk Halaman Profile sementara
Route::get('/profile', function () {
    $cart_first = Cart::where('user_id', auth()->user()->id)->where('status', 1)->latest()->get();
    $cart_details = [];

    for ($i = 0; $i < count($cart_first); $i++) {
        $cart_details = CartDetail::where('cart_id', $cart_first[$i]->id)->latest()->get();
    }

    return view('profile', [
        "cart_details" => $cart_details,
    ]);
})->middleware('auth');

// View untuk ubah profile sementara
Route::get('/update-profile', function () {
    return view('update-profile');
})->middleware('auth');

// ubah 
Route::post('/update-profile', [UserController::class, 'updateProfile'])->middleware('auth');

// View untuk About Developer
Route::get('/aboutdev', function () {
    return view('aboutdev');
})->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//login google
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('/register/google', [GoogleController::class, 'index']);
Route::post('/register/google', [GoogleController::class, 'store']);

// cart
Route::get('/cart', [CartController::class, 'cart'])->middleware('auth');
Route::get('/cart/{menu:id}', [CartController::class, 'addToCart'])->middleware('auth');
Route::get('/apiAddToCart/{menu:id}', [CartController::class, 'apiAddToCart'])->middleware('auth');
Route::delete('/cart/{menu:id}', [CartController::class, 'delete'])->middleware('auth');
Route::get('/confirm-checkout', [CartController::class, 'confirm'])->middleware('auth');
Route::get('/status/{cart:id}', [CartController::class, 'getStatus'])->middleware('auth');
Route::get('/cart/update-data', [CartController::class, 'updateDataPayment'])->middleware('auth');
Route::post('/cart/update/{detail:id}', [CartController::class, 'ubah'])->middleware('auth');

// history
Route::get('/history', [HistoryController::class, 'index'])->middleware('auth');
Route::get('/history/{cart:id}', [HistoryController::class, 'detail'])->middleware('auth');

// Admin
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "antrianPending" => Cart::where('status', 0)->count(),
        "antrianDiproses" => Cart::where('status', 1)->count(),
        "totalAntrianPerhari" => Cart::where(['date' => date('Y-m-d'), 'status' => 1])->count(),
        "cart" => Cart::where('status', 1)->latest()->take(3)->get(),
    ]);
})->middleware('admin');

Route::get('/dashboard/categories', [CategoryController::class, 'index'])->middleware('admin');

Route::resource('/dashboard/users', DashboardUserController::class)->middleware('admin');
Route::resource('/dashboard/orders', DashboardCartController::class)->middleware('admin');
Route::resource('/dashboard/products', DashboardMenuController::class)->middleware('admin');

Route::get('/dashboard/products/checkSlug', [DashboardMenuController::class, 'checkSlug'])->middleware('admin');
Route::get('/dashboard/users/checkSlug', [DashboardUserController::class, 'checkSlug'])->middleware('admin');

Route::post('/dashboard/users/update', [DashboardUserController::class, 'update'])->middleware('admin');

Route::get('/dashboard/print/histories', [DashboardCartController::class, 'print'])->middleware('admin');
Route::get('/dashboard/print/products', [DashboardMenuController::class, 'print'])->middleware('admin');

// Mail
Route::get('/mail', [MailController::class, 'sendMail'])->middleware('auth');
Route::get('/confirm-email', function () {
    $user = \App\Models\User::find(auth()->user()->id);
    $user->email_verified_at = now();
    $user->save();
    return view('mail.verify');
})->middleware('auth')->name('verification.notice');