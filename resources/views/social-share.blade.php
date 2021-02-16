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
