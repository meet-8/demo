{{-- <header class="banner">
    <a class="brand" href="{{ home_url('/') }}">
        {!! $siteName !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
    @endif
</header> --}}
<!-- Header Start -->
<header>
    <div class="header header__fixed">
        <!-- Note: As a developer, you have the option to enable a transparent header. You can achieve this by adding the "header__fixed" class to the div element above. Alternatively, if you prefer a standard header, you can simply remove the "header__fixed" class. -->
        <div class="container-fluid">
            <div class="header__inner">
                <div class="header__left">
                    <div class="header__logo header_whitelogo">
                        <a class="header__logo--img d-inline-block" href="{{ home_url('/') }}">
                            <img src="{!! $white_logo !!}"> </a>
                    </div>
                    <div class="header__logo header_bluelogo">
                        <a class="header__logo--img d-inline-block" href="{{ home_url('/') }}">
                            <img src="{!! $blue_logo !!}">

                        </a>
                    </div>
                </div>
                <div class="header__right">
                    <div class="header__menu">
                        <div>
                            {{--  $menu_items = get_menu_items(); \

                            @if ($menu_items)
                                <ul>
                                    @foreach ($menu_items as $menu_item)
                                        <li><a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a></li>
                                        <!-- Adjust the property names based on your actual menu structure -->
                                    @endforeach
                                </ul>
                            @endif --}}
                            {!! wp_nav_menu([
                                'theme_location' => 'primary_navigation',
                                'menu_class' => 'menu_wrap',
                                'container' => false,
                            ]) !!}
                        </div>
                    </div>
                </div>
                <div class="toggle-menu">
                    <i class="far fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
