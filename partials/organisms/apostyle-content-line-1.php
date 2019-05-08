<section class="apostyle"
         style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/assets/img/written-bg.png'; ?>');">
    <div class="container">
        <div class="apostyle__main">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                    <div class="written__main__info">
                        <?php the_sub_field('left_side'); ?>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="apostyle__main__form">
                        <?php the_sub_field('right_side'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>