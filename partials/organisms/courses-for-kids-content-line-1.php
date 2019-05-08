<section class="courses-for-kids  our-courses-bg  "
         style="background-image:url('<?php is_archive() ? the_field('hero_section_background_image', 'option') : the_sub_field('hero_section_background_image'); ?>');">
    <div class="container">
        <div class="courses-for-kids__main">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-5">
                    <div class="courses-for-kids__main__content">

                        <div class="courses-for-kids__main__content__title">
                            <?php if (is_archive() && !is_tax('course_categories', 'adult-courses')) : ?>
                                <h1><?php the_field('first_line_heading', 'option'); ?></h1>
                                <h2><?php the_field('second_line_heading', 'option'); ?></h2>
                            <?php else : ?>
                                <h1><?php the_sub_field('first_line_heading'); ?></h1>
                                <h2><?php the_sub_field('second_line_heading'); ?></h2>
                            <?php endif; ?>
                        </div>

                        <div class="courses-for-kids__main__content__form">
                            <div class="courses-for-kids__main__content__form__subtitle">
                                <h3>Записуйтесь на пробне заняття</h3>
                            </div>

                            <?php if (is_archive() && !is_tax('course_categories', 'adult-courses')): ?>
                                <?php echo do_shortcode(get_field('form_shortcode', 'option')); ?>
                            <?php else : ?>
                                <?php echo do_shortcode(get_sub_field('form_shortcode')); ?>
                            <?php endif; ?>

                            <div class="courses-for-kids__main__content__form__description">
                                <p>Записуйтесь на заняття і протягом дня ми зконтактуємося з вами для уточнення
                                    деталей</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>