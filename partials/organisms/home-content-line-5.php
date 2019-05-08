<section class="about-us">
    <div class="title-default">
        <h4>
            <p>Про нас в цифрах</p>
        </h4>
    </div>
    <div class="container">
        <div class="about-us__main">
            <div class="about-us__main__item">
                <div class="about-us__main__item__info">
                    <div class="row justify-content-end align-items-center flex-wrap">
                        <div class="col-12 col-lg-7 justify-content-end d-flex">
                            <div class="about-us__main__item__info__number">
                                <?php if(!empty(get_field('unstripped_years_of_successful_work', 'option'))): ?>
                                <h3><?php the_field('unstripped_years_of_successful_work', 'option') ?></h3>
                                <?php endif; ?>
                                <h4><?php the_field('stripped_years_of_successful_work', 'option') ?></h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="about-us__main__item__info__description">
                                <h2>років успішної роботи.</h2>
                                <p>
                                    Азбука Світу розпочала свою історію у 2011 році і стрімко зайняла лідируючі позиції на ринку мовних курсів та перекладів.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>