{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#001d3d" fill-opacity="1"
    d="M0,224L120,192C240,160,480,96,720,96C960,96,1200,160,1320,192L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
  </path>
</svg> --}}

<footer class="content-info bg-pros90blue mt-12 px-10">
  <div class="container flex flex-col">
    <div class="text-white flex flex-col lg:flex-row justify-around fill-white mt-8">
      <section class="socialicons mb-4">
        {{-- @include('partials/snippets.whatsapp') --}}
        @include('partials/snippets.socialicons')
      </section>
      @php(dynamic_sidebar('sidebar-footer'))
    </div>
    <div class="flex flex-col text-white text-center mb-6">
      <div id="eleicoesfaltam">
        @include('partials/snippets.eleicoesfaltam')
      </div>
      <hr class="my-4 w-2/4 relative left-1/4">
      <div class="flex flex-col">
        PROS Amapá © <br class="block lg:hidden">Todos os direitos reservados. {{ date('Y') }}
        <p>CNPJ: 19.225.311/0001-87</p>
        <p>Av. Henrique Galúcio, 1081 Macapá - AP, 68900-115</p>
      </div>
    </div>
  </div>

</footer>