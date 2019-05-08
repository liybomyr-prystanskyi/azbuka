<?php wp_reset_postdata(); ?>
<?php $condition = is_page_template('template-toefl.php') ?>
<?php $condition_oral = is_page_template('template-single-translation.php') ?>
<section class="we-realize-oral-section   ">
    <div class="container">
        <div class="title-default">
            <h4>
                <p><?php the_sub_field('block_heading'); ?></p>
            </h4>
        </div>
        <div class="we-realize-oral-section__main">
            <div class="row pt-5">
                <div class="col-12 col-lg-6 pb-4">
                    <div class="we-realize-oral-section__main__content <?php echo $condition ? 'toefl-we-realize-color-line' : ''; ?>">
                        <div class="we-realize-oral-section__main__content__title <?php echo !$condition && !$condition_oral ? 'spanish-courses-color-line-yellow spanish-courses-title-style' : ''; ?>">
                            <?php echo $condition ? '<span>1</span>' : ''; ?>
                            <h2><?php the_sub_field('title_left'); ?></h2>
                            <?php if (get_sub_field('subtitle_left')): ?>
                                <p><?php the_sub_field('subtitle_left'); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="we-realize-oral-section__main__content__description">
                            <?php the_sub_field('content_left'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pb-4">
                    <div class="we-realize-oral-section__main__content <?php echo $condition ? 'toefl-we-realize-color-line' : ''; ?>">
                        <div class="we-realize-oral-section__main__content__title <?php echo !$condition && !$condition_oral ? 'spanish-courses-title-hotizont' : 'we-realize-title-horizont'; ?>">
                            <?php echo $condition ? '<span>2</span>' : ''; ?>
                            <h2><?php the_sub_field('title_right'); ?></h2>
                        </div>

                        <div class="we-realize-oral-section__main__content__description">
                            <?php the_sub_field('content_right'); ?>
                        </div>
                    </div>
                </div>
                <?php if ($condition) : ?>
                    <div class="col-12 col-lg-6 pb-4">
                        <div class="we-realize-oral-section__main__content <?php echo $condition ? 'toefl-we-realize-color-line' : ''; ?>">
                            <div class="we-realize-oral-section__main__content__title <?php echo !$condition ? 'spanish-courses-title-hotizont' : 'we-realize-title-horizont'; ?>">
                                <span>3</span>
                                <h2><?php the_sub_field('title_left_second_row'); ?></h2>
                            </div>

                            <div class="we-realize-oral-section__main__content__description">
                                <?php the_sub_field('content_left_second_row'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pb-4">
                        <div class="we-realize-oral-section__main__content <?php echo $condition ? 'toefl-we-realize-color-line' : ''; ?>">
                            <div class="we-realize-oral-section__main__content__title <?php echo !$condition ? 'spanish-courses-color-line-yellow spanish-courses-title-style' : ''; ?>">
                                <span>4</span>
                                <h2><?php the_sub_field('title_right_second_row'); ?></h2>
                            </div>

                            <div class="we-realize-oral-section__main__content__description">
                                <?php the_sub_field('content_right_second_row'); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>