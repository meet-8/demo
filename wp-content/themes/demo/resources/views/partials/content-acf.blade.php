@if ($acfdata)
    @foreach ($acfdata as $content)
        @switch($content->layout)
            @case ('home_slider')
                @include('partials.sections.home-banner')
            @break

            @case ('introduction')
                @include('partials.sections.intro')
            @break

            @case ('image_content')
                @include('partials.sections.image-content')
            @break

            @case ('icon_section')
                @include('partials.sections.icon-sec')
            @break

            @case ('blog_section')
                @include('partials.sections.blog-sec')
            @break

            @case ('banner')
                @include('partials.sections.banner')
            @break

            @case ('general_container')
                @include('partials.sections.general-con')
            @break

            @case ('team_grid')
                @include('partials.sections.team-grid')
            @break

            @case ('zigzag_sec')
                @include('partials.sections.zigzag')
            @break

            @case ('center_block')
                @include('partials.sections.center-block')
            @break

            @case ('full_image')
                @include('partials.sections.full-image')
            @break

            @case ('blog_archive')
                @include('partials.sections.blog-archive')
            @break

            @case ('category_nav_menu')
                @include('partials.sections.cat-nav')
            @break

            @case ('category_search_page')
                @include('partials.sections.cat-search')
            @break
        @endswitch
    @endforeach
@endif
