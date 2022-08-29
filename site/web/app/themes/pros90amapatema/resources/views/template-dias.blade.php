{{--
  Template Name: Dias Template
--}}
<div id="countdown_container" class="container w-full h-auto flex flex-col items-center mt-6">
    @include('partials/snippets.dias')
    <a href="{{ home_url('/') }}">
        <img alt="Logo PROS na home" width="300" src="@asset('images/logodias.jpg')" />
    </a>
    <div class="text-4xl w-full font-bold relative mb-6">
        {!! do_shortcode('[countdown date="02 October 2022" width="600" color="#F45F2D" bgcolor="#FFF" format="dHMS" hour="07"]') !!}
    </div>
</div>
