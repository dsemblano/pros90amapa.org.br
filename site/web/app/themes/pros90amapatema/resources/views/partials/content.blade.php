<article @php(post_class('article-posts xl:w-1/3 md:w-1/2 mt-4'))>
  <div class="bg-white p-6 rounded-lg">
    <figure class="thumbnail">
      <a href="{{ get_permalink() }}">
      @if ( has_post_thumbnail() )
        {{ the_post_thumbnail('post-thumbnail', ['class' => 'lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6', 'title' => 'Feature image']); }}
        @else
        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="@asset('images/default.png')"  alt="{!! $title !!}">
      @endif
      </a>
    </figure>
      <header>
        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
          <a href="{{ get_permalink() }}">
            {!! $title !!}
          </a>
        </h2>
    
      @include('partials.entry-meta')
      </header>
        <?php
          //echo '<p class="leading-relaxed text-base text-gray-600 mt-2">' . get_the_excerpt() . '</p>'; 
        ?>
  </div>
</article>