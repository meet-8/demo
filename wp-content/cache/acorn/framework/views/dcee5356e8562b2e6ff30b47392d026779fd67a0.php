<?php if($acfdata): ?>
    <?php $__currentLoopData = $acfdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php switch($content->layout):
            case ('home_slider'): ?>
                <?php echo $__env->make('partials.sections.home-banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('introduction'): ?>
                <?php echo $__env->make('partials.sections.intro', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('image_content'): ?>
                <?php echo $__env->make('partials.sections.image-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('icon_section'): ?>
                <?php echo $__env->make('partials.sections.icon-sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('blog_section'): ?>
                <?php echo $__env->make('partials.sections.blog-sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('banner'): ?>
                <?php echo $__env->make('partials.sections.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('general_container'): ?>
                <?php echo $__env->make('partials.sections.general-con', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('team_grid'): ?>
                <?php echo $__env->make('partials.sections.team-grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('zigzag_sec'): ?>
                <?php echo $__env->make('partials.sections.zigzag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('center_block'): ?>
                <?php echo $__env->make('partials.sections.center-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('full_image'): ?>
                <?php echo $__env->make('partials.sections.full-image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('blog_archive'): ?>
                <?php echo $__env->make('partials.sections.blog-archive', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('category_nav_menu'): ?>
                <?php echo $__env->make('partials.sections.cat-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>

            <?php case ('category_search_page'): ?>
                <?php echo $__env->make('partials.sections.cat-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php break; ?>
        <?php endswitch; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\demo\wp-content\themes\demo\resources\views/partials/content-acf.blade.php ENDPATH**/ ?>