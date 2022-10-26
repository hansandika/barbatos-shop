<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_price',
        'product_description',
        'product_image',
        'product_category_id',
    ];

    public const VALIDATION_RULES = [
        'name' => [
            'required'
        ],
        'category' => [
            'required',
            'exists:product_categories,id'
        ],
        'detail' => [
            'required'
        ],
        'price' => [
            'required',
            'numeric'
        ],
        'photo' => [
            'required',
            'image',
            'mimes:jpeg,png,jpg',
        ]
    ];

    public function getImageAttribute()
    {
        return asset('storage/products/' . $this->product_image);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
}
