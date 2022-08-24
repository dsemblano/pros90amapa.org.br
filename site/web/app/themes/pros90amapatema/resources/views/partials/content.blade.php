<article @php(post_class('article-posts w-full xl:w-1/3 md:w-1/2 mt-4 pr-0 xl:pr-8 xl:pb-8'))>
  <div class=" box bg-white ">
    <figure class="thumbnail">
      <a href="{{ get_permalink() }}">
      @if ( has_post_thumbnail() )
        {{ the_post_thumbnail('post-thumbnail', ['class' => 'lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72   w-full object-cover object-center mb-6', 'title' => 'Feature image']); }}
        @else
        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 w-full object-cover object-center mb-6" alt="Imagem destacada matéria de notícias" src="@asset('images/default.png')"  alt="{!! $title !!}">
      @endif
      </a>
    </figure>
    <header class="px-6">
        <h2 class="text-2xl text-gray-900 font-medium title-font mb-2">
          <a href="{{ get_permalink() }}">
            {!! $title !!}
          </a>
        </h2>
    
      @include('partials.entry-meta')
      </header>
      <div class="entry-summary px-6 py-3 text-gray-700">
        @php(the_excerpt())
      </div>
  </div>
</article>
