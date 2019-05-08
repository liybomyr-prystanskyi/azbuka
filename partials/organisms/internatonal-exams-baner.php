<?php $condition = is_page_template('template-about-us.php'); ?>
<?php $bg = $condition ? 'about-us-bg-baner.png' : 'international-exams-baner-bg.png';
$bg = get_template_directory_uri() . '/html_template/build/assets/img/' . $bg; ?>
<section class="internatonal-exams <?php echo $condition ? 'about-us-baner-style' : ''; ?>  "
         style="background-image:url('<?php echo $bg; ?>');">
    <div class="container">
        <div class="internatonal-exams__main">

            <div class="row justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="internatonal-exams__main__content">

                        <div class="internatonal-exams__main__content__title">
                            <h1><?php the_sub_field('first_line_heading'); ?></h1>
                            <h2><?php the_sub_field('second_line_heading'); ?></h2>
                            <?php if (get_sub_field('third_line_heading')) : ?>
                                <h3><?php the_sub_field('third_line_heading'); ?></h3>
                            <?php endif; ?>
                        </div>

                        <?php if (!$condition) : ; ?>
                            <div class="internatonal-exams__main__content__description">
                                <p><?php the_sub_field('hero_description'); ?></p>
                            </div>
                        <?php else : ?>
                            <div class="internatonal-exams__main__content__description-2">
                                <?php the_sub_field('hero_description'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>