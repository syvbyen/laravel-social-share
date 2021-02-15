<div class="social-share__wrapper">

    <p class="social-share__tagline">@lang('share::app.share')</p>

    @foreach($channels as $channel)

        <a href="{{ $channel['href'] }}" class="social-share__link">


            @isset($channel['icon'])

                <i class="social-share__icon {{ $channel['icon'] }}"></i>

            @endisset

            <span class="social-share__name">{{ $channel['name'] }}</span>

        </a>

    @endforeach

</div>
