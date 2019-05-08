<?php
/**
 * Template Name: Single translation
 */
get_header();
?>

<?php if (have_rows('single_translation_blocks')) {
    while (have_rows('single_translation_blocks')) {
        the_row();
        get_template_part('partials/layouts/' . get_row_layout());
    }
}
?>

<?php get_footer();
