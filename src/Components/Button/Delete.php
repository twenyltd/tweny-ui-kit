<?php

namespace TwenyCode\TwenyUiKit\Components\Button;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Delete extends Component
{
    /* @var  */
    public $action;

    //  Create a new component instance.
    public function __construct($action)
    {
        $this->action = $action;
    }

    //  Get the view / contents that represent the component.
    public function render(): View
    {
        return view('tweny-ui-kit-views::components.button.delete');
    }
}
