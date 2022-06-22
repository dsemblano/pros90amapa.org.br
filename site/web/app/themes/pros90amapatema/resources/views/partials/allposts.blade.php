<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

<!-- the loop -->
<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
<article @php(post_class('article-posts xl:w-1/3 md:w-1/2 mt-4'))>
    <div class="bg-white p-6 rounded-lg">
        <figure class="thumbnail">
            <a href="{{ get_permalink() }}">
            @if ( has_post_thumbnail() )
            {{ the_post_thumbnail('post-thumbnail', ['class' => 'lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6', 'title' => 'Feature image']); }}
            @else
            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="@asset('images/default.png')"  alt="<?php the_title(); ?>">
            @endif
            </a>
        </figure>
            <header>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                <a href="{{ get_permalink() }}"><?php the_title(); ?></a>
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

<?php else : ?>
<p>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
</p>
<?php endif; ?>