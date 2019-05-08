<?php $condition = get_row_layout() == 'abiturient-problems';
global $post; ?>
<?php $post_ID = $condition ? $post->ID : 'option'; ?>

<section class="trust ">
    <div class="container">
        <div class="title-default">
            <h4>
                <?php the_sub_field('why_trust_block_heading', $post_ID); ?>
                <?php the_field('why_trust_block_heading', $post_ID); ?>
            </h4>
        </div>
    </div>
    <?php if (!$condition): ?>
    <div class="full-bg"
         style="background-image:url('<?php the_field('block_background_image', $post_ID); ?>');">
    <?php else : ?>
    <div class="full-bg"
         style="background-image:url('<?php the_sub_field('block_background_image'); ?>');">
    <?php endif; ?>
            <div class="container">
                <div class="trust__main">
                    <?php if (!$condition) : ?>
                        <?php the_field('up_text', 'option') ?>
                        <div class="trust__main__numbers-block"
                             style="background-image:url('<?php the_field('points_background_image', $post_ID); ?>');">
                    <?php else : ?>
                        <?php the_sub_field('up_text'); ?>
                        <div class="trust__main__numbers-block spanish-number-block  spanish-bg-color"
                            style="background-image:url('<?php the_sub_field('points_background_image'); ?>');">
                    <?php endif; ?>
                        <div class="row">
                            <div class="even-style">
                                <?php $i = 0; ?>
                                <?php $loop = !$condition ? 'option' : $post->ID; ?>
                                <?php while (have_rows('trust_points', $loop)) : the_row();
                                    $i++; ?>
                                    <div class="col-12 col-md-6 col-lg-6 text-color-child  align-items-center d-flex <?php echo $condition ? 'spanish-courses-numeric-fonts justify-content-start' : ''; ?>">
                                        <span><?php echo $i; ?>.</span>
                                        <p>
                                            <?php the_sub_field('trust_point') ?>
                                        </p>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>