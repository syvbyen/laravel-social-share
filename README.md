
<h1 align="center">🔗 Laravel Social Share 🔗</h1>

This package will make social share links to the most popular platforms (you can remove the ones you don't want in the config). With links to share the page they are currently on. Icons are using [Font Awesome](https://fontawesome.com/) by default, but you can change this in the config. **And its super easy to use**

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
To use it all you have to do is including the component in your view. Like this:
```php
<x-social-share>
```
I am planning to make it possible to use a Laravel directive also. So it's a little bit more backward compatible.

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
You are more than welcome to publish the view file and make it your own. This is how it looks right now
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
You can f.ex change the ```$shareable->icon``` to a src in the config and use an image instead. You can publish the view file like so:
```bash
php artisan vendor:publish --provider="syvbyen\SocialShare\SocialShareServiceProvider" --tag=view
```

## Localization file
You can publish the publish file of the package
```bash
php artisan vendor:publish --provider="syvbyen\SocialShare\SocialShareServiceProvider" --tag=lang
```

## Todo
- Add the possibility to use Laravel directives
- Add _copy to clipboard_ button
- Design and make CSS

## License
Social Share is open-source software licensed under the MIT license
