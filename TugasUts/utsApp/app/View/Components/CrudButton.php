<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CrudButton extends Component
{
    public $href;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($href, $title)
    {
        $this->href=$href;
        $this->title=$title;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.crud-button');
    }
}
