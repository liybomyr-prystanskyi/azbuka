<section class="footer-menu">
    <div class="container">
        <div class="footer-menu__main">
            <div class="row justify-content-between align-items-center flex-wrap">
                <div class="col-12 col-lg-3">
                    <div class="footer-menu__main__logotype">
                        <img src="<?php the_field('theme_logo', 'option'); ?>" alt="foot-logo">
                    </div>
                </div>

                <div class="col-12 col-lg-9">
                    <div class="footer-menu__main__info">
                        <?php
                        wp_nav_menu([
                            'menu' => 'Footer Nav',
                            'theme_location' => 'footer_navigation',
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>