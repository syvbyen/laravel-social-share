<?php

namespace syvbyen\SocialShare\Shareables;

class Email extends Shareable
{
    protected function register()
    {
        $this->setHref("mailto:?body=" . $this->url);
        $this->setName(__('social-share::social-share.email'));
    }
}
