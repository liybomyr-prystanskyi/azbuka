<?php

// Include custom navwalker
require_once('bs4navwalker.php');

// theme setup
add_action('after_setup_theme', 'azbukasvitu_setup');
function azbukasvitu_setup()
{

    add_theme_support('custom-logo', array(
        'flex-height' => true,
        'flex-width' => true,
    ));

    /**
     * Enable plugins to manage the document title
     * http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
     **/
    add_theme_support('title-tag');

    /**
     * Register wp_nav_menu() menus
     * http://codex.wordpress.org/Function_Reference/register_nav_menus
     **/
    register_nav_menus([
        'primary_navigation' => 'Primary Navigation',
        'footer_navigation' => 'Footer Navigation'
    ]);

    /**
     * Enable post thumbnails
     * http://codex.wordpress.org/Post_Thumbnails
     * http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
     * http://codex.wordpress.org/Function_Reference/add_image_size
     **/
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
     **/
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);
}


/**
 * Allow SVG through WordPress Media Uploader
 **/
add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

// Enqueue scripts and styles.
add_action('wp_enqueue_scripts', 'azbukasvitu_scripts');
function azbukasvitu_scripts()
{
    // Add custom fonts, used in the main stylesheet.
    //    wp_enqueue_style( 'luxeacademy-fonts', luxeacademy_fonts_url(), array(), null );
    //comment reply link
    // Theme stylesheet
    $path = get_template_directory_uri() . '/html_template/build/assets/';//local path to directory with styles and scripts
    wp_enqueue_style('azbukasvitu-bootstrap-css', $path . 'css/vendors/bootstrap.min.css', '', false, 'all');
    wp_enqueue_style('azbukasvitu-aos-css', $path . 'css/vendors/aos.css', 'azbukasvitu-bootstrap-css', false, 'all');
    wp_enqueue_style('azbukasvitu-fonts-css', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', 'azbukasvitu-aos-css', false, 'all');
    wp_enqueue_style('azbukasvitu-slick-css', $path . 'css/vendors/slick.css', 'azbukasvitu-fonts-css', false, 'all');
    wp_enqueue_style('azbukasvitu-slick-theme-css', $path . 'css/vendors/slick-theme.css', 'azbukasvitu-slick-css', false, 'all');
    wp_enqueue_style('azbukasvitu-nice-select', $path . 'css/vendors/nice-select.css', 'azbukasvitu-ionicons-css', false, 'all');
    wp_enqueue_style('azbukasvitu-style', $path . 'css/style.min.css', 'azbukasvitu-nice-select', false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), 'azbukasvitu-style', '1.0.2');
    // Load the html5 shiv.
    //    wp_enqueue_script( 'html5', get_theme_file_uri( '/js/html5.js' ), array(), '3.7.3' );
    //    wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

    wp_enqueue_script('azbukasvitu-jquery-js', $path . 'js/vendors/jquery-3.3.1.js', array(), false, true);
    wp_enqueue_script('azbukasvitu-slick-js', $path . 'js/vendors/slick.min.js', 'azbukasvitu-jquery-js', false, true);
    wp_enqueue_script('azbukasvitu-aos-js', $path . 'js/vendors/aos.js', 'azbukasvitu-slick-js', false, true);
    wp_enqueue_script('azbukasvitu-bootstrap-js', $path . 'js/vendors/bootstrap.js', 'azbukasvitu-aos-js', false, true);
    wp_enqueue_script('azbukasvitu-nice-select-js', $path . 'js/vendors/nice-select.js', 'azbukasvitu-aos-js', false, true);
    wp_enqueue_script('azbukasvitu-general-js', $path . 'js/script.min.js', 'azbukasvitu-nice-select-js', false, true);
    wp_enqueue_script('azbukasvitu-custom-js', get_template_directory_uri() . '/custom.js', 'azbukasvitu-general-js', false, true);
    //    wp_register_script( 'azbukasvitu-js', $path . '/js/script.js' , 'azbukasvitu-general-js', false, true );

    $ajax_url = admin_url('admin-ajax.php');
    //    wp_localize_script( 'luxeacademy-js', 'ajax_url', $ajax_url);
    wp_localize_script('azbukasvitu-js', 'wpData', array(
        'ajax_url' => $ajax_url,
        'html_template_directory' => get_template_directory_uri() . '/html_template/build/'
    ));
    wp_enqueue_script('azbukasvitu-js');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page([
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Repeating blocks',
        'menu_title' => 'Repeating blocks',
        'parent_slug' => 'theme-general-settings',
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Homepage blocks',
        'menu_title' => 'Homepage blocks',
        'parent_slug' => 'theme-general-settings',
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Contact Page Options',
        'menu_title' => 'Contact Page Options',
        'parent_slug' => 'theme-general-settings',
    ]);

    acf_add_options_page([
        'page_title' => 'Courses Common Settings',
        'menu_title' => 'Courses Common Settings',
        'menu_slug' => 'courses-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ]);

}

// Add Certificates Post type
add_action('init', 'azb_register_cpt');
function azb_register_cpt()
{
    register_post_type('certificates', [
        'labels' => [
            'name' => 'Сертифікати', // Основное название типа записи
            'singular_name' => 'Сертифікат', // отдельное название записи типа Book
            'add_new' => 'Додати новий',
            'add_new_item' => 'Додати новий сертифікат',
            'edit_item' => 'Редагувати сертифікат',
            'new_item' => 'Новий сертифікат',
            'view_item' => 'Подивитись сертифікат',
            'search_items' => 'Знайти сертифікат',
            'not_found' => 'Сертифікатів не знайдено',
            'not_found_in_trash' => 'В корзині сертифікатів не знайдено',
            'parent_item_colon' => '',
            'menu_name' => 'Сертифікати'
        ],
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-awards',
        'supports' => array('title', 'thumbnail', 'editor')
    ]);


    register_post_type('reviews', [
        'labels' => [
            'name' => 'Відгуки', // Основное название типа записи
            'singular_name' => 'Відгук', // отдельное название записи типа Book
            'add_new' => 'Додати новий',
            'add_new_item' => 'Додати новий відгук',
            'edit_item' => 'Редагувати відгук',
            'new_item' => 'Новий відгук',
            'view_item' => 'Подивитись відгук',
            'search_items' => 'Знайти відгук',
            'not_found' => 'Відгуків не знайдено',
            'not_found_in_trash' => 'В корзині відгуків не знайдено',
            'parent_item_colon' => '',
            'menu_name' => 'Відгуки'
        ],
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array('title', 'thumbnail', 'editor')
    ]);


    register_post_type('courses', [
        'labels' => [
            'name' => 'Мовні Курси', // Основное название типа записи
            'singular_name' => 'Курс', // отдельное название записи
            'add_new' => 'Додати новий',
            'add_new_item' => 'Додати новий курс',
            'edit_item' => 'Редагувати курс',
            'new_item' => 'Новий курс',
            'view_item' => 'Подивитись курс',
            'search_items' => 'Знайти курс',
            'not_found' => 'Курсів не знайдено',
            'not_found_in_trash' => 'В корзині курсів не знайдено',
            'parent_item_colon' => '',
            'menu_name' => 'Курси'
        ],
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-book-alt',
        'supports' => array('title', 'thumbnail')
    ]);

    register_post_type('teachers', [
        'labels' => [
            'name' => 'Викладачі', // Основное название типа записи
            'singular_name' => 'Викладач', // отдельное название записи
            'add_new' => 'Додати нового',
            'add_new_item' => 'Додати нового викладача',
            'edit_item' => 'Редагувати викладача',
            'new_item' => 'Новий викладач',
            'view_item' => 'Подивитись викладача',
            'search_items' => 'Знайти викладача',
            'not_found' => 'Викладачів не знайдено',
            'not_found_in_trash' => 'В корзині викладачів не знайдено',
            'parent_item_colon' => '',
            'menu_name' => 'Викладачі'
        ],
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-id-alt',
        'supports' => array('title', 'thumbnail')
    ]);

    register_post_type('faq', [
        'labels' => [
            'name' => 'F.A.Q.', // Основное название типа записи
            'singular_name' => 'Питання', // отдельное название записи
            'add_new' => 'Додати нове питання',
            'add_new_item' => 'Додати нове питання',
            'edit_item' => 'Редагувати питання',
            'new_item' => 'Нове питання',
            'view_item' => 'Подивитись питання',
            'search_items' => 'Знайти питання',
            'not_found' => 'Питань не знайдено',
            'not_found_in_trash' => 'В корзині питань не знайдено',
            'parent_item_colon' => '',
            'menu_name' => 'F.A.Q.'
        ],
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array('title', 'editor')
    ]);
}

add_action('init', 'azb_register_taxonomies');
function azb_register_taxonomies()
{
    register_taxonomy('teachers_language', array('teachers'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Мови', 'taxonomy general name'),
            'singular_name' => _x('Мова', 'taxonomy singular name'),
            'search_items' => __('Знайти мови'),
            'all_items' => __('Усі мови'),
            'parent_item' => __('Батьківська мова'),
            'parent_item_colon' => __('Батьківська мова:'),
            'edit_item' => __('Редагувати мову'),
            'update_item' => __('Оновити мову'),
            'add_new_item' => __('Додати нову мову'),
            'new_item_name' => __('Назва нової мови'),
            'menu_name' => __('Мови'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'language'), // свой слаг в URL
    ));

    register_taxonomy('course_categories', array('courses'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Категорії курсів', 'taxonomy general name'),
            'singular_name' => _x('Категорія', 'taxonomy singular name'),
            'search_items' => __('Знайти категорію'),
            'all_items' => __('Усі категорії'),
            'parent_item' => __('Батьківська категорія'),
            'parent_item_colon' => __('Батьківська категорія:'),
            'edit_item' => __('Редагувати категорію'),
            'update_item' => __('Оновити категорію'),
            'add_new_item' => __('Додати нову категорію'),
            'new_item_name' => __('Назва нової категорії'),
            'menu_name' => __('Категорії'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'course_category'), // свой слаг в URL
    ));
}

function my_acf_init()
{
    acf_update_setting('google_api_key', 'AIzaSyDoLs4jh4_7ZW16LDVDAXDPGISWv9RN-x8');
}

add_action('acf/init', 'my_acf_init');
