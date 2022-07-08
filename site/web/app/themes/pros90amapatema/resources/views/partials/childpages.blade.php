<div class="noticias w-full">
    <?php echo do_shortcode( '[flexy_breadcrumb]'); ?> 
    <div class="page-header text-center container my-8 lg:mt-12 lg:mb-8 prose lg:prose-2xl  prose-a:text-blue-600 hover:prose-a:text-blue-500">
        <h1 class="text-pros90lightblue animated animatedFadeInUp fadeInUp">Pré-Canditados 2022</h1>
    </div>
    <div class="flex flex-wrap">
    <?php
        $my_wp_query = new WP_Query();
        $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1));
        

        // Get the page as an Object
        $portfolio =  get_page_by_path('pre-candidatos-2022');
        
        // Filter through all pages and find Portfolio's children
        $portfolio_children = get_page_children( $portfolio->ID, $all_wp_pages );
    ?>

    @foreach ($portfolio_children as $children)
    <article id="<?= $children->post_name ?>" @php(post_class('article-posts w-full xl:w-1/3 md:w-1/2 mt-4 pr-0 xl:pr-8 xl:pb-8'))>
        <div class=" box bg-white">
            <figure class="thumbnail">
                <a href="<?= $children->guid ?>">
                    <?= get_the_post_thumbnail( $children->ID) ?>
                </a>
            </figure>
            <header class="p-6">
                <h2 class="text-2xl text-gray-900 font-medium title-font mb-2">
                    <a href="<?= $children->guid ?>">
                        <?= $children->post_title ?>
                    </a>
                </h2>
                @include('partials.entry-meta')
            </header>
            <?php
                //echo '<p class="leading-relaxed text-base text-gray-600 mt-2">' . get_the_excerpt() . '</p>'; 
            ?>
        </div>
    </article>
    @endforeach
    <!-- end of the loop -->
    <?php wp_reset_postdata(); ?>
@endsection
</div>