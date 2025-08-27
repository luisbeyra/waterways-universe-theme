<?php
/**
 * Waterways Theme Functions
 * 
 * Main functions file for the Waterways WordPress theme.
 * Contains theme setup, enqueue scripts/styles, and custom functions.
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function waterways_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'waterways'),
        'mobile' => __('Mobile Navigation', 'waterways'),
        'footer' => __('Footer Navigation', 'waterways'),
    ));
    
    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'waterways_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function waterways_enqueue_assets() {
    // Main theme stylesheet
    wp_enqueue_style(
        'waterways-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
    
    // Theme JavaScript
    wp_enqueue_script(
        'waterways-scripts',
        get_template_directory_uri() . '/assets/js/waterways-theme.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('waterways-scripts', 'waterways_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('waterways_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'waterways_enqueue_assets');

/**
 * Default Primary Menu Fallback
 */
function waterways_default_menu() {
    echo '<ul class="nav-menu flex space-x-1">';
    echo '<li><a href="' . home_url() . '" class="px-4 py-2 rounded-md text-sm font-medium transition-colors hover:bg-card hover:text-accent">Home</a></li>';
    echo '<li><a href="' . home_url('/tv-show') . '" class="px-4 py-2 rounded-md text-sm font-medium transition-colors hover:bg-card hover:text-accent">TV Show</a></li>';
    echo '<li><a href="' . home_url('/games') . '" class="px-4 py-2 rounded-md text-sm font-medium transition-colors hover:bg-card hover:text-accent">Games</a></li>';
    echo '<li><a href="' . home_url('/graphic-novel') . '" class="px-4 py-2 rounded-md text-sm font-medium transition-colors hover:bg-card hover:text-accent">Graphic Novel</a></li>';
    echo '<li><a href="' . home_url('/lessons') . '" class="px-4 py-2 rounded-md text-sm font-medium transition-colors hover:bg-card hover:text-accent">Lessons</a></li>';
    echo '<li><a href="' . home_url('/about') . '" class="px-4 py-2 rounded-md text-sm font-medium transition-colors hover:bg-card hover:text-accent">About</a></li>';
    echo '<li><a href="' . home_url('/contact') . '" class="px-4 py-2 rounded-md text-sm font-medium transition-colors hover:bg-card hover:text-accent">Contact</a></li>';
    echo '</ul>';
}

/**
 * Mobile Menu Fallback
 */
function waterways_mobile_menu() {
    echo '<div class="mobile-nav-menu">';
    echo '<a href="' . home_url() . '" class="block px-3 py-2 rounded-md text-base font-medium text-foreground hover:bg-card hover:text-accent">Home</a>';
    echo '<a href="' . home_url('/tv-show') . '" class="block px-3 py-2 rounded-md text-base font-medium text-foreground hover:bg-card hover:text-accent">TV Show</a>';
    echo '<a href="' . home_url('/games') . '" class="block px-3 py-2 rounded-md text-base font-medium text-foreground hover:bg-card hover:text-accent">Games</a>';
    echo '<a href="' . home_url('/graphic-novel') . '" class="block px-3 py-2 rounded-md text-base font-medium text-foreground hover:bg-card hover:text-accent">Graphic Novel</a>';
    echo '<a href="' . home_url('/lessons') . '" class="block px-3 py-2 rounded-md text-base font-medium text-foreground hover:bg-card hover:text-accent">Lessons</a>';
    echo '<a href="' . home_url('/about') . '" class="block px-3 py-2 rounded-md text-base font-medium text-foreground hover:bg-card hover:text-accent">About</a>';
    echo '<a href="' . home_url('/contact') . '" class="block px-3 py-2 rounded-md text-base font-medium text-foreground hover:bg-card hover:text-accent">Contact</a>';
    echo '</div>';
}

/**
 * Footer Menu Fallback
 */
function waterways_footer_menu() {
    echo '<ul class="footer-menu space-y-2">';
    echo '<li><a href="' . home_url('/tv-show') . '" class="text-muted-foreground hover:text-accent transition-colors duration-300 text-sm">TV Show</a></li>';
    echo '<li><a href="' . home_url('/games') . '" class="text-muted-foreground hover:text-accent transition-colors duration-300 text-sm">Games</a></li>';
    echo '<li><a href="' . home_url('/graphic-novel') . '" class="text-muted-foreground hover:text-accent transition-colors duration-300 text-sm">Graphic Novel</a></li>';
    echo '<li><a href="' . home_url('/lessons') . '" class="text-muted-foreground hover:text-accent transition-colors duration-300 text-sm">Lessons</a></li>';
    echo '</ul>';
}

/**
 * Customizer Settings
 */
