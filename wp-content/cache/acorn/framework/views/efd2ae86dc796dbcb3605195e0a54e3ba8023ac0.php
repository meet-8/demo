
<!-- Header Start -->
<header>
    <div class="header header__fixed">
        <!-- Note: As a developer, you have the option to enable a transparent header. You can achieve this by adding the "header__fixed" class to the div element above. Alternatively, if you prefer a standard header, you can simply remove the "header__fixed" class. -->
        <div class="container-fluid">
            <div class="header__inner">
                <div class="header__left">
                    <div class="header__logo header_whitelogo">
                        <a class="header__logo--img d-inline-block" href="<?php echo e(home_url('/')); ?>">
                            <img src="<?php echo $white_logo; ?>"> </a>
                    </div>
                    <div class="header__logo header_bluelogo">
                        <a class="header__logo--img d-inline-block" href="<?php echo e(home_url('/')); ?>">
                            <img src="<?php echo $blue_logo; ?>">

                        </a>
                    </div>
                </div>
                <div class="header__right">
                    <div class="header__menu">
                        <div>
                            
                            <?php echo wp_nav_menu([
                                'theme_location' => 'primary_navigation',
                                'menu_class' => 'menu_wrap',
                                'container' => false,
                            ]); ?>

                        </div>
                    </div>
                </div>
                <div class="toggle-menu">
                    <i class="far fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<?php /**PATH C:\xampp\htdocs\demo\wp-content\themes\demo\resources\views/sections/header.blade.php ENDPATH**/ ?>