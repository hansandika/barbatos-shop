<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $categories = ProductCategory::with('products');
        if ($request->has('search')) {
            $products = Product::where('product_name', 'like', '%' . $request->search . '%')->get();
            return view('index', compact('products'));
        }
        $categories = $categories->get();
        return view('index', compact("categories"));
    }
}
