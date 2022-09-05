{{--
  Template Name: Dias Template
--}}
<section id="countdown">
    <div id="countdown_container" class="container h-auto flex flex-row items-center px-8">
        @include('partials/snippets.dias')
        {{-- <a href="{{ home_url('/') }}">
            <img alt="Logo PROS na home" width="300" src="@asset('images/logodias.jpg')" />
        </a> --}}
        <div class="text-3xl  w-2/5 font-bold relative mb-6">
            {!! do_shortcode('[countdown date="02 October 2022" width="600" color="#F45F2D" bgcolor="#FFF" format="dHMS" hour="07"]') !!}
        </div>
        <img class="w-28" src="https://scontent.fmcp3-1.fna.fbcdn.net/v/t39.30808-6/286556821_115448234517312_2982349885631481630_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGy46dUcnEMChjhNt_Tg11AFXBVs0iBcV8VcFWzSIFxX0DI1MHAqsTf4rG1fe0ehVFFhPxVLNAkOMf-4LmJPhVs&_nc_ohc=BbIVfzy2nMMAX8D9VSe&_nc_ht=scontent.fmcp3-1.fna&oh=00_AT91F8a9gDR1p5O77HvUdUHuZKLmkxRL80LJdJ9UX9K8Mg&oe=631B54CC" />
    </div>
    <div id="recent_clock" class="container">
        {!! do_shortcode('[recent_post_slider design="design-4" autoplay="true" speed="800"]') !!}
        @include('partials/snippets.clock')
    </div>
</section>

