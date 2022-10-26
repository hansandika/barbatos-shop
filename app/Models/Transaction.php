<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'transaction_date'];
    protected $with = ['transactionDetails'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function getTotalPriceAttribute()
    {
        $totalPrice = 0;
        foreach ($this->transactionDetails as $transactionDetail) {
            $totalPrice += $transactionDetail->product->product_price * $transactionDetail->quantity;
        }
        return $totalPrice;
    }

    public function getTotalQuantityAttribute()
    {
        $totalQuantity = 0;
        foreach ($this->transactionDetails as $transactionDetail) {
            $totalQuantity += $transactionDetail->quantity;
        }
        return $totalQuantity;
    }
}
