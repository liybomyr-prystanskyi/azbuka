<?php $condition = is_page_template('template-toefl.php'); ?>
<?php $img = $condition ? 'toefl-skew-' : 'yellow-block-'; ?>
<section class="why-we-cool">
    <div class="container">
        <div class="why-we-cool__main">
            <div class="title-default">
                <h4>
                    Чому ми круті?
                </h4>
            </div>

            <div class="row why-we-cool-padding-top">
                <div class="why-we-cool__main__content <?php echo $condition ? 'why-we-cool-border-violet' : ''; ?>">
                    <?php $i = 1; ?>
                    <?php while (have_rows('why_we_are_cool', 'option')) : the_row(); ?>
                        <div class="col-12 col-lg-4 px-0">

                            <div class="why-we-cool__main__content__item-1"
                                 style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/assets/img/' . $img . $i . '.png'; ?>);">
                                <h2><?php echo $i; ?>.</h2>
                                <p><?php the_sub_field('point'); ?></p>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>