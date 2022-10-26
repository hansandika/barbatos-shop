<?php

namespace App\View\Components;

use App\Models\ProductCategory;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    protected $categories;
    public function __construct()
    {
        $this->categories = ProductCategory::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.navbar', [
            "categories" => $this->categories
        ]);
    }
}
