<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = ProductCategory::with('product');

        if ($request->search != null) {
            $categories = $categories->where('name', 'like', '%' . $request->search . '%');;
        }

        $categories = $categories->get();
        return view('home', compact("$categories"));
    }
}
