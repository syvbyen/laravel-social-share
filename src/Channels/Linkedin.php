<?php

namespace syvbyen\Share\Channels;

class Linkedin extends Channel
{
    protected function register()
    {
        $this->setHref("https://www.linkedin.com/sharing/share-offsite/?url=" . $this->url);
    }
}
