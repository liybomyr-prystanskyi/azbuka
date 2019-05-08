<section class="company-logo  ">
    <div class="container">
        <div class="believe ">
            <div class="title-default">
                <h4>
                    <p><?php the_field('trust_section_title', 'option'); ?></p>
                </h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="company-logo__main">
            <?php while (have_rows('clients_logos', 'option')) : the_row(); ?>
                <div class="company-logo__main__item">
                    <img src="<?php echo get_sub_field('client_logo')['url']; ?>"
                         alt="<?php echo get_sub_field('client_logo')['alt']; ?>">
                    <div class="company-logo__main__item__underline-image">
                        <img src="<?php echo get_template_directory_uri() . '/html_template/build'; ?>/assets/img/underline.png" alt="underline">
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>