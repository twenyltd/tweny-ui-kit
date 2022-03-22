<?php

namespace TwenyCode\TwenyUiKit\Components\Forms;

use Illuminate\View\Component;

class Form extends Component
{
    /** @var string */
    public $action;

    /** @var string */
    public $method;

    /** @var bool */
    public $hasFiles;


    //  Create a new component instance.
    public function __construct($action, $method = 'POST', $hasFiles = false)
    {
        $this->action = $action;
        $this->method = strtoupper($method);
        $this->hasFiles = $hasFiles;
    }


    //Get the view / contents that represent the component.
    public function render()
    {
        return view('tweny-ui-kit-views::components.forms.form');
    }



}
