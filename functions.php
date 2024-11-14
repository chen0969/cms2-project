<?php // wp_enqueue_style is a function that allows you to add a stylesheet to your WordPress site
function primary_stylesheet()
{
    wp_enqueue_style(
        'chicago_tourism_stylesheet', //name of your stylesheet
        get_stylesheet_uri(), //use to get the URL of the current theme's stylesheet
        array(), //depedencies, none here
        wp_get_theme()->get('version'), //used for cache busting
        'all' //media type, 'all' is the most common value, it means that the stylesheet is applicable to all media types
    );
}
// Add_action is a hook that allows you to add a function to a specific point in the execution of WordPress
add_action('wp_enqueue_scripts', 'primary_stylesheet', 5);

// Add theme support for Elementor
function add_elementor_theme_support() {
    add_theme_support('elementor');
    add_theme_support('elementor-experiments');
}
add_action('after_setup_theme', 'add_elementor_theme_support');

function load_ele(){
    wp_enqueue_style(
        'ele-8',
        get_theme_file_uri('../wp-content/uploads/elementor/css/post-8.css')
    );
}
add_action('wp_enqueue_scripts', 'ele-8');

function load_bootstrap()
{
    wp_enqueue_style(
        'bootstrap-css',
        get_theme_file_uri('assets/media/bootstrap-5.3.3-dist/css/bootstrap.min.css')
    );
    wp_enqueue_script(
        'bootstrap-js',
        get_theme_file_uri('assets/media/bootstrap-5.3.3-dist/js/bootstrap.js'),
        array('jquery'),
        '',
        true
    );
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

// carousel function
function load_carousel()
{
    wp_enqueue_script(
        'carousel-js',
        get_theme_file_uri('assets/media/front-carousel.js'),
        array('jquery'),
        '',
        true
    );
}
add_action('wp_enqueue_scripts', 'load_carousel');
