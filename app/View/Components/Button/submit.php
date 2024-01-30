<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class submit extends Component
{
    public $name;
    public $class;

    public function __construct($name, $class = '')
    {
        $this->name = $name;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button.submit');
    }
}
