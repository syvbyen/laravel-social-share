<?php

namespace syvbyen\Share\Channels;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

abstract class Channel
{
    protected $icon;
    protected $url;
    protected $name;
    protected $href;

    public function __construct()
    {
        $this->setName();
        $this->setUrl();
        $this->setIcon();


        $this->register();
    }

    protected function setHref($href)
    {
        $this->href = $href;
    }

    public function getData()
    {
        return [
            'href' => $this->href,
            'name' => $this->name,
            'icon' => $this->icon,
        ];
    }

    protected function setName()
    {
        $explodedNamespace = explode('\\', get_called_class());
        $this->name = Str::lower(array_pop($explodedNamespace));
    }

    protected function setUrl()
    {
        $this->url = Request::url();
    }

    public function setIcon()
    {
        $this->icon = config('share.channels.' . $this->name . '.icon');
    }
}
