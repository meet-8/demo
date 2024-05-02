  <!-- Imagecontent Start -->
  <section class="imagecontent-wrapper">
      <div class="imagecontent fade-ani">
          <div class="imagecontent__inner">
              <div class="imagecontent__image desktop_image fade-ani-one">
                  <div class="imagecontent__imageinner">
                      <img src="<?php echo e($content->image); ?>" alt="imagecontent-desktop" width="1366" height="650">
                  </div>
              </div>
              <div class="imagecontent__image mobile_image fade-ani-one">
                  <div class="imagecontent__imageinner">
                      <img src="<?php echo e($content->image); ?>" alt="imagecontent-desktop" width="440" height="210">
                  </div>
              </div>
              <div class="imagecontent__contentwrapper">
                  <div class="container-custom">
                      <div class="imagecontent__contentbox fade-ani-two">
                          <div class="imagecontent__title regular__title fade-ani-three">
                              <h2>
                                  <?php echo e($content->title); ?> </h2>
                          </div>
                          <div class="imagecontent__content content content_black fade-ani-four">
                              <p>
                                  <?php echo e($content->content); ?>

                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Imagecontent End -->
<?php /**PATH C:\xampp\htdocs\demo\wp-content\themes\demo\resources\views/partials/sections/image-content.blade.php ENDPATH**/ ?>