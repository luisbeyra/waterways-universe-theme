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
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png" as="image">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Navigation Header -->
    <header class="site-header">
        <div class="container">
            <div class="flex">
                <!-- Logo -->
                <div class="site-branding">
                    <a href="<?php echo home_url(); ?>">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png" 
                            alt="<?php bloginfo('name'); ?> Logo"
                        >
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="main-navigation md:flex">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'nav-menu',
                        'container' => false,
                        'fallback_cb' => 'waterways_default_menu',
                    ));
                    ?>
                </nav>

                <!-- CTA Button -->
                <div class="header-cta md:block">
                    <a href="<?php echo home_url('/tv-show'); ?>" class="btn btn-primary animate-glow">
                        Watch Trailer
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-toggle" class="mobile-menu-toggle md:hidden">
                    <span class="sr-only">Toggle Menu</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="mobile-menu md:hidden hidden">
                <div class="px-4 space-y-1">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'mobile',
                        'menu_class' => 'mobile-nav-menu',
                        'container' => false,
                        'fallback_cb' => 'waterways_mobile_menu',
                    ));
                    ?>
                    <div class="pt-2">
                        <a href="<?php echo home_url('/tv-show'); ?>" class="btn btn-primary w-full animate-glow">
                            Watch Trailer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileToggle && mobileMenu) {
            mobileToggle.addEventListener('click', function() {
                if (mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                }
            });
        }
    });
    </script>