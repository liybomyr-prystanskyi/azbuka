<?php global $post;
$condition = is_page_template('template-international-exams.php') ||
    is_page_template('template-single-translation.php') ||
    is_page_template('template-translation-agency.php') ||
    is_singular('courses');
$condition_yellow = is_tax('course_categories', 'adult-courses');
$post_ID = $condition || $condition_yellow ? $post->ID : 'option'; ?>
<section class="languages-section ">
    <div class="container">
        <div class="languages-section__main <?php echo !$condition_yellow ? 'languages-section__main__border' : 'languages-section__main__border-yellow'; ?>">
            <div class="title-default">
                <h4>
                    <?php if ( $condition || $condition_yellow) : ?>
                        <p><?php the_sub_field('languages_block_heading'); ?></p>
                    <?php else : ?>
                        <p>Мови яких ми навчаємо</p>
                    <?php endif; ?>
                </h4>
            </div>
            <div class="pt-4">
                <div class="row">
                    <?php if (is_tax('course_categories', 'adult-courses')) : ?>
                        <?php
                        $args = [
                            'post_type' => 'courses',
                            'tax_query' => [
                                [
                                    'taxonomy' => 'course_categories',
                                    'field' => 'slug',
                                    'terms' => 'adult-courses',
                                ],
                            ],
                        ];
                        $query = new WP_Query($args); ?>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="col-6 col-lg-4 ">
                                <a href="<?php the_permalink(); ?>"
                                   class="languages-section__main__item kids-item-green">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                    <p>
                                        <?php the_title(); ?>
                                    </p>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php while (have_rows('languages', $post_ID)) : the_row(); ?>
                            <div class="col-6 col-lg-4 ">
                                <a class="languages-section__main__item pointer-events-class <?php echo !$condition_yellow ? 'written-btn-item pointer-events-class' : 'kids-item-green'; ?> ">
                                    <img src="<?php echo get_sub_field('flag')['url'] ?>"
                                         alt="<?php echo get_sub_field('flag')['alt'] ?>">
                                    <p>
                                        <?php the_sub_field('language') ?>
                                    </p>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>