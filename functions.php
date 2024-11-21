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


// footer functions
function reg_menus(){
    register_nav_menus( 
        array(
            'Footer_Nav' => __('footer nav'),
            'Footer_Nav_2' => __('footer nav 2'),
            'Footer_Nav_3' => __('footer nav 3'),
        )
        );
};
add_action('init', 'reg_menus');

// sidebar function
function new_sidebar(){
    register_sidebar(
        array(
            'id' => 'my_sidebar',
            'name' => 'new_sidebar',
            'description' => 'See! new sidebar!',
            'before_widget' => '<div id="%1$s" class="widget-%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget_title">',
            'after_title' => '</h3>'
        )
        );
};
add_action('widgets_init', 'new_sidebar');