<?php
wp_reset_postdata();
$post_objects = get_sub_field('certificates_list');

if ($post_objects) : ?>
    <section class="apostyle-sertificate"
             style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/assets/img/certificate-bg.png'; ?>');">
        <div class="container">
            <div class="apostyle-sertificate__main">
                <?php foreach ($post_objects as $post): ?>
                    <?php setup_postdata($post); ?>
                    <div class="row d-flex">

                        <div class="col-12 col-lg-5">
                            <div class="apostyle-sertificate__main__image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="certificate">
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="apostyle-sertificate__main__info">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
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
<?php endif; ?>