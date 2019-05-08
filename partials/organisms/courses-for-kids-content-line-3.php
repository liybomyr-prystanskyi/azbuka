<?php $condition = get_row_layout() == 'lesson-process'; ?>
<?php $condition_about = is_page_template('template-about-us.php'); ?>
<section class="classes-going <?php echo is_single() || is_tax('course_categories', 'adult-courses') ? 'classes-going-background' : ($condition_about ? 'blue-bg' : 'classes-international-exams'); ?> ">
    <div class="container">
        <div class="classes-going__main">
            <div class="title-default">
                <?php if ($condition): ?>
                    <h4>
                        <p>
                            <span> Як </span> відбуваються заняття?
                        </p>
                    </h4>
                <?php else : ?>
                    <h4>
                        <p>
                            <?php the_sub_field('teachers_heading'); ?>
                        </p>
                    </h4>
                    <h3>
                        <?php the_sub_field('teachers_subheading'); ?>
                    </h3>
                <?php endif; ?>

            </div>
            <div class="classes-going__main-paddingTop  classes-going-slider international-exams-arrows <?php echo $condition_about ? 'about-us-arrow-position' : ''; ?>">
                <?php if ($condition && !$condition_about) : ?>

                    <?php while (have_rows('how_classes_are_going')) : the_row(); ?>
                        <div class="row d-flex flex-wrap ">
                            <div class="col-12 col-lg-6">
                                <div class="classes-going__main__image">
                                    <img src="<?php echo get_sub_field('image')['url']; ?>"
                                         alt="<?php echo get_sub_field('image')['alt']; ?>">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 d-flex align-items-center">
                                <div class="classes-going__main__content">

                                    <?php the_sub_field('content'); ?>

                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                <?php else : ?>

                    <?php while (have_rows('teachers_row')) : the_row(); ?>
                        <?php $teacher = get_sub_field('teacher'); ?>
                        <?php $teacher_name = $teacher[0]->post_title; ?>

                        <?php $teacher_cat = wp_get_post_terms($teacher[0]->ID, 'teachers_language'); ?>
                        <?php $teacher_lang = $teacher_cat[0]->name;?>
                        <div class="row d-flex flex-wrap about-us-reverse">
                            <div class="col-12 col-lg-6">
                                <div class="classes-going__main__image">
                                    <img src="<?php echo get_the_post_thumbnail_url($teacher[0]); ?>" alt="image">
                                </div>

                                <div class="classes-going__main__text-picture <?php echo !$condition_about ? 'classes-going__main__text-picture-yellow-bg' : ''; ?> ">
                                    <p><?php echo $teacher_name; ?></p>
                                    <span><?php echo $teacher_lang; ?></span>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 d-flex align-items-center">
                                <div class="classes-going__main__content">
                                   <?php the_sub_field('description_left'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                <?php endif; ?>
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
    </div>
</section>