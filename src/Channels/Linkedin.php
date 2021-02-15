<?php

namespace syvbyen\SocialShare\Channels;

class Linkedin extends Channel
{
    protected function register()
    {
        $this->setHref("https://www.linkedin.com/sharing/share-offsite/?url=" . $this->url);
        $this->setName('LinkedIn');
    }
}
