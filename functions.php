<?php


// Load Javascript and CSS

function load_css_and_js() {

    wp_enqueue_script('jquery');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), NULL, 'all');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), NULL, true);
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'), NULL, true);
    wp_enqueue_style('maincss', get_template_directory_uri() . '/css/main.css', array(), NULL, 'all');

}
add_action('wp_enqueue_scripts', 'load_css_and_js');



// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('posts-formats');
add_theme_support(array('aside', 'gallery'));
add_action( 'after_setup_theme', 'themename_post_formats_setup' );


// Menus

register_nav_menus(

    array(

        'main-menu' => "Main menu",
        'alt-menu' => "Alternative menu",
        'mobile-menu' => "Mobile menu"

    )

);
