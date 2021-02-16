<?php

namespace syvbyen\SocialShare\Shareables;

class Linkedin extends Shareable
{
    protected function register()
    {
        $this->setHref("https://www.linkedin.com/sharing/share-offsite/?url=" . $this->url);
        $this->setName('LinkedIn');
    }
}
