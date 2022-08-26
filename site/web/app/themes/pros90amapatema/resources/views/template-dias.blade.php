{{--
  Template Name: Dias Template
--}}
<div id="countdown_container" class="container w-full h-auto flex flex-col items-center mt-12">
    <a href="{{ home_url('/') }}">
        <img width="300" height="418" alt="Logo PROS na home" src="@asset('images/logo.png')" />
    </a>
    @include('partials/snippets.dias')
    <div class="text-4xl w-full font-bold relative">
        {!! do_shortcode('[countdown date="02 October 2022" width="600" color="#F45F2D" bgcolor="#FFF" format="dHMS" hour="07"]') !!}
    </div>
</div>
