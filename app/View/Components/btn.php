<?php

namespace App\View\Components;

use Illuminate\View\Component;

class btn extends Component
{

    // public $post;
    public function __construct()
    {
        // $this->post=$post;
//
    }
    public function render()
    {
        return view('components.btn');
    }
}
