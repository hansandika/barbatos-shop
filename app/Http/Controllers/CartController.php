<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $cart = $user->cart;
        $totalPrice = 0;
        if (!$cart) {
            return view('cart.index', [
                'cart' => null,
                'cartDetails' => [],
                'totalPrice' => $totalPrice
            ]);
        }
        $cartDetails = $cart->cartDetails;
        foreach ($cartDetails as $cartDetail) {
            $totalPrice += $cartDetail->quantity * $cartDetail->product->product_price;
        }
        return view('cart.index', [
            'cart' => $cart,
            'cartDetails' => $cartDetails,
            'totalPrice' => $totalPrice
        ]);
    }

    public function store(CartRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = auth()->user();
            $cart = $user->cart;
            if (!$cart) {
                $cart = Cart::create([
                    'user_id' => $user->id
                ]);
            }

            $cartDetail = CartDetail::where('cart_id', $cart->id)
                ->where('product_id', $request->product_id)
                ->first();
            if ($cartDetail) {
                $cartDetail->quantity += $request->quantity;
                $cartDetail->save();
            } else {
                $cartDetail = CartDetail::create([
                    'cart_id' => $cart->id,
                    'product_id' => $request->product_id,
                    'quantity' => $request->quantity
                ]);
            }

            DB::commit();
            return redirect()->route('cart.index')->with('success', 'Product added to cart successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Cart $cart)
    {
        DB::beginTransaction();
        try {
            $cartDetails = $cart->cartDetails;

            $transaction = Transaction::create([
                'user_id' => auth()->user()->id,
                'transaction_date' => now(),
            ]);

            foreach ($cartDetails as $cartDetail) {
                TransactionDetail::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $cartDetail->product->id,
                    'quantity' => $cartDetail->quantity,
                ]);
                $cartDetail->delete([
                    'cart_id' => $cart->id,
                    'product_id' => $cartDetail->product->id,
                ]);
            }

            $cart->delete();
            DB::commit();
            return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
