<?php
/**
 * Template Name: Home
 */
get_header();
?>

<?php get_template_part('partials/organisms/home-content-line-1'); ?>

<?php get_template_part('partials/organisms/home-content-line-2'); ?>

<?php get_template_part('partials/organisms/home-content-line-3'); ?>

<?php get_template_part('partials/organisms/company-logo'); ?>

<?php get_template_part('partials/organisms/home-content-line-4'); ?>

<?php get_template_part('partials/organisms/home-content-line-5'); ?>

<?php get_template_part('partials/organisms/home-content-line-6'); ?>

<?php get_template_part('partials/organisms/home-content-line-7'); ?>

<?php get_template_part('partials/organisms/home-content-line-8'); ?>

<!-- Modal -->
<div class="modal fade" id="myModal1" data-target="#exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog my-modal">
        <div class="modal-content modal-style-default">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body ">
                <div class="courses-for-kids__main__content">

                    <div class="courses-for-kids__main__content__form">
                        <div class="courses-for-kids__main__content__form__subtitle">
                            <h3>Записуйтесь на пробне заняття</h3>
                        </div>

                        <div class="written__main__form__input-block__select-1">
                            <select>
                                <option data-display="Мова">Мова</option>
                                <option value="1">Медичний</option>
                                <option value="2">Технічний</option>
                                <option value="3">Літературний</option>
                            </select>
                            <select>
                                <option data-display="Групове (безкоштовно)">Групове (безкоштовно)</option>
                                <option value="1">Медичний</option>
                                <option value="2">Технічний</option>
                                <option value="3">Літературний</option>
                            </select>
                        </div>
                        <div class="courses-for-kids__main__content__form__input">
                            <input type="text" id="input-name" placeholder="Ваше імя">
                            <input id="phone" type="text" placeholder="Телефон"/>
                        </div>
                        <div class="courses-for-kids__main__content__form__button">
                            <input type="submit" class="btn btn-primary" id="signin" value="Записатись на заняття"
                                   id="input-submit">
                        </div>


                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog my-modal">
        <div class="modal-content modal-style-default">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <div class="my-content">
                    <h2>Дякуємо за заявку !</h2>
                    <p>Протягом дня ми зконтактуємося з вами для уточнення деталей</p>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer();