<?php

namespace syvbyen\SocialShare\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Str;


class ChannelComposer
{
    public function compose(View $view)
    {
        $channels = [];
        /**
         * Goes through all the channels in config('share.channels')
         * and finds the corresponding class in the namespace
         * Syvbyen\Share\Channels (src/Channels)
         */
        foreach (config('social-share.channels') as $channel => $value) {
            $class = 'syvbyen\\SocialShare\\Channels\\' . Str::title($channel);
            $channels[] = (new $class)->getData();
        }

        $view->with('channels', $channels);
    }
}
