<?php

namespace syvbyen\SocialShare;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use syvbyen\SocialShare\View\Components\Share;
use syvbyen\SocialShare\View\Composers\ShareableComposer;

class SocialShareServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViews();
        $this->publishData();

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'social-share');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/social-share.php',
            'social-share'
        );
    }

    public function publishData()
    {
        $this->publishes([
            __DIR__.'/../config/social-share.php' => config_path('social-share.php'),
        ], 'config');

        // er usikker på om denne fungerere. Hadde uten filnavn før
        $this->publishes([
            __DIR__.'/../resources/lang/' => resource_path('lang/'),
        ], 'lang');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/social-share'),
        ], 'view');

        //$this->publishes([
        //__DIR__ . '/../resources/lang/social-share.php' => resource_path('lang/social-share.php'),
        //__DIR__ . '/../config/social-share.php' => config_path('social-share.php'),
        //__DIR__ . '/../resources/views' => resource_path('views/social-share'),
        //]);
    }

    public function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'social-share');

        View::composer('social-share::social-share', ShareableComposer::class);

        // TODO: Ta denne sist
        $this->loadViewComponentsAs('social', [
            Share::class,
        ]);

        Blade::include('social-share::social-share', 'socialshare');
    }
}
