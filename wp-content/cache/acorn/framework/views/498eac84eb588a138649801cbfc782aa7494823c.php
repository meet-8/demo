 <!-- Latest Grid Start -->
 <section class="latestgrid-wrapper section_padding fade-ani">
     <div class="latestgrid">
         <div class="container-custom">
             <div class="latestgrid__inner">
                 <div
                     class="latestgrid__toppanel d-flex align-items-center justify-content-between flex-wrap fade-ani-one">
                     <div class="latestgrid__title regular__title">
                         <h2>
                             Latest Updates
                         </h2>
                     </div>
                     <div class="latestgrid__btn">
                         <a href="#" class="btn__link">View All</a>
                     </div>
                 </div>
                 <div class="latestgrid__grid">
                     <div class="row fade-ani-two">
                         <?php if(!empty($content->post)): ?>
                             <?php $__currentLoopData = $content->post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                     <div class="latestgrid__item">
                                         <div class="latestgrid__imagemain">
                                             <a href="<?php echo e($item['url']); ?>" class="d-block">
                                                 <div class="latestgrid__image">
                                                     <img src="<?php echo e($item['featured_image']); ?>"
                                                         alt="<?php echo e($item['featured_image_alt']); ?>" width="350"
                                                         height="230">
                                                 </div>
                                             </a>
                                         </div>
                                         <div class="latestgrid__details">
                                             <div class="latestgrid__date">
                                                 <span>
                                                     <?php echo e($item['date']); ?>

                                                 </span>
                                             </div>
                                             <div class="latestgrid__title">
                                                 <a href="<?php echo e($item['url']); ?>">
                                                     <?php echo e($item['title']); ?>

                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <?php endif; ?>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Latest Grid End -->
<?php /**PATH C:\xampp\htdocs\demo\wp-content\themes\demo\resources\views/partials/sections/blog-sec.blade.php ENDPATH**/ ?>