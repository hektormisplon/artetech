<article @php post_class() @endphp>
  <h2><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
  @include('partials/entry-meta')
  @php the_excerpt() @endphp
</article>
