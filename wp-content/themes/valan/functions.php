<?php
require_once('inc/init-posts.php');

function my_theme_setup() {
    register_nav_menus([
        'main-menu' => __('Main Menu')
    ]);
}
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '1.2');
    wp_enqueue_script('main', get_template_directory_uri() . "/script.js", array(), '1.2',  true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

add_filter( 'show_admin_bar', '__return_false' );

function create_custom_post_types() {
    register_post_type('services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-hammer',
    ));

    register_post_type('products', array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-cart',
    ));
}
add_action('init', 'create_custom_post_types');


if (function_exists('get_field')) {
    $service_image = get_field('service_image'); 
    $service_date = get_field('service_date');  

    if ($service_image) {
        echo '<img src="' . esc_url($service_image['url']) . '" alt="' . esc_attr($service_image['alt']) . '" />';
    }

    if ($service_date) {
        echo '<p>Service Date: ' . esc_html($service_date) . '</p>';
    }
} else {
    echo 'Please install and activate the Advanced Custom Fields plugin to display this content.';
}