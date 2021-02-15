<?php

namespace syvbyen\Share\Channels;

class Facebook extends Channel
{
    protected function register()
    {
        $this->setHref("https://facebook.com/sharer/sharer.php?u=" . $this->url);
    }
}
