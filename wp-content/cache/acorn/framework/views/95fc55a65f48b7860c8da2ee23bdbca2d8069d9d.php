  <?php
      function isPrime($number)
      {
          if ($number <= 1) {
              return false;
          }

          for ($i = 2; $i <= sqrt($number); $i++) {
              if ($number % $i == 0) {
                  return false;
              }
          }

          return true;
      }
  ?>
  <!-- Hero Banner Slider Start -->
  <section class="bannerslider-wrapper">
      <div class="bannerslider">
          <div class="bannerslider__inner bannerslider__loop">
              <div class="swiper-wrapper">
                  <?php
                      $i = 1;
                  ?>

                  <?php $__currentLoopData = $slider_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="swiper-slide">
                          <?php if(isPrime($i)): ?>
                              <?php echo e($i); ?> is a prime number.

                              <div class="bannerslider__slideitem bannercontent__right">
                              <?php else: ?>
                                  <div class="bannerslider__slideitem bannercontent__left">
                          <?php endif; ?>
                          <img src="<?php echo e($slider_image['image']); ?>" alt="hero-banner-slide" width="1366" height="768">
                          <div class="bannerslider__content">
                              <div class="bannerslider__content--inner">
                                  <div class="bannerslider__contentgrid">
                                      <div class="bannerslider__content--title">
                                          <h1>
                                              <?php echo e($slider_image['title']); ?>

                                          </h1>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
              </div>
              <?php echo e($i++); ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
      </div>
      </div>
  </section>
  <!-- Hero Banner Slider End -->
<?php /**PATH C:\xampp\htdocs\demo\wp-content\themes\demo\resources\views/partials/banner.blade.php ENDPATH**/ ?>