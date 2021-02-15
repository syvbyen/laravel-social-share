<?php

namespace syvbyen\Share\Channels;

class Email extends Channel
{
    protected function register()
    {
        $this->setHref("mailto:?body=" . $this->url);
        $this->setName(__('share::app.email'));
    }
}
