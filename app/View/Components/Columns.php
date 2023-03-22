<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Columns extends Component
{
    public $columns;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columns)
    {
        $this->columns = $columns;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.columns');
    }
}
