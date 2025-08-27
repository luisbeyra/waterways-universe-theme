<?php
/**
 * Waterways functions and definitions
 */

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

function waterways_setup() {
    // Theme support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'menu-1' => __('Primary', 'waterways'),
    ));
}
add_action('after_setup_theme', 'waterways_setup');

// Enqueue scripts and styles
function waterways_scripts() {
    wp_enqueue_style('waterways-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_script('waterways-navigation', get_theme_file_uri('/assets/js/waterways-theme.js'), array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'waterways_scripts');

// Fallback menu for when no menu is set
function waterways_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . home_url('/') . '">Home</a></li>';
    echo '<li><a href="' . home_url('/tv-show') . '">TV Show</a></li>';
    echo '<li><a href="' . home_url('/games') . '">Games</a></li>';
    echo '<li><a href="' . home_url('/graphic-novel') . '">Graphic Novel</a></li>';
    echo '<li><a href="' . home_url('/lessons') . '">Lessons</a></li>';
    echo '<li><a href="' . home_url('/about') . '">About</a></li>';
    echo '<li><a href="' . home_url('/contact') . '">Contact</a></li>';
    echo '</ul>';
}