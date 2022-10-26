<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", HomeController::class)->name("home.index");

Route::get("/products/manage-product", [ProductController::class, "manageProduct"])->name("products.manage");
Route::resource('products', ProductController::class);

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::delete("/cart/{cart}", [CartController::class, "destroy"])->name("cart.destroy");
Route::delete('/cart-details/{cart}/{product}', [CartDetailController::class, 'destroy'])->name('cart-detail.destroy');

Route::get('/transactions', [TransactionController::class, 'index'])->name('transaction.index');

Route::get("/profile", UserController::class)->name("profile.index");

Route::get("/login", [Auth\LoginController::class, "index"])->name("login.index");
Route::post("/login", [Auth\LoginController::class, "login"])->name("login.validate");

Route::get("/register", [Auth\RegisterController::class, "index"])->name("register.show");
Route::post("/register", [Auth\RegisterController::class, "store"])->name("register.store");

Route::post("/logout", [Auth\LoginController::class, "logout"])->name("logout");
