<?php

namespace syvbyen\SocialShare\Channels;

use Exception;
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

    abstract protected function register();

    protected function setHref($href)
    {
        $this->href = $href;
    }

    public function getData()
    {
        if (!isset($this->href)) {
            throw new Exception('The $href property is empty. You need to give your class a shareable link');
        }

        return [
            'href' => $this->href,
            'name' => $this->name,
            'icon' => $this->icon,
        ];
    }

    /** 
     * This defaults to capitalizing the class name
     * as the name to show in the view. If the
     * word needs a translation, or if the
     * capitalization is special like 
     * "LinkedIn" you can run the 
     * method in the register 
     * function with you new name.
     * */
    protected function setName($name = null)
    {
        if (!isset($name)) {
            $explodedNamespace = explode('\\', get_called_class());
            return $this->name = Str::title(array_pop($explodedNamespace));
        }

        $this->name = $name;
    }

    protected function setUrl()
    {
        $this->url = Request::url();
    }

    public function setIcon()
    {
        $this->icon = config('social-share.channels.' . Str::lower($this->name) . '.icon');
    }
}
