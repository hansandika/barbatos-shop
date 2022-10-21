<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'show']);
    }

    public function index(Request $request)
    {
        $products = Product::with('productCategory');
        if ($request->category) {
            $products = $products->where('product_category_id', $request->category);
        }
        $products = $products->get();
        return view('products.index', compact("products"));
    }

    public function show(Product $product)
    {
        return view('products.show', compact("product"));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        $attr = $request->all();
        $attr['product_image'] = $request->file('image')->store('images');
        $attr['product_category_id'] = $request->category;
        $attr['product_name'] = $request->name;
        $attr['product_price'] = $request->price;
        $attr['product_description'] = $request->detail;

        Product::create($attr);

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact("product"));
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        $attr['product_image'] = $request->file('image')->store('images');
        $attr['product_category_id'] = $request->category;
        $attr['product_name'] = $request->name;
        $attr['product_price'] = $request->price;
        $attr['product_description'] = $request->detail;

        $product->update($attr);
        return redirect()->route('products.index');
    }
}
