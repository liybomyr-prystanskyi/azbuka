<?php
get_header();
?>

<?php if (have_rows('single_course_layout')) {

    while (have_rows('single_course_layout')) {
        the_row();
        get_template_part('partials/layouts/' . get_row_layout());
    }

}
?>

<?php //get_template_part('partials/organisms/courses-for-kids-content-line-1'); ?>

<?php //get_template_part('partials/organisms/oral-translation-content-line-3'); ?>

<?php //get_template_part('partials/organisms/courses-for-kids-content-line-2'); ?>

<?php //get_template_part('partials/organisms/oral-translation-content-line-4'); ?>

<?php //get_template_part('partials/organisms/courses-for-kids-content-line-3'); ?>

<?php //get_template_part('partials/organisms/courses-for-kids-content-line-4'); ?>

<?php //get_template_part('partials/organisms/company-logo'); ?>

<?php //get_template_part('partials/organisms/home-content-line-4'); ?>

<?php //get_template_part('partials/organisms/oral-translation-content-line-5'); ?>

<?php //get_template_part('partials/organisms/oral-translation-content-line-6'); ?>

<?php //get_template_part('partials/organisms/oral-translation-content-line-7'); ?>

<?php get_footer();
