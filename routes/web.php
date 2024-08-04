<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
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
    $products = Product::all();
    return view('home',[
        'products' => $products
    ]);
});

Route::get('login', [SessionController::class, 'create'])->name('login');
Route::post('login', [SessionController::class, 'store'])->name('login.store');
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function(){
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::get('/cart', [ProductController::class, 'getCart'])->name('products.index');
    Route::post('/cart', [ProductController::class, 'addToCart'])->name('products.cart');
});

Route::post('/products', [ProductController::class, 'store'])->name('products.store');
