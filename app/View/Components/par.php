<?php

namespace App\View\Components;

use Illuminate\View\Component;

class par extends Component
{
    /**
     * Create a new component instance.
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <div>
            <!-- He who is contented is rich. - Laozi -->
            <p>inline comp</p>
        </div>
blade;
    }
}
