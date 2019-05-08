<section class="city-center-content">
    <?php if(get_sub_field('block_heading')) : ?>
    <div class="city-center-padding city-center">
        <div class="title-default">
            <h4>
                <p><?php the_sub_field('block_heading');?></p>
            </h4>
        </div>
    </div>
    <?php endif;?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="city-center-content__main another-block-content">
                    <?php the_sub_field('content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
