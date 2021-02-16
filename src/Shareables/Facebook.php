<?php

namespace syvbyen\SocialShare\Shareables;

class Facebook extends Shareable
{
    protected function register()
    {
        $this->setHref("https://www.facebook.com/sharer/sharer.php?u=" . $this->url);
    }
}
