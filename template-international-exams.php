<?php
/**
 * Template Name: International exams
 */
get_header();
?>

<?php if (have_rows('international_exams_layout')) {

    while (have_rows('international_exams_layout')) {
        the_row();
        get_template_part('partials/layouts/' . get_row_layout());

    }

}
?>

<?php get_footer();
