<?php if (have_rows('statements')) : ?>
    <section class="useful-spanish-courses">
        <div class="container">
            <div class="title-default">
                <h4>
                    <p><?php the_field('for_who_block_heading'); ?></p>
                </h4>
            </div>
            <div class="spanish-courses-separated">
                <div class="useful-spanish-courses__main">
                    <div class="row counter">
                        <?php $i = 1; ?>
                        <?php while (have_rows('statements')) : the_row(); ?>
                            <div class="col-12 col-lg-4 spanish-items">
                                <div class="useful-spanish-courses__main__item" style="background-image:url('<?php the_sub_field('background_image') ?>');">
                                    <div class="useful-spanish-courses__main__item__title">
                                        <h2><?php the_sub_field('title'); ?></h2>
                                    </div>
                                    <?php if (!empty(get_sub_field('subtitle'))) : ?>
                                        <div class="useful-spanish-courses__main__item__description text-center">
                                            <p>
                                                <?php the_sub_field('subtitle'); ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php $i++; endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>