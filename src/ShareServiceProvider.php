<?php

namespace syvbyen\Share;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use syvbyen\Share\View\Components\Buttons;
use syvbyen\Share\View\Composers\ChannelComposer;

class ShareServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViews();
        $this->publishData();


        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'share');
    }


    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/share.php',
            'share'
        );
    }


    public function publishData()
    {
        $this->publishes([
            __DIR__ . '/../config/share.php' => config_path('social-share.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/social-share'),
        ], 'lang');

        $this->publishes([
            __DIR__ . '/../resouces/views' => resource_path('views/social-share'),
        ], 'view');

        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/social-share'),
            __DIR__ . '/../config/share.php' => config_path('social-share.php'),
            __DIR__ . '/../resources/views' => resource_path('views/social-share'),
        ]);
    }



    public function loadViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'share');

        View::composer('share::buttons', ChannelComposer::class);

        $this->loadViewComponentsAs('share', [
            Buttons::class,
        ]);
    }
}
