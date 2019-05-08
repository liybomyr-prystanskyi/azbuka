<section class="toefl" style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/assets/img/toefl-baner-img.png'; ?>');">
    <div class="container">
        <div class="toefl__main">
            <div class="row justify-content-between ">

                <div class="col-12 col-lg-6">
                    <div class="toefl__main__info-block">
                        <div class="toefl__main__info-block__title">
                            <h1><?php the_sub_field('toefl_first_line_heading'); ?></h1>
                            <h2><?php the_sub_field('toefl_second_line_heading'); ?></h2>
                            <h3><?php the_sub_field('toefl_third_line_heading'); ?></h3>
                        </div>
                        <div class="toefl__main__info-block__description">
                            <?php the_sub_field('toefl_subheading'); ?>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="toefl__main__form">
                        <h3>
                            <?php the_sub_field('toefl_form_heading'); ?>
                        </h3>
                        <?php echo do_shortcode(get_sub_field('toefl_form_shortcode')); ?>
<!--                        <form class="written__main__form__input-block ">-->
<!--                            <input type="text" id="input-name" placeholder="Ваше імя">-->
<!--                            <input id="phone" type="text" placeholder="Ваш телефон" />-->
<!--                            <input type="submit" value="Зареєструватись" id="input-submit">-->
<!--                        </form>-->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>