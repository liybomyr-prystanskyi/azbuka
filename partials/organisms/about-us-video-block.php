<section class="about-us-video-block" style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/assets/img/about-us-blue-bg.png'; ?>);">
    <div class="container">
        <div class="title-default">
            <h4>
                <p><?php the_sub_field('block_heading'); ?></p>
            </h4>

            <h3>
                <?php the_sub_field('block_subheading'); ?>
            </h3>

        </div>

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-10">
                <div class="about-us-video-block__main about-us-video-slider">
                    <?php while(have_rows('videos')) : the_row(); ?>
                        <?php the_sub_field('video_url'); ?>
                    <?php endwhile; ?>
<!--                    <iframe src="https://www.youtube.com/embed/l_NBen_PhRs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!---->
<!--                    <iframe src="https://www.youtube.com/embed/l_NBen_PhRs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!---->
<!--                    <iframe src="https://www.youtube.com/embed/l_NBen_PhRs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

                </div>
            </div>
            <div class="custom-arrow">
                <a href="#" class="custom-arrow-left slick-arrow">
                    <i class="fa fa-caret-left"></i>
                </a>

                <a href="#" class="custom-arrow-right slick-arrow">
                    <i class="fa fa-caret-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>