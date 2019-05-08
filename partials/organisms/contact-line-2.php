<section class="contact-map">
    <div class="container">
        <div class="contact-map__main">
            <div class="title-default">
                <h4>
                    Контакти
                </h4>
            </div>
            <div class="contact-map__main__content">
                <div class="linear-contact-map">
                    <div class="row">
                        <?php $i = 1;
                        while (have_rows('addresses', 'option')) : the_row(); ?>
                            <?php $location = get_sub_field('map_marker'); ?>
                            <div class="col-12 col-lg-4">
                                <div class="contact-map__main__content__item-<?php echo $i; ?>"
                                     style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/assets/img/contact-map-bg' . $i . '.png'; ?> ');">
                                    <div class="contact-map__main__content__item-<?php echo $i; ?>__content">
                                        <a href="javascript:google.maps.event.trigger(gmarkers['Location <?php echo $i; ?>'],'click');"
                                           data-lat-lng="<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>"
                                           data-str="<?php echo $location['address']; ?>"
                                           class="map-target">
                                            <p>м. Львів,</p>
                                            <p><?php echo $location['address']; ?></p>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <?php $i++; endwhile; ?>
                    </div>
                </div>

                <div class="row">
                    <?php while (have_rows('contact_groups', 'option')) : the_row(); ?>
                        <div class="col-6 col-lg-3">
                            <div class="contact-map__main__content__info-item">
                                <div class="contact-map__main__content__info-item__title">
                                    <img src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/home-phone-number.png'; ?>"
                                         alt="phone">
                                    <p><?php the_sub_field('group_title'); ?></p>
                                </div>
                                <?php if (get_sub_field('phone_number_1')) : ?>
                                    <a href="tel:+38<?php the_sub_field('phone_number_1'); ?>"><?php the_sub_field('phone_number_1'); ?></a>
                                <?php endif; ?>
                                <?php if (get_sub_field('phone_number_2')) : ?>
                                    <a href="tel:+38<?php the_sub_field('phone_number_2'); ?>"><?php the_sub_field('phone_number_2'); ?></a>
                                <?php endif; ?>
                                <?php if (get_sub_field('e-mail')) : ?>
                                    <a href="mailto:<?php the_sub_field('e-mail'); ?>"><?php the_sub_field('e-mail'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div id="map" class="contact-map__main__content__map"
                     style="width:100%; min-height:390px; position: relative;"></div>
            </div>
        </div>
    </div>
</section>