<article class="container prose lg:prose-xl prose-img:rounded-xl prose-a:text-blue-600 hover:prose-a:text-blue-500">
    @php(the_content())

    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}    
</article>