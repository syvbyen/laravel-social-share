<?php

namespace syvbyen\SocialShare\Channels;

class Email extends Channel
{
    protected function register()
    {
        $this->setHref("mailto:?body=" . $this->url);
        $this->setName(__('social-share::social-share.email'));
    }
}
