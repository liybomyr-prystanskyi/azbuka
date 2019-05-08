<?php
/**
 * Template Name: About us
 */
get_header();
?>

<?php if (have_rows('about_us_page')) {
    while (have_rows('about_us_page')) {
        the_row();
        get_template_part('partials/layouts/' . get_row_layout());
    }
}
?>

<?php get_footer();
