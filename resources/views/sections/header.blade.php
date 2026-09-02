<header class="header-wrap">
  <div class="header-top">
    <div class="container">
      <x-socials/>
    </div>
  </div>

  <div class="container header">
    <div class="header-brand">
      <a href="{!! home_url() !!}">
        <x-image variant="logo" :lg="$options['logo']"/>
      </a>
    </div>

    <div class="header-nav">

      <nav class="header-nav__nav" animation-stagger-single="0.7">
        {!! wp_nav_menu([
          'theme_location' => 'main_navigation',
          'walker' => new MenuItemAnimation_Walker()
        ]) !!}
      </nav>

      <div class="header-nav__mobile">

        <div id="burger">
          <span></span>
        </div>

        <div class="mobile-menu">
          @menu('mobile_navigation')
          <x-socials></x-socials>
        </div>

      </div>

    </div>

  </div>
</header>
