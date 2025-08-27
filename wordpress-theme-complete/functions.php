<?php
/**
 * Waterways Theme Functions
 * 
 * Sets up theme defaults and registers support for various WordPress features.
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function waterways_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'waterways'),
        'mobile'  => esc_html__('Mobile Menu', 'waterways'),
        'footer'  => esc_html__('Footer Menu', 'waterways'),
    ));
}
add_action('after_setup_theme', 'waterways_theme_setup');

/**
 * Enqueue styles and scripts
 */
function waterways_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style('waterways-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue JavaScript
    wp_enqueue_script('waterways-theme', get_template_directory_uri() . '/assets/js/waterways-theme.js', array(), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('waterways-theme', 'waterways_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('waterways_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'waterways_enqueue_assets');

/**
 * Default primary menu fallback
 */
function waterways_default_menu() {
    echo '<nav class="hidden md:flex items-center space-x-0">';
    echo '<a href="' . home_url() . '" class="px-3 py-2 rounded-md text-base font-medium uppercase transition-all duration-300 hover:bg-card hover:text-accent">Home</a>';
    echo '<a href="' . home_url('/tv-show') . '" class="px-3 py-2 rounded-md text-base font-medium uppercase transition-all duration-300 hover:bg-card hover:text-accent text-foreground hover:text-accent">TV Show</a>';
    echo '<a href="' . home_url('/games') . '" class="px-3 py-2 rounded-md text-base font-medium uppercase transition-all duration-300 hover:bg-card hover:text-accent text-foreground hover:text-accent">Games</a>';
    echo '<a href="' . home_url('/graphic-novel') . '" class="px-3 py-2 rounded-md text-base font-medium uppercase transition-all duration-300 hover:bg-card hover:text-accent text-foreground hover:text-accent">Graphic Novel</a>';
    echo '<a href="' . home_url('/lessons') . '" class="px-3 py-2 rounded-md text-base font-medium uppercase transition-all duration-300 hover:bg-card hover:text-accent text-foreground hover:text-accent">Lessons</a>';
    echo '<a href="' . home_url('/about') . '" class="px-3 py-2 rounded-md text-base font-medium uppercase transition-all duration-300 hover:bg-card hover:text-accent text-foreground hover:text-accent">About</a>';
    echo '<a href="' . home_url('/contact') . '" class="px-3 py-2 rounded-md text-base font-medium uppercase transition-all duration-300 hover:bg-card hover:text-accent text-foreground hover:text-accent">Contact</a>';
    echo '</nav>';
}

/**
 * Default mobile menu fallback
 */
function waterways_mobile_menu() {
    echo '<div class="px-4 pt-2 pb-4 space-y-1">';
    echo '<a href="' . home_url() . '" class="block px-3 py-2 rounded-md text-lg font-medium uppercase transition-all duration-300 text-foreground hover:bg-card hover:text-accent">Home</a>';
    echo '<a href="' . home_url('/tv-show') . '" class="block px-3 py-2 rounded-md text-lg font-medium uppercase transition-all duration-300 text-foreground hover:bg-card hover:text-accent">TV Show</a>';
    echo '<a href="' . home_url('/games') . '" class="block px-3 py-2 rounded-md text-lg font-medium uppercase transition-all duration-300 text-foreground hover:bg-card hover:text-accent">Games</a>';
    echo '<a href="' . home_url('/graphic-novel') . '" class="block px-3 py-2 rounded-md text-lg font-medium uppercase transition-all duration-300 text-foreground hover:bg-card hover:text-accent">Graphic Novel</a>';
    echo '<a href="' . home_url('/lessons') . '" class="block px-3 py-2 rounded-md text-lg font-medium uppercase transition-all duration-300 text-foreground hover:bg-card hover:text-accent">Lessons</a>';
    echo '<a href="' . home_url('/about') . '" class="block px-3 py-2 rounded-md text-lg font-medium uppercase transition-all duration-300 text-foreground hover:bg-card hover:text-accent">About</a>';
    echo '<a href="' . home_url('/contact') . '" class="block px-3 py-2 rounded-md text-lg font-medium uppercase transition-all duration-300 text-foreground hover:bg-card hover:text-accent">Contact</a>';
    echo '</div>';
}

/**
 * Footer menu fallback
 */
function waterways_footer_menu() {
    echo '<div class="flex space-x-6 mt-4 sm:mt-0">';
    echo '<a href="' . home_url('/privacy') . '" class="text-muted-foreground hover:text-accent text-sm transition-colors duration-300">Privacy Policy</a>';
    echo '<a href="' . home_url('/terms') . '" class="text-muted-foreground hover:text-accent text-sm transition-colors duration-300">Terms of Service</a>';
    echo '</div>';
}

/**
 * Customizer settings
 */
function waterways_customize_register($wp_customize) {
    // Add Waterways Settings Panel
    $wp_customize->add_panel('waterways_settings', array(
        'title'    => __('Waterways Settings', 'waterways'),
        'priority' => 30,
    ));

    // Contact Section
    $wp_customize->add_section('waterways_contact', array(
        'title' => __('Contact Information', 'waterways'),
        'panel' => 'waterways_settings',
    ));

    // Contact Email
    $wp_customize->add_setting('waterways_contact_email', array(
        'default'           => 'info@waterwaysmiami.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('waterways_contact_email', array(
        'label'   => __('Contact Email', 'waterways'),
        'section' => 'waterways_contact',
        'type'    => 'email',
    ));

    // Contact Phone
    $wp_customize->add_setting('waterways_contact_phone', array(
        'default'           => '+1 (305) 555-0123',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('waterways_contact_phone', array(
        'label'   => __('Contact Phone', 'waterways'),
        'section' => 'waterways_contact',
        'type'    => 'text',
    ));

    // Contact Address
    $wp_customize->add_setting('waterways_contact_address', array(
        'default'           => 'Miami-Dade County, Florida',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('waterways_contact_address', array(
        'label'   => __('Contact Address', 'waterways'),
        'section' => 'waterways_contact',
        'type'    => 'text',
    ));

    // Social Media Section
    $wp_customize->add_section('waterways_social', array(
        'title' => __('Social Media Links', 'waterways'),
        'panel' => 'waterways_settings',
    ));

    // Social Media Links
    $social_networks = array('facebook', 'twitter', 'instagram', 'youtube');
    foreach ($social_networks as $network) {
        $wp_customize->add_setting('waterways_' . $network, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control('waterways_' . $network, array(
            'label'   => sprintf(__('%s URL', 'waterways'), ucfirst($network)),
            'section' => 'waterways_social',
            'type'    => 'url',
        ));
    }

    // Footer Description
    $wp_customize->add_setting('waterways_footer_description', array(
        'default'           => 'A revolutionary sci-fi series set in a fictional Florida K-12 school, seamlessly integrating entertainment with STEM education.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('waterways_footer_description', array(
        'label'   => __('Footer Description', 'waterways'),
        'section' => 'waterways_social',
        'type'    => 'textarea',
    ));
}
add_action('customize_register', 'waterways_customize_register');

/**
 * Widget Areas
 */
function waterways_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Main Sidebar', 'waterways'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'waterways'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widgets', 'waterways'),
        'id'            => 'footer-widgets',
        'description'   => esc_html__('Add widgets to the footer area.', 'waterways'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'waterways_widgets_init');

/**
 * Custom Post Types
 */
function waterways_custom_post_types() {
    // TV Episodes
    register_post_type('tv_episode', array(
        'labels' => array(
            'name'          => 'TV Episodes',
            'singular_name' => 'TV Episode',
        ),
        'public'        => true,
        'has_archive'   => true,
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'     => 'dashicons-video-alt3',
        'rewrite'       => array('slug' => 'episodes'),
    ));

    // Game Modules
    register_post_type('game_module', array(
        'labels' => array(
            'name'          => 'Game Modules',
            'singular_name' => 'Game Module',
        ),
        'public'        => true,
        'has_archive'   => true,
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'     => 'dashicons-games',
        'rewrite'       => array('slug' => 'game-modules'),
    ));

    // Lesson Plans
    register_post_type('lesson_plan', array(
        'labels' => array(
            'name'          => 'Lesson Plans',
            'singular_name' => 'Lesson Plan',
        ),
        'public'        => true,
        'has_archive'   => true,
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'     => 'dashicons-welcome-learn-more',
        'rewrite'       => array('slug' => 'lesson-plans'),
    ));
}
add_action('init', 'waterways_custom_post_types');

/**
 * Add SEO meta tags
 */
function waterways_add_seo_meta() {
    if (is_single()) {
        global $post;
        if ($post->post_excerpt) {
            echo '<meta name="description" content="' . esc_attr(wp_strip_all_tags($post->post_excerpt)) . '" />' . "\n";
        }
    }
}
add_action('wp_head', 'waterways_add_seo_meta');

/**
 * Custom image sizes
 */
function waterways_image_sizes() {
    add_image_size('hero-image', 1920, 1080, true);
    add_image_size('card-image', 600, 400, true);
    add_image_size('thumbnail-large', 300, 300, true);
}
add_action('after_setup_theme', 'waterways_image_sizes');

/**
 * Contact form handler
 */
function waterways_handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'waterways_nonce')) {
        wp_die('Security check failed');
    }

    // Sanitize form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Send email
    $to = get_theme_mod('waterways_contact_email', 'info@waterwaysmiami.com');
    $subject = 'New Contact Form Submission from ' . $name;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    if (wp_mail($to, $subject, $body, $headers)) {
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    }
    exit;
}
add_action('wp_ajax_waterways_contact_form', 'waterways_handle_contact_form');
add_action('wp_ajax_nopriv_waterways_contact_form', 'waterways_handle_contact_form');

/**
 * Get hero image for pages
 */
function waterways_get_hero_image($page_slug) {
    $images = array(
        'tv-show' => 'tv-show-hero.jpg',
        'games' => 'games-hero.jpg',
        'graphic-novel' => 'graphic-novel-hero.jpg',
        'lessons' => 'lessons-hero.jpg',
    );
    
    if (isset($images[$page_slug])) {
        return get_template_directory_uri() . '/assets/images/' . $images[$page_slug];
    }
    
    return get_template_directory_uri() . '/assets/images/hero-background.jpg';
}

/**
 * Custom walker for navigation menus
 */
class Waterways_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        
        $active_class = '';
        if (in_array('current-menu-item', $classes)) {
            $active_class = 'bg-primary text-primary-foreground shadow-[var(--shadow-glow)]';
        }

        $output .= '<a href="' . esc_url($item->url) . '" class="px-3 py-2 rounded-md text-base font-medium uppercase transition-all duration-300 hover:bg-card hover:text-accent ' . $active_class . ' text-foreground hover:text-accent">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
}

/**
 * Helper function to get customizer values
 */
function waterways_get_option($option_name, $default = '') {
    return get_theme_mod($option_name, $default);
}