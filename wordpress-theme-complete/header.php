<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Waterways - A revolutionary sci-fi series set in a fictional Florida K-12 school, seamlessly integrating entertainment with STEM education.">
    <meta name="keywords" content="STEM education, sci-fi series, Florida, educational, waterways">
    <meta name="author" content="Waterways Miami">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="header-container">
            <!-- Logo -->
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png" 
                         alt="<?php bloginfo('name'); ?>" 
                         class="header-logo">
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>

            <!-- Navigation Menu -->
            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'nav-menu',
                    'fallback_cb'    => 'waterways_fallback_menu',
                ));
                ?>
            </nav>

            <!-- Watch Trailer Button -->
            <div class="header-cta">
                <a href="#" class="btn-trailer">Watch Trailer</a>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">