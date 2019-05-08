<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section class="home-menu">
    <div class="nav_wrapper">
        <div class="location-and-number d-flex d-lg-none">
            <div class="home-menu__select">
                <i class="marker-icon"></i>
                <select name="slct" id="home-select">
                    <option value="1" hidden><?php the_field('header_dropdown_title', 'option') ?></option>
                    <?php $i = 2; ?>
                    <?php while (have_rows('addresses', 'option')) : the_row(); ?>
                        <option disabled value="<?php echo $i; ?>"><?php the_sub_field('address'); ?></option>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="home-menu__phone-number d-lg-flex">
                <a href="tel:<?php the_field('phone_1', 'option'); ?>3">
                    <i class="home-phone-number"></i>
                    <p><?php the_field('phone_1', 'option'); ?></p>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="w-100">
                <div class="nav_wrapper-menu d-flex align-items-center justify-content-between ">
                    <div class="menu-main w-100">
                        <div class="d-flex w-100 align-items-center justify-content-between menu-main-container" style="position:relative;">
                            <div class="d-flex flex-row align-items-center for-logo-style">
                                <a href="<?php echo home_url('/'); ?>"><img class="brand-style" src="<?php the_field('theme_logo', 'option'); ?>" alt="logo"></a>
                                <div class="home-menu__select d-lg-block d-none">
                                    <i class="marker-icon"></i>
                                    <select name="slct" id="home-select">
                                        <option value="1" hidden><?php the_field('header_dropdown_title', 'option') ?></option>
                                        <?php $i = 2; ?>
                                        <?php while (have_rows('addresses', 'option')) : the_row(); ?>
                                            <option disabled value="<?php echo $i; ?>"><?php the_sub_field('address'); ?></option>
                                            <?php $i++; ?>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>

                            <nav class="navbar navbar-expand-lg navbar-light d-flex align-items-center">
                                <!--                            <a class="navbar-brand" href="#">Navbar</a>-->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <?php
                                wp_nav_menu([
                                    'menu'            => 'Menu 1',
                                    'theme_location'  => 'primary_navigation',
                                    'container'       => 'div',
                                    'container_id'    => 'navbarNavDropdown',
                                    'container_class' => 'collapse navbar-collapse my-nav',
                                    'menu_id'         => false,
                                    'menu_class'      => 'navbar-nav',
                                    'depth'           => 2,
                                    'fallback_cb'     => 'bs4navwalker::fallback',
                                    'walker'          => new bs4navwalker()
                                ]);
                                ?>
                            </nav>

                            <div class="home-menu__phone-number d-lg-flex d-none">
                                <a href="tel:<?php the_field('phone_1', 'option'); ?>">
                                    <i class="home-phone-number"></i>
                                    <p><?php the_field('phone_1', 'option'); ?></p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>