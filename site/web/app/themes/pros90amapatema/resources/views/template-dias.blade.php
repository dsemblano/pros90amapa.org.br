{{--
  Template Name: Dias Template
--}}
<div id="countdown_container" class="container h-auto flex flex-row items-center px-4">
    @include('partials/snippets.dias')
    {{-- <a href="{{ home_url('/') }}">
        <img alt="Logo PROS na home" width="300" src="@asset('images/logodias.jpg')" />
    </a> --}}
    <div class="text-3xl  w-2/5 font-bold relative mb-6">
        {!! do_shortcode('[countdown date="02 October 2022" width="600" color="#F45F2D" bgcolor="#FFF" format="dHMS" hour="07"]') !!}
    </div>
</div>
<div class="container">
    {!! do_shortcode('[recent_post_slider design="design-4" autoplay="true" speed="800"]') !!}
    @include('partials/snippets.clock')
</div>
