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

Route::get("/", [Auth\LoginController::class, "index"])->name("login.show");

Route::get("/profile", function () {
    return view("auth/profile");
});

Route::get("/update", function () {
    return view('admin/update_product');
});
Route::get("/add", function () {
    return view('admin/add_product');
});

Route::get("/products", function () {
    return view('products/products');
});

Route::get("/productdetail/{id}", function () {
    return view('products/product_detail');
});

Route::get("/manage", function () {
    return view('admin/manage_product');
});

Route::get("/home", function () {
    return view('home');
});
Route::get("/cart", function () {
    return view('auth/cart');
});
Route::get("/history", function () {
    return view('auth/history');
});

// Route::get("/home", [HomeController::class, "index"])->name("home.show");
Route::resource('products', ProductController::class);

Route::get("/login", [Auth\LoginController::class, "index"])->name("login.show");
Route::post("/login", [Auth\LoginController::class, "loginValidate"])->name("login.validate");

Route::get("/register", [Auth\RegisterController::class, "index"])->name("register.show");
Route::post("/register", [Auth\RegisterController::class, "store"])->name("register.store");

Route::get("/logout", [Auth\LoginController::class, "logout"])->name("logout");
