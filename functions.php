
<?php


function mambo_setup()
{

    add_theme_support('custom-logo', array(
        'height' => 90,
        'width' => 250,
        'flex-height' => false,
        'flex-width' => false
    ));

    add_image_size('post', 420, 300, true);

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mambo_setup');


// Registrar scripts

function mambo_styles()
{

    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_register_style('bootstrapCSS', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0.0');
    // wp_register_style('FluidBoxCss', get_template_directory_uri(). '/css/fluidbox.min.css', array('normalize'), '1.0.0');
    wp_register_style('FontAwesomeCSS', get_template_directory_uri() . '/css/all.min.css', array('normalize'), '5.8.0');


    // wp_register_script('FluidBox', get_template_directory_uri(). '/js/jquery.fluidbox.min.js', array(), '1.0.0', true);
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
    wp_register_script('bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.0', true);
    wp_register_script('popperJS', get_template_directory_uri() . '/js/popper.min.js', array(), '5.0', true);
    wp_register_script('FontAwesomeJS', get_template_directory_uri() . '/js/all.min.js', array(), '5.8.0', true);

    // wp_enqueue_style('FluidBoxCss');
    wp_enqueue_style('style');
    wp_enqueue_style('normalize');
    wp_enqueue_style('bootstrapCSS');
    wp_enqueue_style('FontAwesomeCSS');

    wp_enqueue_script('scripts');
    wp_enqueue_script('jquery');
    wp_enqueue_script('FontAwesomeJS');
    wp_enqueue_script('bootstrapJS');
    wp_enqueue_script('popperJS');
    
    // wp_enqueue_script('FluidBox');

}
add_action('wp_enqueue_scripts', 'mambo_styles');


function register_my_menu()
{

    register_nav_menu('footer-menu', __('Footer Menu', 'mambocafeteria'));
}
add_action('after_setup_theme', 'register_my_menu');

// Registar widget

function mambocafeteria_register_widgets()
{

    register_sidebar(array(

        'name' => 'Footer-1',
        'id' => 'footer-1',
        'before_widget' => '<section class="widget-footer">',
        'after_widget' => '</section>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(

        'name' => 'Footer-2',
        'id' => 'footer-2',
        'before_widget' => '<section class="widget-footer">',
        'after_widget' => '</section>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(

        'name' => 'Footer-3',
        'id' => 'footer-3',
        'before_widget' => '<section class="widget-footer">',
        'after_widget' => '</section>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(

        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'before_widget' => '<section class="sidebar">',
        'after_widget' => '</section>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'mambocafeteria_register_widgets');
