<?php

namespace App\View\Components\Ui;

use Illuminate\View\Component;

class Tombolkembali extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $url;

    public function __construct($url='#')
    {
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.tombolkembali');
    }
}
