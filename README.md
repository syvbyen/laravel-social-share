
<h1 align="center">🔗 Laravel Social Share 🔗</h1>

This package will make social share links to the most popular platforms (you can remove the ones you don't want in the config). With links to share the page they are currently on. Icons are using [Font Awesome](https://fontawesome.com/) by default, but you can change this in the config.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [View](#view)
- [Localization](#license)
- [Todo](#todo)
- [License](#license)

## Installation
You may use composer to install this package to your Laravel project
```bash
composer require syvbyen/laravel-social-share
```

## Usage
To use it all you have to do is including the component in your view.
```php
<x-social-share>
```
For Laravel versions without components, you can use the directive instead.
```php
@socialshare
```

## Configuration

```php
/*
|--------------------------------------------------------------------------
| Shareables
|--------------------------------------------------------------------------
|
| These are the different types of shareables. If you can call them
| that. If you remove one of these they will not show up in your
| view anymore. Also, the icon refers to fontawesome classes
|
*/
'shareables' => [
    'facebook' => [
        'icon' => 'fab fa-facebook-f',
    ],
    'twitter' => [
        'icon' => 'fab fa-twitter',
    ],
    'linkedin' => [
        'icon' => 'fab fa-linkedin-in'
    ],
    'email' => [
        'icon' => 'fas fa-envelope'
    ],
    /* 
    'pinterest' => [
        'icon' => 'fab fa-pinterest',
    ]
    */
]
```

You can publish the config file of the package.
```bash
php artisan vendor:publish --provider="syvbyen\SocialShare\SocialShareServiceProvider" --tag=config
```

## View
You are more than welcome to publish the view file and make it your own. This is how it looks right now.
```html
<div class="social-share__wrapper">

    <p class="social-share__tagline">@lang('social-share::social-share.share')</p>

    @foreach($shareables as $shareable)

        <a href="{{ $shareable->href }}" class="social-share__link" rel="noreferrer" target="_blank">

                @isset($shareable->icon)

                    <i class="social-share__icon {{ $shareable->icon }}"></i>

                @endisset

            <span class="social-share__name">{{ $shareable->name }}</span>

        </a>

    @endforeach

</div>
```
You can f.ex change the ```$shareable->icon``` to an image source in the config and use an ```<img>``` tag instead. You can publish the view file like so:
```bash
php artisan vendor:publish --provider="syvbyen\SocialShare\SocialShareServiceProvider" --tag=view
```

## Localization file
You can publish the language file of the package.
```bash
php artisan vendor:publish --provider="syvbyen\SocialShare\SocialShareServiceProvider" --tag=lang
```

## Todo
- Add _copy to clipboard_ button
- Design and make CSS
- Give option to set the URL manually (if you want to share another page than the on you're on)

## License
Social Share is open-source software licensed under the [MIT license](https://github.com/syvbyen/laravel-social-share/blob/master/LICENSE)
