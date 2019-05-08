<section class="tariffs">
    <div class="container">
        <div class="title-default">
            <h4>
                <p><?php the_sub_field('tariffs_block_heading'); ?></p>
            </h4>

            <h3>
                <?php the_sub_field('tariffs_block_subheading'); ?>
            </h3>

        </div>
        <?php if (have_rows('tariffs_repeater')) : ?>

            <div class="tariffs__main">
                <div class="row justify-content-center align-items-center ">
                    <?php while (have_rows('tariffs_repeater')) : the_row(); ?>
                        <?php $data_attr = get_sub_field('group') . ' ' . get_sub_field('lesson_type') . ' ' . strip_tags(get_sub_field('prise')); ?>
                        <div class="col-12 col-lg-4 tariff-content">
                            <div class="tariffs__main__items">
                                <div class="tariffs__main__items__title">
                                    <h2>Група:<span><?php the_sub_field('group'); ?></span></h2>
                                    <h3><?php the_sub_field('lesson_type'); ?></h3>
                                </div>

                                <div class="tariffs-border">
                                    <div class="tariffs__main__items__price">
                                        <p><?php the_sub_field('prise'); ?></p>
                                    </div>

                                    <div class="tariffs__main__items__info">
                                        <?php the_sub_field('lesson_specs'); ?>
                                    </div>

                                    <div class="tariffs__main__items__button">
                                        <a href="#"
                                           data-form="<?php echo $data_attr; ?>" data-toggle="modal" class="formPopup"
                                           data-target="#tariffForm"><?php the_sub_field('button_name'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Modal -->
<div class="modal  fade" id="tariffForm" data-target="#tariffFormCenter" tabindex="-1" role="dialog" aria-labelledby="tariffFormLabel" aria-hidden="true">
    <div class="modal-dialog my-modal">
        <div class="modal-content custome-modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body  modal-style-default ">
                <div class="courses-for-kids__main__content " style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/assets/img/modal-window-default.png'; ?>');">

                    <div class="courses-for-kids__main__content__form">
                        <div class="courses-for-kids__main__content__form__subtitle">
                            <h3>Даруємо Вам перше заняття БЕЗКОШТОВНО</h3>
                        </div>

                        <?php echo do_shortcode('[contact-form-7 id="238" title="Tariff form"]'); ?>

<!--                        <div class="courses-for-kids__main__content__form__input">-->
<!--                            <input type="text" id="input-name" placeholder="Ваше імя">-->
<!--                            <input id="phone" type="text" placeholder="Телефон" />-->
<!--                        </div>-->
<!--                        <div class="courses-for-kids__main__content__form__button">-->
<!--                            <input type="submit" class="btn btn-primary signin" value="Записатись на заняття" id="input-submit">-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
