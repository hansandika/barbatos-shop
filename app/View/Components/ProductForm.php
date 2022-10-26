<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class ProductForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $categories;
    public string $action;
    public $product;

    public function __construct($categories, $action, $product = null)
    {
        $this->categories = $categories;
        $this->action = $action;
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('products.partials.form-control');
    }
}
