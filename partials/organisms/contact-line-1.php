<section class="contact" style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/assets/img/contact-bg.png'; ?>');">
    <div class="container">
        <div class="contact__main">
            <div class="row justify-content-between">

                <div class="col-12 col-lg-6">
                    <div class="contact__main__title">
                        <h1><?php the_field('first_line_heading_contacts_page', 'option'); ?></h1>
                        <h2><?php the_field('second_line_heading_contacts_page', 'option'); ?></h2>
                    </div>

                    <div class="contact__main__description">
                        <?php the_field('hero_description_contacts_page', 'option'); ?>
                    </div>

                </div>

                <div class="col-12 col-lg-5">
                    <div class="contact__main__form">
                        <div class="contact__main__form__title">
                            <h3><?php the_field('form_heading_contacts_page', 'option'); ?>
                            </h3>
                        </div>
                            <?php echo do_shortcode(get_field('form_shortcode_contacts_page', 'option')); ?>
<!--                        <form>-->
<!--                            <div class="contact__main__input">-->
<!--                                <input type="text" id="input-name" placeholder="Ваше імя">-->
<!--                                <input id="phone" type="text" placeholder="Ваш телефон" />-->
<!--                                <textarea id="Field4" name="Field4" tabindex="4" placeholder="Коментар"></textarea>-->
<!--                                <input type="submit" value="Надіслати" id="input-submit">-->
<!--                            </div>-->
<!--                        </form>-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>