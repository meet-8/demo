<section class="blog-wrapper section_padding">
    <div class="container-custom">
        <div class="blog-wrapper">
            <div class="d-flex flex-lg-row flex-column-reverse row gap-3 gap-lg-0">
                <div class="col-lg-8 col-12 p-lg-0 blog-main">
                    <span id="blog-posts" data-current-page="1">
                        <?php if(!empty($content->post)): ?>
                            <?php $__currentLoopData = $content->post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="blog-card">
                                    <div class="blog-img">
                                        <div class="blog-img-inner ">
                                            <a href="<?php echo e($item['url']); ?>"> <img src="<?php echo e($item['featured_image']); ?>"
                                                    alt="<?php echo e($item['featured_image_alt']); ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-con">
                                        <div class="blog-date">
                                            <h6><?php echo e($item['date']); ?></h6>
                                        </div>
                                        <div
                                            class="blog-title d-flex flex-wrap gap-2 justify-content-between normal__title">
                                            <h2><?php echo e($item['title']); ?></h2>

                                            <?php
                                                $cats = get_the_category($item['id']);
                                            ?>
                                            <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a
                                                    href="<?php echo e(esc_url(get_category_link($cat->term_id))); ?>"><?php echo $cat->name; ?></a>
                                                
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                        <div class="blog-p">
                                            <?php echo e($item['excerpt']); ?>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </span>
                    <div class="load-more">
                        <div class="load-more-btn d-flex justify-content-center align-items-center" id="load-more-btn">
                            <input type="hidden" id="site_url" value="<?php echo e(site_url() . '/wp-admin/admin-ajax.php'); ?>">
                            <a id="load" href="#" data-cat="<?php echo e($content->cat); ?>"
                                data-total-pages="<?php echo e($content->max_num_pages); ?>">Load More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4
                                col-12 blog-serch">
                    <div class="src-filter">
                        <div class="serch-box pb-2">
                            <form role="search" method="get" class="search-form"
                                action="<?php echo e(esc_url(home_url('/'))); ?>">
                                <input id="serch-bar" type="text" placeholder="Search…" name="s">
                            </form>
                        </div>
                        <div class="filter">
                            <div class="filter-tags">
                                <h6>Popular Tags</h6>
                                <div class="filter-btns d-flex flex-wrap gap-1">
                                    <?php
                                        $tags = $content->all_tags;
                                    ?>
                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(get_term_link($tag)); ?>"><?php echo e($tag->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                            <div class="filter-archives">
                                <h6>Archives</h6>
                                <ul class="filter-li d-flex flex-column">
                                    
                                    <?php
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
                                    ?>

                                    <?php $__currentLoopData = $uniqueMonths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monthYear => $archiveLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(esc_url($archiveLink)); ?>"><?php echo e(esc_html($monthYear)); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\xampp\htdocs\demo\wp-content\themes\demo\resources\views/partials/sections/blog-archive.blade.php ENDPATH**/ ?>