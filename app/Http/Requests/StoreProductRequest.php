<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        $rules = Product::VALIDATION_RULES;
        return $rules;
    }
}
