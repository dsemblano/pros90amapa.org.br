{{--
  Template Name: PROS Mulher Template
--}}

@extends('layouts.app')

@section('content')
<div class="prosmulher w-full">
    <div class="page-header text-center container prose lg:prose-2xl  prose-a:text-blue-800 prose-a:no-underline hover:prose-a:text-blue-500 hover:prose-a:underline">
        <h1>PROS Mulher Amapá</h1>
    </div>
    <figure class="grid my-8 place-items-center">
        <img src="@asset('images/logoprosmulhercomcandidatas.jpeg')" alt="Foto candidatas PROS">
    </figure>
    <div class="flex flex-wrap -m-4">
        <?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'pros-mulher', 'posts_per_page'=>-1)); ?>
        <?php if ( $wpb_all_query->have_posts() ) : ?>
        <!-- the loop -->
        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <article @php(post_class('article-posts w-full xl:w-1/3 md:w-1/2 mt-4 pr-0 xl:pr-8 xl:pb-8'))>
            <div class=" box bg-white">
                <figure class="thumbnail">
                    <a href="{{ get_permalink() }}">
                        @if ( has_post_thumbnail() )
                        {{ the_post_thumbnail('post-thumbnail', ['class' => 'lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72   w-full object-cover object-center mb-6', 'title' => 'Feature image']); }}
                        @else
                        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 w-full object-cover object-center mb-6" alt="Imagem destacada PROS Mulher" src="@asset('images/default.png')"  alt="{!! $title !!}">
                            src="@asset('images/default.png')" alt="<?php the_title(); ?>">
                        @endif
                    </a>
                </figure>
                <header class="px-6">
                    <h2 class="text-2xl text-gray-900 font-medium title-font mb-2">
                        <a href="{{ get_permalink() }}">
                            <?php the_title(); ?>
                        </a>
                    </h2>
    
                    @include('partials.entry-meta')
                </header>
                <div class="entry-summary px-6 py-3">
                    @php(the_excerpt())
                </div>
            </div>
        </article>
        <?php endwhile; ?>
        <!-- end of the loop -->
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p>
            <?php _e( 'Sem posts.' ); ?>
        </p>
        <?php endif; ?>
    </div>
      {!! get_the_posts_pagination(array('prev_text' => '« Anterior' , 'next_text' => 'Próximo »' )) !!}    
</div>

@endsection
