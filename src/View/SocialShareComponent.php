<?php

namespace syvbyen\SocialShare\Components;

use Illuminate\View\Component;

class Buttons extends Component
{

    public function __construct()
    {
    }


    public function render()
    {
        return view('social-share::buttons');
    }
}
