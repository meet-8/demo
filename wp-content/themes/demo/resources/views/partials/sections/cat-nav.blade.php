<nav class="navbar navbar-expand-sm bg-light justify-content-center">
    <div class="">
        <ul class="navbar-nav" id="cat-nav">
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" data-cat="">All Category</a>
            </li>
            @php
                $args = [
                    'title_li' => '', // Exclude the default "Categories" title
                    'style' => '', // Exclude the default list style
                    'echo' => 0, // Return the output instead of echoing it
                ];

                $categories = wp_list_categories($args);

                // If there are categories, loop through them and display in the specified format
                if ($categories) {
                    foreach (explode("\n", $categories) as $category) {
                        if (!empty($category)) {
                            // Add "nav-link" class to the anchor tag
                            $category = str_replace('<a', '<a class="nav-link" data-cat="' . esc_attr(strip_tags($category)) . '" href="javascript:void(0)"', $category);

                            echo '<li class="nav-item">' . $category . '</li>';
                        }
                    }
                }
            @endphp
        </ul>
    </div>
</nav>
<input type="hidden" id="site_url" value="{{ site_url() . '/wp-admin/admin-ajax.php' }}">
<!-- Latest Grid Start -->
<section class="latestgrid-wrapper section_padding fade-ani">
    <div class="latestgrid">
        <div class="container-custom">
            <div class="latestgrid__inner">
                <div class="latestgrid__grid">
                    <div class="row fade-ani-two">
                        @if (!empty($content->post))
                            @foreach ($content->post as $item)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="latestgrid__item">
                                        <div class="latestgrid__imagemain">
                                            <a href="{{ $item['url'] }}" class="d-block">
                                                <div class="latestgrid__image">
                                                    <img src="{{ $item['featured_image'] }}"
                                                        alt="{{ $item['featured_image_alt'] }}" width="350"
                                                        height="230">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="latestgrid__details">
                                            <div class="latestgrid__date">
                                                <span>
                                                    {{ $item['date'] }}
                                                </span>
                                            </div>
                                            <div class="latestgrid__title">
                                                <a href="{{ $item['url'] }}">
                                                    {{ $item['title'] }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="pagination-wrapper">
                            <ul class="pg-pagination">
                                @php
                                    $t_post = wp_count_posts()->publish;
                                    $ppp = get_option('posts_per_page');
                                    $total = $t_post / $ppp;
                                @endphp

                                @for ($i = 1; $i <= $total; $i++)
                                    <li class="">
                                        <a href="javascript:void(0)">{{ $i }}</a>
                                    </li>
                                @endfor
                            </ul>

                            <div class="pagination-text">
                                <span>Page <span class="cur_pg">1</span> out of {{ $total }}</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
