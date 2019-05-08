<?php
$args = [
    'post_type' => 'reviews',
    'posts_per_page' => 5,
];

$reviews_query = new WP_Query($args);

if ($reviews_query->have_posts()) :
    $condition = is_post_type_archive('courses') || is_singular('courses') || is_tax('course_categories', 'adult-courses');
    $our_courses_arrows = $condition ? 'our-courses-arrows' : '';
    $row_reverse_quotes = $condition ? 'row-reverse-quotes' : '';
    $quotes_description_color = $condition ? 'quotes-description-color' : '';
    $quotes_margin = $condition ? 'quotes-margin' : '';
    $bg = $condition ? 'online-courses-bg.png' : 'bg-3.png'; ?>

    <section class="quotes <?php echo $our_courses_arrows . ' ' . $quotes_margin; ?>"
             style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/assets/img/'.$bg; ?>')">

        <div class="container">
            <div class="quotes__main ">
                <?php
                while ($reviews_query->have_posts()) : $reviews_query->the_post(); ?>
                    <div class="row d-flex <?php echo $row_reverse_quotes; ?>">
                        <div class="col-12 col-lg-6">
                            <div class="quotes__main__image"
                                 style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="d-flex align-items-start justify-content-center flex-column h-100">
                                <div class="quotes__main__description clearfix <?php echo $quotes_description_color; ?>">
                                    <p><?php the_content(); ?></p>
                                    <span><?php the_title(); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="custom-arrow">
                <a href="#" class="custom-arrow-left ">
                    <i class="fa fa-caret-left"></i>
                </a>

                <a href="#" class="custom-arrow-right ">
                    <i class="fa fa-caret-right"></i>
                </a>
            </div>
        </div>
    </section>
<?php endif;
wp_reset_postdata();
