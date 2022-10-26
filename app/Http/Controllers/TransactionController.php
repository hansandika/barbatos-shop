<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $transactions = $user->transactions;
        return view('history.index', [
            'transactions' => $transactions
        ]);
    }
}
