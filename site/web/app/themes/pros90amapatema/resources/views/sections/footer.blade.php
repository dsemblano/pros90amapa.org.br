{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#001d3d" fill-opacity="1"
    d="M0,224L120,192C240,160,480,96,720,96C960,96,1200,160,1320,192L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
  </path>
</svg> --}}

<footer class="content-info bg-pros90blue mt-12 px-10">
  <div class="text-white fill-white flex flex-row justify-around container py-7">
    <section class="socialicons">
      @include('partials/snippets.whatsapp')
      @include('partials/snippets.socialicons')
    </section>
    @php(dynamic_sidebar('sidebar-footer'))
  </div>
  <div class="text-center text-white pb-8">
    PROS 90 Amapá © Todos os direitos reservados. {{ date('Y') }}
  </div>
</footer>