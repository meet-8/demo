<?php

// app/view/composers/AcfComposer.php

namespace App\View\Composers;

use Illuminate\Support\Arr;
use Roots\Acorn\View\Composer;

class AcfComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // '*',
        'partials.content-acf',
    ];

    /**
     * Data to be passed to the view.
     *
     * @return array
     */
    public function with()
    {
        return [
            'acfdata' => $this->getSliderImages(),
            // Add more fields as needed
        ];
    }

    /**
     * Get slider images from ACF repeater field.
     *
     * @return array
     */

    public function getSliderImages()
    {
        $data = [];
        $flexible_content = get_field('acf_layout');
        if ($flexible_content) {
            foreach ($flexible_content as $content) {
                if ($content['acf_fc_layout'] == 'home_slider') {
                    $this_content = (object) [
                        'layout'            => $content['acf_fc_layout'],
                        'slider_images'    => $content['slider'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'introduction') {
                    $this_content = (object) [
                        'layout'              => $content['acf_fc_layout'],
                        'paragraph_1'             => $content['paragraph_1'],
                        'paragraph_2'    => $content['paragraph_2'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'image_content') {
                    $this_content = (object) [
                        'layout'              => $content['acf_fc_layout'],
                        'image'             => $content['image'],
                        'title'    => $content['title'],
                        'content'    => $content['content'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'icon_section') {
                    $this_content = (object) [
                        'layout'              => $content['acf_fc_layout'],
                        'image'             => $content['image'],
                        'content'    => $content['content'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'blog_section') {
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => '3',
                        'post_status' => 'publish',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    );
                    $all_post = array();
                    $post = new \WP_Query($args);
                    if ($post->have_posts()) {
                        while ($post->have_posts()) : $post->the_post();
                            $featured_image_id = get_post_thumbnail_id(get_the_ID());
                            $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                            $all_post[] = array(
                                'id' => get_the_ID(),
                                'title' => get_the_title(),
                                'content' => get_the_content(),
                                'excerpt' => get_the_excerpt(),
                                'featured_image' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                                'featured_image_alt' => $featured_image_alt,
                                'url' => get_the_permalink(),
                                'date' => get_the_date('M d, Y')
                            );
                        endwhile;
                        wp_reset_postdata();
                    }
                    $this_content = (object) [
                        'layout'              => $content['acf_fc_layout'],
                        'post'            => $all_post,
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'banner') {
                    $this_content = (object) [
                        'layout'              => $content['acf_fc_layout'],
                        'image'             => $content['image'],
                        'title'    => get_the_title(),
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'general_container') {
                    $this_content = (object) [
                        'layout'   => $content['acf_fc_layout'],
                        'description'  => $content['description'],
                        'title'    =>  $content['title'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'team_grid') {
                    $this_content = (object) [
                        'layout'   => $content['acf_fc_layout'],
                        'title'    => $content['title'],
                        'background_image'    => $content['background_image'],
                        'team'    => $content['team'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'zigzag_sec') {
                    $this_content = (object) [
                        'layout'   => $content['acf_fc_layout'],
                        'title'    => $content['title'],
                        'image'    => $content['image'],
                        'content'    => $content['content'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'center_block') {
                    $this_content = (object) [
                        'layout'   => $content['acf_fc_layout'],
                        'title'    => $content['title'],
                        'content'    => $content['content'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'full_image') {
                    $this_content = (object) [
                        'layout'   => $content['acf_fc_layout'],
                        'image'    => get_the_post_thumbnail_url(),
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'blog_archive') {
                    $cats = $content['select_category'];
                    $arr = [];
                    foreach ($cats as $cat) {
                        array_push($arr, $cat->name);
                    }
                    $main_cat = implode(',', array_map('trim', $arr));
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => get_option('posts_per_page'),
                        'post_status' => 'publish',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'category_name' => $main_cat,
                    );
                    $all_tags = get_the_tags();
                    $all_post = array();

                    $post = new \WP_Query($args);
                    if ($post->have_posts()) {
                        while ($post->have_posts()) : $post->the_post();
                            $featured_image_id = get_post_thumbnail_id(get_the_ID());
                            $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                            $all_post[] = array(
                                'id' => get_the_ID(),
                                'title' => get_the_title(),
                                'content' => get_the_content(),
                                'excerpt' => get_the_excerpt(),
                                'featured_image' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                                'featured_image_alt' => $featured_image_alt,
                                'url' => get_the_permalink(),
                                'date' => get_the_date('M d, Y'),
                                'tags' => get_the_tags(get_the_ID()),
                            );

                        endwhile;
                        wp_reset_postdata();
                    }
                    $this_content = (object) [
                        'layout'              => $content['acf_fc_layout'],
                        'post'            => $all_post,
                        'all_tags' => get_terms(array(
                            'taxonomy' => 'post_tag',
                            'hide_empty' => false,
                        )),
                        'cat' => $main_cat,
                        'max_num_pages' => $post->max_num_pages,

                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'category_nav_menu') {
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => get_option('posts_per_page'),
                        'post_status' => 'publish',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    );
                    $all_tags = get_the_tags();
                    $all_post = array();

                    $post = new \WP_Query($args);
                    if ($post->have_posts()) {
                        while ($post->have_posts()) : $post->the_post();
                            $featured_image_id = get_post_thumbnail_id(get_the_ID());
                            $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                            $all_post[] = array(
                                'id' => get_the_ID(),
                                'title' => get_the_title(),
                                'content' => get_the_content(),
                                'excerpt' => get_the_excerpt(),
                                'featured_image' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                                'featured_image_alt' => $featured_image_alt,
                                'url' => get_the_permalink(),
                                'date' => get_the_date('M d, Y'),
                                'tags' => get_the_tags(get_the_ID()),
                            );

                        endwhile;
                        wp_reset_postdata();
                    }
                    $this_content = (object) [
                        'layout'              => $content['acf_fc_layout'],
                        'post'            => $all_post,
                        'all_tags' => get_terms(array(
                            'taxonomy' => 'post_tag',
                            'hide_empty' => false,
                        )),
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'category_search_page') {
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => get_option('posts_per_page'),
                        'post_status' => 'publish',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    );
                    $all_tags = get_the_tags();
                    $all_post = array();

                    $post = new \WP_Query($args);
                    if ($post->have_posts()) {
                        while ($post->have_posts()) : $post->the_post();
                            $featured_image_id = get_post_thumbnail_id(get_the_ID());
                            $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                            $all_post[] = array(
                                'id' => get_the_ID(),
                                'title' => get_the_title(),
                                'content' => get_the_content(),
                                'excerpt' => get_the_excerpt(),
                                'featured_image' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                                'featured_image_alt' => $featured_image_alt,
                                'url' => get_the_permalink(),
                                'date' => get_the_date('M d, Y'),
                                'tags' => get_the_tags(get_the_ID()),
                            );

                        endwhile;
                        wp_reset_postdata();
                    }
                    $this_content = (object) [
                        'layout'              => $content['acf_fc_layout'],
                        'post'            => $all_post,
                        'all_tags' => get_terms(array(
                            'taxonomy' => 'post_tag',
                            'hide_empty' => false,
                        )),
                    ];
                    array_push($data, $this_content);
                }
            }
        }
        return $data;
    }
}
