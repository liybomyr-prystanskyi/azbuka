<?php $condition = is_page_template('template-toefl.php'); ?>
<section class="alphabet-specialists <?php echo $condition ? 'toefl-background' : ''; ?>  ">
    <div class="container">
        <div class="alphabet-specialists__main">
            <?php if (is_archive()) : ?>
                <?php $group = 'option'; ?>
            <?php elseif (is_singular()) : ?>
                <?php $group = ''; ?>
            <?php endif; ?>

            <?php while (have_rows('why_effective', $group)) : the_row(); ?>
                <div class="title-default">
                    <h4>
                        <p><?php the_sub_field('title'); ?> </p>
                    </h4>
                </div>

                <div class="kids-courses-slider">
                    <?php while (have_rows('courses_slider', $group)) : the_row(); ?>
                        <div class="row d-flex align-items-center justify-content-center flex-wrap <?php echo $condition ? 'toefl-title-color toefl-reverse' : ''; ?>">
                            <div class="col-12 col-lg-6">
                                <div class="alphabet-specialists__main__content">
                                    <?php echo get_sub_field('slide')['content_area']; ?>
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="alphabet-specialists__main__image">
                                    <img src="<?php echo get_sub_field('slide')['image']['url']; ?>"
                                         alt="<?php echo get_sub_field('slide')['image']['alt']; ?>">
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="custom-arrow">
            <a href="#" class="custom-arrow-left">
                <i class="fa fa-caret-left"></i>
            </a>
            <a href="#" class="custom-arrow-right">
                <i class="fa fa-caret-right"></i>
            </a>
        </div>
    </div>
</section>