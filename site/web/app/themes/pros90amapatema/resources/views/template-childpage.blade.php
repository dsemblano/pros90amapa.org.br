{{--
  Template Name: Child Page Template
--}}

@extends('layouts.app')

@section('content')
<div class="noticias w-full">
  <div class="page-header text-center container mb-0 lg:mt-12 lg:mb-8 prose lg:prose-xl  prose-a:text-blue-600 hover:prose-a:text-blue-500">
      <h2>Notícias</h2>
  </div>
  <div class="flex flex-wrap">

      <?php 
        $wpb_all_query = new WP_Query(array(
          'post_type'=>'page',
          'post_status'=>'publish',
          'post_parent'=> $post->ID,
          'posts_per_page'=>-1));
         ?>
      <?php if ( $wpb_all_query->have_posts() ) : ?>
      <!-- the loop -->
      <h2>Child parent<?php the_ID(); ?></h2>
      <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
      <article @php(post_class('article-posts w-full xl:w-1/3 md:w-1/2 mt-4 pr-0 xl:pr-8 xl:pb-8'))>
        <h2>child<?php the_ID(); ?></h2>
          <div class=" box bg-white">
              <figure class="thumbnail">
                  <a href="{{ get_permalink() }}">
                      @if ( has_post_thumbnail() )
                      {{ the_post_thumbnail('post-thumbnail', ['class' => 'lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 w-full object-cover object-center', 'title' => 'Feature image']); }}
                      @else
                      <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 w-full object-cover object-center"
                          src="@asset('images/default.png')" alt="<?php the_title(); ?>">
                      @endif
                  </a>
              </figure>
              <header class="p-6">
                  <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                      <a href="{{ get_permalink() }}">
                          <?php the_title(); ?>
                      </a>
                  </h2>
  
                  @include('partials.entry-meta')
              </header>
              <?php
                  //echo '<p class="leading-relaxed text-base text-gray-600 mt-2">' . get_the_excerpt() . '</p>'; 
              ?>
          </div>
      </article>
      <?php endwhile; ?>
      <!-- end of the loop -->
      <?php wp_reset_postdata(); ?>
      <?php get_pages('child_of='.$post->ID.'&sort_column=menu_order');   ?>
      <?php else : ?>
      <p>
          <?php _e( 'Sem posts.' ); ?>
      </p>
      <?php endif; ?>
  </div>    
</div>

  
@endsection