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

Route::get("/products", function () {
    return view('products');
});

Route::get("/productdetail/{id}", function () {
    return view('productdetail');
});

Route::get("/manage", function () {
    return view('admin/manage_product');
});

Route::get("/home", [HomeController::class, "index"])->name("home.show");
Route::resource('products', ProductController::class);

Route::get("/login", [Auth\LoginController::class, "index"])->name("login.show");
Route::post("/login", [Auth\LoginController::class, "loginValidate"])->name("login.validate");

Route::get("/register", [Auth\RegisterController::class, "index"])->name("register.show");
Route::post("/register", [Auth\RegisterController::class, "store"])->name("register.store");

Route::get("/logout", [Auth\LoginController::class, "logout"])->name("logout");
