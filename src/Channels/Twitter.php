<?php

namespace syvbyen\Share\Channels;

class Twitter extends Channel
{
    protected function register()
    {
        $this->setHref("https://twitter.com/intent/tweet/?text=" . $this->url);
    }
}
