  <!-- Sidebar start -->
  <div class="sidebar">
      <div class="sidebar__inner">
          <div class="sidebar__logo">
              <a href="<?php echo e(site_url('/')); ?>"><?php echo get_custom_logo(); ?> </a>
          </div>
          <div class="sidebar__menu">
              <div class="sidebar__menu--inner">
                  
                  <?php echo wp_nav_menu([
                      'theme_location' => 'primary_navigation',
                      'menu_class' => 'menu_wrap',
                      'container' => false,
                  ]); ?>

              </div>
          </div>
      </div>
  </div>
  <div class="close-sidebar"></div>
  <!-- Sidebar end -->
<?php /**PATH C:\xampp\htdocs\demo\wp-content\themes\demo\resources\views/sections/sidebar.blade.php ENDPATH**/ ?>