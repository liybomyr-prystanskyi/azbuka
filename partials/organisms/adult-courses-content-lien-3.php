<section class="adult-courses-novelty">
    <div class="container">
        <div class="adult-courses-novelty__main">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-4">
                    <div class="adult-courses-novelty__main__text">
                        <p><?php the_sub_field('text'); ?></p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="adult-courses-novelty__main__text-2" style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/assets/img/adult-courses-novelty.png'; ?>');">
                        <p><?php the_sub_field('stock_text'); ?></p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="adult-courses-novelty__main__btn" data-toggle="modal" data-target="#myModal1">
                        <a href="#"><?php the_sub_field('button_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>