<?php

namespace syvbyen\SocialShare\Shareables;

class Twitter extends Shareable
{
    protected function register()
    {
        $this->setHref('https://twitter.com/intent/tweet?url='.$this->url);
    }
}
