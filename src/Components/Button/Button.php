<?php

namespace TwenyCode\TwenyUiKit\Components\Button;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /* @var  */
    public $type;

    /* @var  */
    public $label;

    /*  @var  */
    public $id;

    //  Create a new component instance.
    public function __construct($type = 'submit',$id = null, $label = 'Submit')
    {
        $this->type = $type;
        $this->id = $id;
        $this->label = $label;
    }

    //  Get the view / contents that represent the component.
    public function render(): View
    {
        return view('tweny-ui-kit-views::components.button.button');
    }
}
