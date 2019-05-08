<?php
/**
 * Template Name: Useful information
 */
get_header();
?>
<?php $i = 1; ?>
<?php while(have_rows('information_blocks')) : the_row(); ?>
<section class="city-center-content <?php echo $i == 1 ? 'useful-information-single' : ''; ?>">
    <div class="city-center-padding city-center">
        <div class="title-default">
            <h4><?php the_sub_field('title'); ?></h4>
        </div>
    </div>
    <div class="container">
        <div class="city-center-content__main">
            <?php the_sub_field('content'); ?>
        </div>
    </div>
</section>
<?php $i++; endwhile; ?>
<?php get_footer();
