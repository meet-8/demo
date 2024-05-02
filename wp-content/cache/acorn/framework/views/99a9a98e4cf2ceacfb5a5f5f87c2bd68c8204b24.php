<?php if($content->image): ?>
    <!-- Breadcrumb Banner Start -->
    <section class="breadcrumbbanner-wrapper">
        <div class="breadcrumbbanner">
            <div class="breadcrumbbanner__inner">
                <div class="breadcrumbbanner__slideitem bannercontent__left">
                    <img src="<?php echo e($content->image); ?>" alt="hero-banner-slide" width="1366" height="768">
                    <div class="breadcrumbbanner__content">
                        <div class="breadcrumbbanner__content--inner">
                            <div class="breadcrumbbanner__contentgrid">
                                <div class="breadcrumbbanner__content--title">
                                    <h1>
                                        <?php echo e($content->title); ?>

                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Banner End -->
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\demo\wp-content\themes\demo\resources\views/partials/sections/banner.blade.php ENDPATH**/ ?>