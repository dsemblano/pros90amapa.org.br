<script type="text/javascript">
  $( document ).ready(function() {
  $('.menu-item-has-children').on('click', function(){

  if ($('.menu-item-has-children').hasClass('open')) {
     $(this).removeClass('open');
   } else {
      $(this).addClass('open');
   }
  });  
});
</script>

<header class="banner bg-white fixed top-0 w-full z-50">
  <nav class="nav-primary container py-2">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a class="brand flex items-center px-4 xl:px-0" href="{{ home_url('/') }}">
        {{-- {!! $siteName !!} --}}
        <img class="w-24" src="@asset('images/logo.png')" />
      </a>
    <div id="busca" class="flex md:order-2">
      <button type="button" data-collapse-toggle="mobile-menu-3" aria-controls="mobile-menu-3" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" >
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden relative md:block">
        @include('partials/inputsearch')
      </div>
      <button data-collapse-toggle="mobile-menu-3" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-3" aria-expanded="false">
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
      <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-3">
        <div class="relative mt-3 md:hidden">
          @include('partials/inputsearch')
        </div>
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium', 'echo' => false]) !!}
      </div>
    </div>
  </nav>
</header>
