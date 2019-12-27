<header class="header">
  <a class="brand" href="{{ home_url('/') }}">
    {{ get_bloginfo('name', 'display') }}
  </a>
  <nav class="header-nav">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
</header>
