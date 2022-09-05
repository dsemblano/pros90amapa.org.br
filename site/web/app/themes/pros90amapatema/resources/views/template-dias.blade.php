{{--
  Template Name: Dias Template
--}}
<section id="countdown">
    <div id="countdown_container" class="container h-auto flex flex-row items-center px-8">
        @include('partials/snippets.dias')
        {{-- <a href="{{ home_url('/') }}">
            <img alt="Logo PROS na home" width="300" src="@asset('images/logodias.jpg')" />
        </a> --}}
        <div class="text-3xl flex flex-row items-center w-2/5 font-bold relative mb-6">
            {!! do_shortcode('[countdown date="02 October 2022" width="600" color="#F45F2D" bgcolor="#FFF" format="dHMS" hour="07"]') !!}
            @include('partials/snippets.clock')
        </div>
    </div>
    <div id="recent_clock" class="container">
        {!! do_shortcode('[recent_post_slider autoplay="true" autoplay_interval="10000" design="design-4" dots="false" speed="1800" show_read_more="false" show_author="false" content_words_limit="45"]') !!}
    </div>
    <div class="imgpros container">
        <img class="w-28" src="https://pbs.twimg.com/profile_images/1534230251697541123/heJ6RE6n_400x400.jpg" />
    </div>
</section>

