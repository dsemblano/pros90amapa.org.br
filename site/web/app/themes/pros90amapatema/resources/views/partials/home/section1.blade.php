<section class="section1 flex flex-wrap flex-col md:flex-row items-center bg-white border-bs container">
  <!--Left Col-->
  <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
    <h1 class="my-4 text-5xl font-bold leading-tight">Carlos Lobato</h1>
    <p class="leading-normal text-xl mb-8">
      Amapaense, advogado, psicólogo, sociólogo, jornalista e âncora do programa Tribuna da Cidade na 1.
    </p>
    <div class="social hidden lg:block w-full">
      <div class="mb-6 flex flex-col fill-pros90blue">
        @include('partials/snippets.socialicons')
        @include('partials/snippets.fblikeshare')
      </div>
        @include('partials/snippets.facebook')
      {{-- <h2>Entre em contato</h2>
      @php(dynamic_sidebar('textos-primary')) --}}
    </div>

  </div>
  <!--Right Col-->
  <div class="w-full md:w-3/5 py-6 text-center">
    <img class="w-full md:w-4/5 z-50 rounded-tl-extraLarge rounded-br-extraLarge" src="@asset('images/perfil.jpg')" />
  </div>
  <div class="social block lg:hidden text-center w-full fill-pros90blue">
      @include('partials/snippets.socialicons')
      @include('partials/snippets.facebook')
  </div>
</section>