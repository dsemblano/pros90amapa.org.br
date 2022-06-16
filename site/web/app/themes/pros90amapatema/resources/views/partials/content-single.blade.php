<article @php(post_class('container prose lg:prose-xl prose-img:rounded-xl prose-a:text-blue-600 hover:prose-a:text-blue-500'))>
  <header>
    <h1 class="entry-title">
      {!! $title !!}
    </h1>

    @include('partials.entry-meta')
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

  @php(comments_template())
</article>
