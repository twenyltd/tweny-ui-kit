<?php

namespace TwenyCode\TwenyUiKit\Components\Forms\Elements;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Label extends Component
{
    /* @var */
    public $for;

    //  Create a new component instance.
    public function __construct($for)
    {
        $this->for = $for;
    }

    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('tweny-ui-kit-views::components.forms.elements.label');
    }

    public function fallback()
    {
        return Str::ucfirst(str_replace('_', ' ', $this->for));
    }
}
