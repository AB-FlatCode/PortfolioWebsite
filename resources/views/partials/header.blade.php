<header class="banner">
  <div class="header-wrapp d-flex justify-content-between align-items-center">
    <a class="header-logo" href="{{ home_url('/') }}">ab <span>-</span> dev.</a>
    <div class="navigation">
      <div class="navigation__call-cta">0981909381</div>
      <div class="navigation__menu-toggle">
        <div class="navigation__hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="navigation__cross">
          <span></span>
          <span></span>
        </div>
      </div>
  </div>
  <div class="navigation__full">
    <div class="aside-flair"></div>
    <aside class="linksmenu">
      <div class="menu-main-container">
        <ul id="menu-main" class="menu">
          <li class="menu-item"><a href="#">Početna</a></li>
          <li class="menu-item"><a href="#">O meni</a></li>
          <li class="menu-item"><a href="#">Portfolio</a></li>
          <li class="menu-item"><a href="#">Usluge</a></li>
          <li class="menu-item"><a href="#">Kontakt</a></li>
        </ul>

      <div class="navigation__full-info">
        <span class="navigation__full-heading">
          Trebate informacije?
        </span>
        <span class="navigation__full-email">
          <a href="">info@alenbarac.com</a>
        </span>
      </div>
      </div>
    </aside>

  </div>


  {{-- <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav> --}}
  </div>
</header>
