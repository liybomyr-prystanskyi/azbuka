<?php
get_header();
$posts_array = [];
?>

<?php while (have_posts()) : the_post(); ?>
    <?php $posts_array[] = [
        'title' => get_the_title(),
        'content' => get_the_content()
    ]; ?>
<?php endwhile; ?>

<section class="faq">
    <div class="container">
        <div class="title-default">
            <h4>
                <p>Важливі питання</p>
            </h4>
        </div>
        <div class="faq__main">
            <div class="accordion js-accordion">
                <!-- Molecule - Tabs/FAQ -->
                <div class="row justify-content-around">
                    <?php $i = 0; ?>
                    <?php while ($i <= count($posts_array) - 1) : ?>
                        <div class="col-6 col-lg-5 text-center tab-style-1  ">
                            <a href="#" class="b-question" data-target="#q<?php echo $i; ?>">
                                <?php echo $posts_array[$i]['title']; ?>
                            </a>
                        </div>
                        <div class="col-lg-5 col-6 text-center tab-style-1  ">
                            <a href="#" class="b-question" data-target="#q<?php echo $i + 1; ?>">
                                <?php echo $posts_array[$i + 1]['title']; ?>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="q<?php echo $i; ?>" class="b-answer">
                                <?php echo $posts_array[$i]['content']; ?>
                            </div>
                            <div id="q<?php echo $i + 1; ?>" class="b-answer">
                                <?php echo $posts_array[$i + 1]['content']; ?>
                            </div>
                        </div>
                        <?php $i += 2; ?>
                    <?php endwhile; ?>
                </div>
                <!-- /Molecule - Tabs/FAQ -->
            </div>
        </div>
    </div>
</section>

<?php get_template_part('partials/organisms/oral-translation-content-line-4'); ?>

<?php get_template_part('partials/organisms/oral-translation-content-line-5'); ?>

<?php get_template_part('partials/organisms/oral-translation-content-line-6'); ?>

<?php get_footer();
