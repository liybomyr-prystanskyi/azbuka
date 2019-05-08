<?php
/**
 * Template Name: Translation agency
 */
get_header();
?>

<?php if (have_rows('translation_agency_blocks')) {
    while (have_rows('translation_agency_blocks')) {
        the_row();
        get_template_part('partials/layouts/' . get_row_layout());
    }
}
?>

<?php get_footer();
