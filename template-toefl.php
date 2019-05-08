<?php
/**
 * Template Name: IELTS, TOEFL, ZNO
 */
get_header();
?>

<?php if (have_rows('single_exam')) {
    while (have_rows('single_exam')) {
        the_row();
        get_template_part('partials/layouts/' . get_row_layout());
    }
}
?>

<?php get_footer();
