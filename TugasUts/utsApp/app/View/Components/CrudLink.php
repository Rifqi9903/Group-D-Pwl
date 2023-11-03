<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CrudLink extends Component
{
    public $route;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($route=null, $title)
    {
        $this->route=$route;
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.crud-link');
    }
}
