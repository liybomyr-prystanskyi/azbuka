<?php $condition_yellow = is_singular('courses') || is_post_type_archive('courses') || is_tax('course_categories', 'adult-courses'); ?>
<?php $condition_violet = is_page_template('template-international-exams.php') || is_page_template('template-toefl.php'); ?>
<section class="city-center-content">
    <div class="city-center-padding city-center">
        <div class="title-default">
            <h4>
                <p>Чому варто обрати наш центр перекладу у Львові</p>
            </h4>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="city-center-content__main another-block-content
                <?php echo $condition_yellow ? 'city-center-li' : ''; ?>
                <?php echo $condition_violet ? 'city-center-li-violet' : ''; ?>
                ">
                    <?php the_field('courses_bottom_text_2', 'option'); ?>
                </div>
            </div>
        </div>
    </div>
</section>