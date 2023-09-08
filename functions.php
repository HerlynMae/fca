<?php
function fca_assets(){
    // wp_enqueue_style -> load your css assets 
    wp_enqueue_style('fca-style', get_template_directory_uri() . "./css/output.css", microtime());
    wp_enqueue_style('fca-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", 1.0);

    // wp_enqueue_script -> load your JS assets
    wp_enqueue_script('fca-script', get_template_directory_uri() . "/script/script.js",  true );
   

}
// Hook that will run this function    
add_action('wp_enqueue_scripts', 'fca_assets');



add_action('init', 'services_custom_post');
function services_custom_post(){
    $service_label = array(
        'name'     => __('Services', 'textdomain'),
        'singular_name' => __('Service', 'textdomain'),
        'add_new'    => __('Add Service', 'textdomain'),
        'edit_item'   => __('Edit Service', 'textdomain'),
        'add_new_item' => __('Add New Service', 'textdomain'),
        'all_items'   => __('Services', 'textdomain'),
    );

    $services_args = array(
        'labels' => $service_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail', )
    );


    register_post_type('services', $services_args);

}

add_action('init', 'faqs_custom_post');
function faqs_custom_post(){
    $faq_label = array(
        'name'     => __('faqs', 'textdomain'),
        'singular_name' => __('faq', 'textdomain'),
        'add_new'    => __('Add faq', 'textdomain'),
        'edit_item'   => __('Edit faq', 'textdomain'),
        'add_new_item' => __('Add New faq', 'textdomain'),
        'all_items'   => __('faqs', 'textdomain'),
    );

    $faqs_args = array(
        'labels' => $faq_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail', )
    );


    register_post_type('faqs', $faqs_args);

}
        
function fca_support(){
    add_theme_support('post-thumbnails'); // add featured Image 
    add_theme_support('menus'); // add menus
    add_theme_support('title'); // add page title
    add_theme_support('custom-logo'); // add custom logo 
    
    add_image_size('banner-sm', 220, 150, true ); // create custom post thumbnail size

    register_nav_menu( 'header_menu', 'Header Menu'); // create a nav locations
    register_nav_menu( 'footer_menu', 'Footer Menu');
}

add_action('after_setup_theme', 'fca_support');



