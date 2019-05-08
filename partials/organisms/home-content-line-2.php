<section class="language-courses">
    <div class="container">
        <div class="title-default">
            <h4>
                <p>Азбука Світу -<span>ЦЕ </span></p>
            </h4>
        </div>
        <div class="language-courses__content">
            <div class="padding-bottom">
                <div class="row main-content">
                    <div class="col-12 col-lg-6">
                        <div class="block-info">
                            <h2>Мовні курси</h2>
                            <ul>
                                <?php
                                $args = [
                                    'post_type' => 'courses',
                                    'hide_empty' => true,
                                    'tax_query' => [
                                        [
                                            'taxonomy' => 'course_categories',
                                            'field' => 'slug',
                                            'terms' => 'adult-courses',
                                            'operator' => 'NOT IN',
                                        ],
                                    ],
                                ];
                                $courses_query = new WP_Query($args);
                                while ($courses_query->have_posts()) : $courses_query->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>

                            <a href="<?php echo home_url('/courses'); ?>" class="default-btn">Обрати свій курс</a>

                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="block-image"
                             style="background-image:url('<?php the_field('azb_is_picture_1', 'option'); ?>');">
                            <div class="btn-play">
                                <a href="<?php echo home_url('/courses'); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/play-img-green.png'; ?>"
                                         alt="play">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding-bottom">
                <div class="row main-content">
                    <div class="col-12 col-lg-6">
                        <div class="block-info">
                            <h2>Бюро перекладів</h2>

                            <ul>
                                <?php
                                $my_wp_query = new WP_Query($args);
                                $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));

                                /** ID of page 'Переклади' => 11 */
                                $translation_agency_children = get_page_children(11, $all_wp_pages);
                                foreach ($translation_agency_children as $child) : ?>
                                    <li>
                                        <a href="<?php echo $child->guid; ?>"><?php echo $child->post_title; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <a href="<?php echo home_url('/perekladi'); ?>" class="default-btn">Дізнатись більше</a>

                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="block-image"
                             style="background-image:url('<?php the_field('azb_is_picture_2', 'option'); ?>');">
                            <div class="btn-play">
                                <a href="<?php echo home_url('/perekladi'); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/play-img-blue.png'; ?>"
                                         alt="play">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding-bottom">
                <div class="row main-content">
                    <div class="col-12 col-lg-6">
                        <div class="block-info">
                            <h2>Міжнародні іспити</h2>
                            <ul>
                                <?php
                                /** ID of page 'Міжнародні іспити' => 19 */
                                $translation_agency_children = get_page_children(19, $all_wp_pages);
                                foreach ($translation_agency_children as $child) : ?>
                                    <li>
                                        <a href="<?php echo $child->guid; ?>"><?php echo $child->post_title; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <a href="<?php echo home_url('/mizhnarodni-ispiti'); ?>" class="default-btn">Підготуватись до здачі</a>

                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="block-image"
                             style="background-image:url('<?php the_field('azb_is_picture_3', 'option'); ?>')">
                            <div class="btn-play">
                                <a href="<?php echo home_url('/mizhnarodni-ispiti'); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/play-img-violet.png'; ?>"
                                         alt="play">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>