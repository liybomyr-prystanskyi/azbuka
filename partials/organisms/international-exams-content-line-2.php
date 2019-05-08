<?php $condition = get_row_layout() == 'exams-list'; ?>
<section class="we-go-to <?php echo !$condition ? 'our-courses-button-style' : ''; ?>">
    <div class="container">
        <div class="title-default">
            <h4>
                <?php if ($condition) : ?>
                    <p><span>Ми</span> готуємо до</p>
                <?php else : ?>
                    <p>Обирай для <span>себе!</span></p>
                <?php endif; ?>
            </h4>
        </div>
        <div class="we-go-to__main">
            <div class="row">
                <?php if ($condition) : ?>
                    <?php
                    $my_wp_query = new WP_Query($args);
                    $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1')); ?>
                    <?php
                    /** ID of page 'Міжнародні іспити' => 19 */
                    $translation_agency_children = get_page_children(19, $all_wp_pages);
                    foreach ($translation_agency_children as $child) : ?>
                        <div class="col-12 col-lg-4">
                            <div class="we-go-to__main__button">
                                <a href="<?php echo $child->guid; ?>"><?php echo $child->post_title; ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <?php
                    $args = [
                        'post_type' => 'courses',
                        'tax_query' => [
                            [
                                'taxonomy' => 'course_categories',
                                'field' => 'slug',
                                'terms' => 'adult-courses',
                                'operator' => 'NOT IN',
                            ],
                        ],
                    ];
                    $query = new WP_Query($args); ?>
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="we-go-to__main__button">
                            <a href="<?php echo home_url('/course_category/adult-courses/'); ?>">Курси для дорослих</a>
                        </div>
                    </div>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="col-12 col-lg-4">
                            <div class="we-go-to__main__button">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>