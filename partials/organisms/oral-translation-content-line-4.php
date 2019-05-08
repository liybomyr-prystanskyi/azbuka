<?php $condition = is_page_template('template-international-exams.php') || is_page_template('template-toefl.php'); ?>
<section
        class="application-section
        <?php echo $condition ? 'international-exams-padding application-section-violet-bg' :
            (is_page_template('template-single-translation.php') ||
            is_page_template('template-translation-agency.php') ||
            is_archive() &&
            !is_tax('course_categories', 'adult-courses') ? '' : 'application-section-yellow-bg'); ?>">
    <div class="container">
        <div class="application-section__main">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-8">
                    <div class="application-section__main__info">
                        <?php if ($condition || is_tax('course_categories', 'adult-courses')) : ?>
                            <?php the_sub_field('content_part'); ?>
                        <?php else : ?>
                            <?php the_field('content_part', 'option'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="application-section__main__button " data-toggle="modal" data-target="#myModal1">
                        <?php if ($condition || is_tax('course_categories', 'adult-courses')) : ?>
                            <a href="#"><?php the_sub_field('button_text'); ?></a>
                        <?php else : ?>
                            <a href="#"><?php the_field('button_text', 'option'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>