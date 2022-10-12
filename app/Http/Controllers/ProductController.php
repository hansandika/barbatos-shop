<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('products', compact("products"));
    }

    public function show(Product $product)
    {
        return view('product', compact("product"));
    }
}
