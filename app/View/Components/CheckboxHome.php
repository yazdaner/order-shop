<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CheckboxHome extends Component
{
    public $name;
    public $value;
    public $label;

    public function __construct($name,$value,$label)
    {
        $this->name  = $name;
        $this->value  = $value;
        $this->label  = $label;
    }

    public function render()
    {
        return view('components.checkbox-home');
    }
}
