<section class="blog-wrapper section_padding">
    <div class="container-custom">
        <div class="blog-wrapper">
            <div class="d-flex flex-lg-row flex-column-reverse row gap-3 gap-lg-0">
                <div class="col-lg-8 col-12 p-lg-0 blog-main">
                    <span id="blog-posts" data-current-page="1">
                        @if (!empty($content->post))
                            @foreach ($content->post as $item)
                                <div class="blog-card">
                                    <div class="blog-img">
                                        <div class="blog-img-inner ">
                                            <a href="{{ $item['url'] }}"> <img src="{{ $item['featured_image'] }}"
                                                    alt="{{ $item['featured_image_alt'] }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-con">
                                        <div class="blog-date">
                                            <h6>{{ $item['date'] }}</h6>
                                        </div>
                                        <div
                                            class="blog-title d-flex flex-wrap gap-2 justify-content-between normal__title">
                                            <h2>{{ $item['title'] }}</h2>

                                            @php
                                                $cats = get_the_category($item['id']);
                                            @endphp
                                            @foreach ($cats as $cat)
                                                <a
                                                    href="{{ esc_url(get_category_link($cat->term_id)) }}">{!! $cat->name !!}</a>
                                                {{-- {{ $cat->name }} --}}
                                            @endforeach

                                        </div>
                                        <div class="blog-p">
                                            {{ $item['excerpt'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </span>
                    <div class="load-more">
                        <div class="load-more-btn d-flex justify-content-center align-items-center" id="load-more-btn">
                            <input type="hidden" id="site_url" value="{{ site_url() . '/wp-admin/admin-ajax.php' }}">
                            <a id="load" href="#" data-cat="{{ $content->cat }}"
                                data-total-pages="{{ $content->max_num_pages }}">Load More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4
                                col-12 blog-serch">
                    <div class="src-filter">
                        <div class="serch-box pb-2">
                            <form role="search" method="get" class="search-form"
                                action="{{ esc_url(home_url('/')) }}">
                                <input id="serch-bar" type="text" placeholder="Search…" name="s">
                            </form>
                        </div>
                        <div class="filter">
                            <div class="filter-tags">
                                <h6>Popular Tags</h6>
                                <div class="filter-btns d-flex flex-wrap gap-1">
                                    @php
                                        $tags = $content->all_tags;
                                    @endphp
                                    @foreach ($tags as $tag)
                                        <a href="{{ get_term_link($tag) }}">{{ $tag->name }}</a>
                                    @endforeach

                                </div>
                            </div>
                            <div class="filter-archives">
                                <h6>Archives</h6>
                                <ul class="filter-li d-flex flex-column">
                                    {{-- <li><a href="#">November 2023</a></li> --}}
                                    @php
                                        $args = [
                                            'post_type' => 'post',
                                            'posts_per_page' => -1, // Get all posts
                                            'orderby' => 'date',
                                            'order' => 'DESC',
                                        ];

                                        $allPosts = new WP_Query($args);

                                        $uniqueMonths = [];

                                        if ($allPosts->have_posts()) {
                                            while ($allPosts->have_posts()) {
                                                $allPosts->the_post();

                                                $monthYear = get_the_date('F Y');
                                                $archiveLink = get_month_link(get_the_date('Y'), get_the_date('m'));

                                                $uniqueMonths[$monthYear] = $archiveLink;
                                            }
                                            wp_reset_postdata();
                                        }
                                    @endphp

                                    @foreach ($uniqueMonths as $monthYear => $archiveLink)
                                        <li><a href="{{ esc_url($archiveLink) }}">{{ esc_html($monthYear) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
