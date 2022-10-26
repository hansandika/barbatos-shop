<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function destroy(Cart $cart, Product $product)
    {
        $cartDetail = $cart->cartDetails()->where('product_id', $product->id)->first();
        $cartDetail->delete();
        return redirect()->route('cart.index')->with('success', 'Product has been removed from cart');
    }
}
