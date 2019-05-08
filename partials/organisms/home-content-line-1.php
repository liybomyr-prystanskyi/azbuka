<section class="home-baner">
    <div class="container">
        <div class="home-baner__main">
<!--            --><?php //var_dump(get_field('single_home_slide', 'option')); ?>
            <?php while (have_rows('slider', 'option')) : the_row(); ?>
            <div class="row d-flex home-baner__main-reverse-block">
                <div class="col-12 col-lg-5">
                    <div class="home-baner__main__info">
                        <?php the_sub_field('content_area'); ?>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="home-baner__main__image">
                        <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

        <div class="custom-arrow">
            <a href="#" class="custom-arrow-left ">
				<i class="fa fa-caret-left"></i>
			</a>

            <a href="#" class="custom-arrow-right ">
				<i class="fa fa-caret-right"></i>
			</a>
        </div>

    </div>
</section>