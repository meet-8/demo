<!-- Zigzag Start -->
<section class="zigzag-wrapper">
    <div class="zigzag fade-ani">
        <div class="container-custom-xl">
            <div class="zigzag__inner">
                <div class="zigzag__grid d-flex align-items-lg-center flex-lg-row flex-column-reverse">
                    <div class="zigzag__content fade-ani-one">
                        <div class="zigzag__title regular__title">
                            <h2>
                                <?php echo e($content->title); ?>

                            </h2>
                        </div>
                        <div class="zigzag__contentdesc content content_black">
                            <p>
                                <?php echo $content->content; ?>

                            </p>
                        </div>
                    </div>
                    <div class="zigzag__image fade-ani-one">
                        <div class="zigzag__imageinner">
                            <img src="<?php echo e($content->image); ?>" alt="zigzag-image" width="627" height="708">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Zigzag End -->
<?php /**PATH C:\xampp\htdocs\demo\wp-content\themes\demo\resources\views/partials/sections/zigzag.blade.php ENDPATH**/ ?>