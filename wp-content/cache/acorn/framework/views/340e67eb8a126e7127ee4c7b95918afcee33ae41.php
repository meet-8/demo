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
                      $slider_images = $content->slider_images;
                  ?>


                  <?php $__currentLoopData = $slider_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="swiper-slide">

                          <div
                              class="bannerslider__slideitem
                              <?php if(isPrime($i)): ?> bannercontent__right
                               <?php else: ?>
                               bannercontent__left <?php endif; ?>
                               ">

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
<?php /**PATH C:\xampp\htdocs\demo\wp-content\themes\demo\resources\views/partials/sections/home-banner.blade.php ENDPATH**/ ?>