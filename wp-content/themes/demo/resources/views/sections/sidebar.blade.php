  <!-- Sidebar start -->
  <div class="sidebar">
      <div class="sidebar__inner">
          <div class="sidebar__logo">
              <a href="{{ site_url('/') }}">{!! get_custom_logo() !!} </a>
          </div>
          <div class="sidebar__menu">
              <div class="sidebar__menu--inner">
                  {{-- <ul>
                      <li><a href="about-us.html">About us</a></li>
                      <li><a href="industries-served.html">INDUSTRIES SERVED</a></li>
                      <li><a href="services.html">SERVICES</a></li>
                      <li><a href="#">Safety</a></li>
                      <li><a href="Latest_News.html">Latest News</a></li>
                      <li><a href="#">Connect </a></li>
                  </ul> --}}
                  {!! wp_nav_menu([
                      'theme_location' => 'primary_navigation',
                      'menu_class' => 'menu_wrap',
                      'container' => false,
                  ]) !!}
              </div>
          </div>
      </div>
  </div>
  <div class="close-sidebar"></div>
  <!-- Sidebar end -->
