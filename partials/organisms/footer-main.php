<section class="footer-main"
         style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build'; ?>/assets/img/footer-bg.png');">
    <div class="container">
        <div class="footer-main__content">
            <div class="row">
                <?php $i = 1;
                $k = 4; ?>
                <?php while (have_rows('addresses', 'option')) : the_row(); ?>

                    <div class="col-12 col-lg-<?php echo $i == 1 ? '2' : '4' ?> order-<?php echo $k; ?> order-lg-<?php echo $i; ?>">
                        <div class="footer-main__content__info">
                            <p><?php the_sub_field('city'); ?></p>
                            <p><?php the_sub_field('address'); ?></p>
                        </div>
                    </div>

                    <?php $i++;
                    $k--; endwhile; ?>
                <div class="col-12 col-lg-2 order-1 order-lg-4">
                    <div class="footer-main__content__numbers">
                        <h2><a href="tel:<?php the_field('phone_1', 'option') ?>"><?php the_field('phone_1', 'option') ?></a></h2>
                        <h2><a href="tel:<?php the_field('phone_2', 'option') ?>"><?php the_field('phone_2', 'option') ?></a></h2>
                    </div>
                </div>
            </div>
<!--            <div class="col-12 order-5">-->
<!--                    --><?php
//                    wp_nav_menu([
//                        'menu' => 'UnderFooterMenu',
//                        'container' => 'div',
//                        'container_class' => 'footer-main__content__page-link',
//                        'menu_class' => '',
//                        'container_id' => '',
//                    ]);
//                    ?>
<!--            </div>-->
        </div>
    </div>
</section>