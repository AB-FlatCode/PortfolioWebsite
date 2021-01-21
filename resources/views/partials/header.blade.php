<header class="banner">
  <div class="container-xl">
  <div class="header-wrapp d-flex justify-content-between">
    <a class="brand" href="{{ home_url('/') }}">ab - dev.</a>
    <div class="navigation">
      <div class="header__navigation-button">
        icon
      </div>
  </div>
  <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
    

    
  </div>
</header>
