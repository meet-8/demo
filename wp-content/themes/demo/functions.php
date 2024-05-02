<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (!function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (!locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

//load more functionality
function load_more_posts()
{
    $page = $_POST['page'];
    $main_cat = $_POST['cat'];

    // Your query to fetch posts for the given page
    // Modify this according to your custom query
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => get_option('posts_per_page'),
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'category_name' => $main_cat,
        'paged' => $page,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post()  ?>
            <div class="blog-card">
                <div class="blog-img">
                    <div class="blog-img-inner ">
                        <a href="<?php the_permalink() ?>"> <img src="<?php echo get_the_post_thumbnail_url() ?>">
                        </a>
                    </div>
                </div>
                <div class="blog-con">
                    <div class="blog-date">
                        <h6><?php echo get_the_date('M d, Y') ?></h6>
                    </div>
                    <div class="blog-title d-flex flex-wrap gap-2 justify-content-between normal__title">
                        <h2><?php the_title() ?></h2>

                        <?php
                        $cats = get_the_category(get_the_ID());
                        foreach ($cats as $cat) {
                        ?>
                            <a href="<?php echo  esc_url(get_category_link($cat->term_id)) ?>"><?php echo  $cat->name ?></a>
                            <!-- // {{-- {{ $cat->name -->
                        <?php } ?>

                    </div>
                    <div class="blog-p">
                        <?php echo get_the_excerpt() ?>
                    </div>
                </div>
            </div>

        <?php endwhile;
        wp_reset_postdata();
    else :
        // No more posts
        echo '';
    endif;

    // // Output the total number of pages
    // echo '<div id="total-pages" data-total-pages="' . $query->max_num_pages . '"></div>';

    die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

//Cat Nav posts  functionality
function cat_nav_posts()
{
    if ($_POST['search']) {
        $search = $_POST['search'];
    }

    if ($_POST['cat']) {
        $main_cat = $_POST['cat'];
    }

    // Your query to fetch posts for the given page
    // Modify this according to your custom query
    $args = array(
        's' => $search,
        'post_type' => 'post',
        'posts_per_page' => get_option('posts_per_page'),
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'category_name' => $main_cat,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post()  ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="latestgrid__item">
                    <div class="latestgrid__imagemain">
                        <a href="<?php echo get_permalink() ?>" class="d-block">
                            <div class="latestgrid__image">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" width="350" height="230">
                            </div>
                        </a>
                    </div>
                    <div class="latestgrid__details">
                        <div class="latestgrid__date">
                            <span>
                                <?php echo get_the_date('M d, Y') ?>
                            </span>
                        </div>
                        <div class="latestgrid__title">
                            <a href="<?php echo get_the_permalink() ?>">
                                <?php echo get_the_title() ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        endwhile;
        if ($main_cat) { ?>
            <input type="hidden" id="cat" value="<?php echo $main_cat ?>">
        <?php }
        ?>

        <?php
        if ($search) { ?>
            <input type="hidden" id="search" value="<?php echo $search ?>">
        <?php }
        ?>
        <div class="pagination-wrapper">
            <ul class="pg-pagination">
                <?php
                $t_post = ($query->found_posts);
                $ppp = get_option('posts_per_page');
                $total = $t_post / $ppp;
                if ($total > 2) {
                    for ($i = 1; $i <= $total; $i++) {
                        echo '<li class=""><a href="javascript:void(0)">' . $i . '</a></li>';
                    }
                }
                ?>
            </ul>
            <div class="pagination-text">
                <span>Page <span class="cur_pg">1</span> out of <?php echo $total ?></span>
            </div>
        </div>
        <?php
        wp_reset_postdata();
    else :
        // No more posts
        echo 'Post Not Found';
    endif;

    die();
}

add_action('wp_ajax_cat_nav_posts', 'cat_nav_posts');
add_action('wp_ajax_nopriv_cat_nav_posts', 'cat_nav_posts');

// pagination ajax 
function numeric_pagination()
{
    $page = $_POST['page'];
    if ($_POST['cat']) {
        $cat = $_POST['cat'];
    }
    if ($_POST['search']) {
        $search = $_POST['search'];
    }
    // Your loop logic here, similar to the loop in your template file
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => get_option('posts_per_page'),
        'paged' => $page,
        'category_name' => $cat,
        's' => $search,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
        ?>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="latestgrid__item">
                    <div class="latestgrid__imagemain">
                        <a href="<?php echo get_permalink() ?>" class="d-block">
                            <div class="latestgrid__image">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" width="350" height="230">
                            </div>
                        </a>
                    </div>
                    <div class="latestgrid__details">
                        <div class="latestgrid__date">
                            <span>
                                <?php echo get_the_date('M d, Y') ?>
                            </span>
                        </div>
                        <div class="latestgrid__title">
                            <a href="<?php echo get_the_permalink() ?>">
                                <?php echo get_the_title() ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } ?>
        <div class="pagination-wrapper">
            <ul class="pg-pagination">
                <?php
                $t_post = ($query->found_posts);
                $ppp = get_option('posts_per_page');
                $total = $t_post / $ppp;
                if ($total > 2) {
                    for ($i = 1; $i <= $total; $i++) {
                        echo '<li class=""><a href="javascript:void(0)">' . $i . '</a></li>';
                    }
                }
                ?>
            </ul>
            <div class="pagination-text">
                <span>Page <span class="cur_pg">1</span> out of <?php echo $total ?></span>
            </div>
        </div>
<?php
        wp_reset_postdata();
    }

    die();
}
add_action('wp_ajax_numeric_pagination', 'numeric_pagination');
add_action('wp_ajax_nopriv_numeric_pagination', 'numeric_pagination');
