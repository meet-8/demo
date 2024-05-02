<!-- footer start -->
<footer>
    <div class="footer fade-ani">
        <div class="footer__inner">
            <div class="container-custom">
                <div class="footer__top">
                    <div class="footer__grid">
                        <div class="row fade-ani-one">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="footer__element">
                                    <div class="footer__logo">
                                        <a href="<?php echo e(home_url('/')); ?>" class="d-block">

                                            <img src="<?php echo $footer_logo; ?>" alt="logo-blue" width="252"
                                                height="56">
                                        </a>
                                    </div>
                                    <div class="footer__tagline d-lg-none d-block">
                                        <h4>
                                            <?php echo $left_text; ?>

                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="footer__element">
                                    <div
                                        class="footer__social d-flex flex-column align-items-center justify-content-center">
                                        <div class="footer__socialtitle">
                                            <h6>
                                                Visit us on
                                            </h6>
                                        </div>
                                        <div class="footer__socialimage">
                                            <a href="<?php echo $visit_us_url; ?>" target="_blank">
                                                
                                                <img src="<?php echo $visit_us_image; ?>" alt="social-logo">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 d-lg-block d-none">
                                <div class="footer__element">
                                    <div class="footer__menu d-flex justify-content-end">
                                        <?php echo wp_nav_menu([
                                            'theme_location' => 'primary_navigation',
                                            'menu_class' => 'menu_wrap',
                                            'container' => false,
                                        ]); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div
                        class="footer__bottomgrid d-flex justify-content-lg-between justify-content-center align-items-center flex-wrap fade-ani-two">
                        <div class="footer__tagline d-lg-block d-none">
                            <h4>
                                <?php echo $left_text; ?>

                            </h4>
                        </div>
                        <div class="footer__copyright">
                            <p>
                                <?php echo $copyright_text; ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<?php /**PATH C:\xampp\htdocs\demo\wp-content\themes\demo\resources\views/sections/footer.blade.php ENDPATH**/ ?>