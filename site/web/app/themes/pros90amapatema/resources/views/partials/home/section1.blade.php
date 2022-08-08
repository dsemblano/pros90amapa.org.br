<section class="flex flex-col lg:flex-row lg:mt-40 justify-between items-start bg-white">
    <div class="flex flex-col w-full lg:w-5/6 justify-center text-center lg:text-left animated animatedFadeInUp fadeInUp">
      <h1 class="mb-4 uppercase text-7xl lg:text-9xl font-bold text-pros90lightblue">PROS Amapá</h1>
      <img class="block lg:hidden rounded-tl-extraLarge rounded-br-extraLarge" width="600" height="718" alt="Logo PROS na home" src="@asset('images/logopros.png')" />
      <article class="mt-8 mb-8 prose lg:prose-2xl prose-a:text-blue-800 prose-a:no-underline hover:prose-a:text-blue-500 hover:prose-a:underline">
        <h2>
          Partido Republicano da Ordem Social<br>PROS AP
        </h2>
        <p class="leading-normal text-xl mb-8">
          Diretório Estadual do <a href="https://pros.org.br" data-id="https://pros.org.br" target="_blank" rel="noopener" data-type="URL">PROS Nacional</a>.<br>Sede do partido: Av. Henrique Galúcio 1081, Bairro Central, Macapá AP.
        </p>
        <p class="leading-normal text-xl mb-8">
          Toda grande jornada sempre começa com passos firmes!
        </p>
        <div class="social lg:block w-full">
          <div class="mb-4 lg:mb-9 flex flex-col fill-pros90blue">
            @include('partials/snippets.socialicons')
            @include('partials/snippets.fblikeshare')
          </div>
            @include('partials/snippets.facebook')
        </div>
      </article>
    </div>
    <!--Right Col desktop -->
    <div class="social hidden lg:block w-full pl-48">
      <img class="z-50 hidden lg:block rounded-tl-extraLarge rounded-br-extraLarge" width="600" height="718" alt="Logo PROS na home" src="@asset('images/logopros.png')" />
    </div>
  </section>