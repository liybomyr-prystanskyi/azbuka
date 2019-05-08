<section class="categorias-section">
    <div class="oral">
        <div class="title-default">
            <h4>
                <p><?php the_sub_field('block_heading'); ?></p>
            </h4>
        </div>
    </div>

    <div class="container">
        <div class="categorias-section__main">
            <div class="row justify-content-between align-items-start">
                <?php $my_wp_query = new WP_Query($args);
                $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));
                /** ID of page 'Переклади' => 11 */
                $translation_agency_children = get_page_children(11, $all_wp_pages);
                foreach ($translation_agency_children as $child) : ?>
                    <div class="col-12 col-lg-4">
                        <div class="categorias-section__main__item">
                            <a href="<?php echo $child->guid; ?>">
                                <h2><?php echo $child->post_title; ?></h2>
                                <?php if ($child->ID == 13) : /** ID of page 'Усний переклад' => 13 **/?>
                                    <p>(синхроний та звичайний)</p>
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>