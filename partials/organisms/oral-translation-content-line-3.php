<section class="trust-azbyka <?php echo is_single() ? 'adult-courses-bp' : ''; ?>">
    <div class="trust">
        <div class="title-default">
            <h4>
                <p><?php the_sub_field('why_trust_heading'); ?></p>
            </h4>
        </div>
    </div>
    <div class="container">
        <div class="trust-azbyka__main">
            <div class="row justify-content-around align-items-center">
                <?php $i = 1; ?>
                <?php while (have_rows('why_trust')) : the_row(); ?>
                    <div class="col-12 col-md-5 col-lg-5">
                        <div class="trust-azbyka__main__item <?php echo is_singular('courses') || is_tax('course_categories', 'adult-courses') ? 'numbers-color-yellow' :
                            (is_page_template('template-about-us.php') || is_page_template('template-single-translation.php') || is_page_template('template-translation-agency.php') ? '' :
                                'numbers-color-violet');?>">
                            <h2><?php echo $i; ?></h2>
                            <p><?php the_sub_field('text'); ?></p>
<!--                            <img src="--><?php //echo get_template_directory_uri() . '/html_template/build'; ?><!--/assets/img/trust-yellow.png"-->
<!--                                 alt="yellow-bg">-->
                        </div>
                    </div>
                <?php $i++; endwhile; ?>
            </div>
        </div>
    </div>
</section>