function waterways_customize_register($wp_customize) {
    // Add Waterways Panel
    $wp_customize->add_panel('waterways_panel', array(
        'title' => __('Waterways Settings', 'waterways'),
        'priority' => 30,
    ));
    
    // Contact Section
    $wp_customize->add_section('waterways_contact', array(
        'title' => __('Contact Information', 'waterways'),
        'panel' => 'waterways_panel',
    ));
    
    // Contact Email
    $wp_customize->add_setting('contact_email', array(
        'default' => 'info@waterwaysmiami.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_email', array(
        'label' => __('Contact Email', 'waterways'),
        'section' => 'waterways_contact',
        'type' => 'email',
    ));
    
    // Contact Phone
    $wp_customize->add_setting('contact_phone', array(
        'default' => '+1 (305) 555-0123',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_phone', array(
        'label' => __('Contact Phone', 'waterways'),
        'section' => 'waterways_contact',
        'type' => 'text',
    ));
    
    // Contact Location
    $wp_customize->add_setting('contact_location', array(
        'default' => 'Miami-Dade County, Florida',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_location', array(
        'label' => __('Contact Location', 'waterways'),
        'section' => 'waterways_contact',
        'type' => 'text',
    ));
    
    // Social Media Section
    $wp_customize->add_section('waterways_social', array(
        'title' => __('Social Media Links', 'waterways'),
        'panel' => 'waterways_panel',
    ));
    
    // Social media settings
    $social_platforms = array(
        'facebook' => 'Facebook URL',
        'twitter' => 'Twitter URL', 
        'instagram' => 'Instagram URL',
        'youtube' => 'YouTube URL'
    );
    
    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting($platform . '_url', array(
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control($platform . '_url', array(
            'label' => __($label, 'waterways'),
            'section' => 'waterways_social',
            'type' => 'url',
        ));
    }
    
    // Footer Description
    $wp_customize->add_setting('footer_description', array(
        'default' => 'A revolutionary sci-fi series set in a fictional Florida K-12 school, seamlessly integrating entertainment with STEM education.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('footer_description', array(
        'label' => __('Footer Description', 'waterways'),
        'section' => 'waterways_contact',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'waterways_customize_register');

/**
 * Widget Areas
 */
function waterways_widgets_init() {
    register_sidebar(array(
        'name' => __('Main Sidebar', 'waterways'),
        'id' => 'main-sidebar',
        'description' => __('Main sidebar for blog posts and pages', 'waterways'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer Widgets', 'waterways'),
        'id' => 'footer-widgets',
        'description' => __('Widget area for footer', 'waterways'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-widget-title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'waterways_widgets_init');

/**
 * Custom Post Types
 */
function waterways_custom_post_types() {
    // TV Episodes Post Type
    register_post_type('tv_episode', array(
        'labels' => array(
            'name' => __('TV Episodes', 'waterways'),
            'singular_name' => __('TV Episode', 'waterways'),
            'add_new_item' => __('Add New Episode', 'waterways'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-video-alt3',
        'rewrite' => array('slug' => 'episodes'),
    ));
    
    // Game Modules Post Type
    register_post_type('game_module', array(
        'labels' => array(
            'name' => __('Game Modules', 'waterways'),
            'singular_name' => __('Game Module', 'waterways'),
            'add_new_item' => __('Add New Game Module', 'waterways'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-games',
        'rewrite' => array('slug' => 'game-modules'),
    ));
    
    // Lesson Plans Post Type
    register_post_type('lesson_plan', array(
        'labels' => array(
            'name' => __('Lesson Plans', 'waterways'),
            'singular_name' => __('Lesson Plan', 'waterways'),
            'add_new_item' => __('Add New Lesson Plan', 'waterways'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-welcome-learn-more',
        'rewrite' => array('slug' => 'lesson-plans'),
    ));
}
add_action('init', 'waterways_custom_post_types');

/**
 * Add SEO Meta Tags
 */
function waterways_add_seo_meta() {
    if (is_singular()) {
        global $post;
        if ($post) {
            $excerpt = get_the_excerpt($post);
            if ($excerpt) {
                echo '<meta name="description" content="' . esc_attr($excerpt) . '">' . "\n";
            }
        }
    }
}
add_action('wp_head', 'waterways_add_seo_meta');

/**
 * Optimize Images
 */
function waterways_image_sizes() {
    add_image_size('hero-image', 1920, 1080, true);
    add_image_size('card-image', 400, 300, true);
    add_image_size('thumbnail-large', 300, 300, true);
}
add_action('after_setup_theme', 'waterways_image_sizes');

/**
 * Contact Form Handler
 */
function waterways_handle_contact_form() {
    if (!wp_verify_nonce($_POST['waterways_nonce'], 'waterways_contact_form')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['contact_name']);
    $email = sanitize_email($_POST['contact_email']);
    $subject = sanitize_text_field($_POST['contact_subject']);
    $message = sanitize_textarea_field($_POST['contact_message']);
    
    // Send email
    $to = get_theme_mod('contact_email', 'info@waterwaysmiami.com');
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $email_subject = 'Contact Form: ' . $subject;
    $email_body = '<p><strong>Name:</strong> ' . $name . '</p>';
    $email_body .= '<p><strong>Email:</strong> ' . $email . '</p>';
    $email_body .= '<p><strong>Message:</strong></p>';
    $email_body .= '<p>' . nl2br($message) . '</p>';
    
    if (wp_mail($to, $email_subject, $email_body, $headers)) {
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    }
    exit;
}
add_action('wp_ajax_waterways_contact_form', 'waterways_handle_contact_form');
add_action('wp_ajax_nopriv_waterways_contact_form', 'waterways_handle_contact_form');
?>