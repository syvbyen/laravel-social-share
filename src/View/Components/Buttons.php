<?php

namespace syvbyen\Share\View\Components;

use Illuminate\View\Component;

class Buttons extends Component
{

    public function __construct()
    {
    }


    public function render()
    {
        return view('share::buttons');
    }
}
