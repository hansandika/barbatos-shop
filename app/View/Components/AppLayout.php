<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private $title;
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app');
    }
}
