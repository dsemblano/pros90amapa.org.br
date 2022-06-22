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
    </div>

  </div>
  <!--Right Col-->
  <div class="w-full md:w-3/5 py-6 text-center">
    <img class="w-full md:w-4/5 z-50 rounded-tl-extraLarge rounded-br-extraLarge" src="@asset('images/perfil.jpg')" />
  </div>
  <div class="social block lg:hidden text-center w-full fill-pros90blue">
      @include('partials/snippets.socialicons')
      @include('partials/snippets.facebook')
      <?php $the_query = new WP_Query( array( 'posts_per_page' => 5, 'offset' => 3 ) ); ?>       
      
      @if ( $the_query->have_posts() )
      <article @php(post_class('article-posts xl:w-1/3 md:w-1/2 p-4'))>
        @while(have_posts()) @php(the_post())
          @php $the_query->the_post() @endphp 
          @php echo '<a href=' . get_the_permalink() . '><li>' . get_the_title() . '</li>' @endphp 
        @endwhile
      </article>

      @php  wp_reset_postdata() @endphp 
  </div>
</section>