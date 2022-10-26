<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only('manageProduct');
        $this->middleware('auth')->except('index', 'show');
    }

    public function index(Request $request)
    {
        $products = Product::with('category')->whereHas('category', function ($query) use ($request) {
            if ($request->has('category')) {
                $query->where('category_name', $request->category);
            }
        })->paginate(10)->withQueryString();

        return view('products.index', compact("products"));
    }

    public function show(Product $product)
    {
        return view('products.show', compact("product"));
    }

    public function create()
    {
        $categories = ProductCategory::get();
        return view('products.create', compact("categories"));
    }

    public function store(StoreProductRequest $request)
    {
        DB::beginTransaction();
        try {
            $attr = $request->all();

            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('storage/products/'), $filename);
            $attr['product_image'] = $filename;

            $attr['product_category_id'] = $request->category;
            $attr['product_name'] = $request->name;
            $attr['product_price'] = $request->price;
            $attr['product_description'] = $request->detail;

            Product::create($attr);

            DB::commit();
            return redirect()->route('products.manage')->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit(Product $product)
    {
        $categories = ProductCategory::get();
        return view('products.edit', compact("product", 'categories'));
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        DB::beginTransaction();

        try {
            $attr = $request->all();

            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('storage/products/'), $filename);
            $attr['product_image'] = $filename;

            $attr['product_category_id'] = $request->category;
            $attr['product_name'] = $request->name;
            $attr['product_price'] = $request->price;
            $attr['product_description'] = $request->detail;

            Storage::delete('public/products/' . $product->product_image);

            $product->update($attr);
            DB::commit();
            return redirect()->route('products.manage')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Product $product)
    {
        Storage::delete('public/products/' . $product->product_image);

        $product->delete();
        return redirect()->route('products.manage')->with('success', 'Product deleted successfully');
    }

    public function manageProduct(Request $request)
    {
        $products = Product::with('category');
        if ($request->has('search')) {
            $products = $products->where('product_name', 'like', '%' . $request->search . '%');
        }
        $products = $products->paginate(10)->withQueryString();
        return view('products.manage', compact("products"));
    }
}
