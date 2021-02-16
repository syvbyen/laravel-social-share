<?php

namespace syvbyen\SocialShare\Shareables;

class Pinterest extends Shareable
{
    protected function register()
    {
        $this->setHref('https://pinterest.com/pin/create/button/?url='.$this->url);
    }
}
