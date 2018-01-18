<?php
/**
 * Define constants
 */
define('IMG', get_theme_file_uri() . '/assets/images');
define('CSS', get_theme_file_uri() . '/assets/css');
define('JS', get_theme_file_uri() . '/assets/js');

/**
 * Filters
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Enqueue scripts and styles
 */

function dominicarrojado_scripts() {
    wp_enqueue_style('dominicarrojado-style', get_stylesheet_uri());

    wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), null);
    wp_enqueue_style('font-awesome', get_theme_file_uri('/assets/css/font-awesome.min.css'), array(), null);
    wp_enqueue_style('main', get_theme_file_uri('/assets/css/main.min.css'), array(), null);

    wp_enqueue_script('popper', get_theme_file_uri('/assets/js/popper.min.js'), array('jquery'), '1.3.3', true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery', 'popper'), '4.0.0', true);
    wp_enqueue_script('main', get_theme_file_uri('/assets/js/main.min.js'), array('jquery'), null, true);
}
add_action( 'wp_enqueue_scripts', 'dominicarrojado_scripts' );