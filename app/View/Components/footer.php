<?php

namespace App\View\Components;

use Illuminate\View\Component;

class footer extends Component
{
    /**
     * Create a new.jpg component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
