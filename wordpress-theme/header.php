<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <!-- Waterways SEO Meta Tags -->
    <meta name="keywords" content="waterways, STEM education, Florida, mangrove ecosystem, educational TV series, science fiction">
    <meta name="author" content="Waterways Miami">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-og-image.jpg">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-og-image.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo get_permalink(); ?>">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/waterways-theme.css" as="style">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/images/WaterWays-Logo-Web.png" as="image">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Navigation Header -->
    <header id="site-header" class="site-header fixed top-0 w-full z-50 bg-background/95 backdrop-blur-md border-b border-border">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="site-branding">
                    <a href="<?php echo home_url(); ?>" class="flex items-center space-x-2 group">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/WaterWays-Logo-Web.png" 
                            alt="<?php bloginfo('name'); ?> Logo" 
                            class="h-8 w-auto transition-all duration-300 group-hover:scale-105"
                            width="auto" 
                            height="32"
                        >
                        <span class="text-xl font-bold bg-gradient-ocean bg-clip-text text-transparent">
                            <?php bloginfo('name'); ?>
                        </span>
                    </a>
                </div>

                <!-- Main Navigation -->
                <nav id="main-navigation" class="main-navigation hidden md:flex items-center space-x-1">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'nav-menu flex space-x-1',
                        'container' => false,
                        'fallback_cb' => 'waterways_default_menu',
                    ));
                    ?>
                </nav>

                <!-- CTA Button -->
                <div class="header-cta hidden md:block">
                    <a href="/tv-show" class="btn btn-primary bg-gradient-ocean hover:shadow-glow transition-all duration-300 px-6 py-2 rounded-md text-white font-medium">
                        Watch Trailer
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-toggle" class="mobile-menu-toggle md:hidden text-foreground hover:text-accent">
                    <span class="sr-only">Toggle Menu</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="mobile-menu md:hidden bg-background/98 backdrop-blur-md border-t border-border hidden">
                <div class="px-4 pt-2 pb-4 space-y-1">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'mobile',
                        'menu_class' => 'mobile-nav-menu',
                        'container' => false,
                        'fallback_cb' => 'waterways_mobile_menu',
                    ));
                    ?>
                    <div class="pt-2">
                        <a href="/tv-show" class="btn btn-primary w-full bg-gradient-ocean hover:shadow-glow transition-all duration-300 block text-center py-2 rounded-md text-white font-medium">
                            Watch Trailer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>