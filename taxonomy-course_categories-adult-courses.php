<?php
get_header();
?>

<?php if (have_rows('single_course_layout', 'course_categories_7')) {

    while (have_rows('single_course_layout', 'course_categories_7')) {
        the_row();
        get_template_part('partials/layouts/' . get_row_layout());
    }

}
?>

<?php get_footer();
