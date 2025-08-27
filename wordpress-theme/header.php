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
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo get_permalink(); ?>">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png" as="image">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen bg-background'); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Header - Exact React Match -->
    <header class="fixed top-0 w-full z-50 bg-transparent backdrop-blur-sm border-b border-border/20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                
                <!-- Logo -->
                <div class="site-branding">
                    <a href="<?php echo home_url(); ?>" class="flex items-center space-x-2 group">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png" 
                            alt="<?php bloginfo('name'); ?> Logo"
                            class="h-11 w-auto transition-all duration-300 group-hover:scale-105"
                        >
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-0">
                    <?php
                    $navigation = array(
                        'Home' => home_url('/'),
                        'TV Show' => home_url('/tv-show/'),
                        'Games' => home_url('/games/'),
                        'Graphic Novel' => home_url('/graphic-novel/'),
                        'Lessons' => home_url('/lessons/'),
                        'About' => home_url('/about/'),
                        'Contact' => home_url('/contact/')
                    );
                    
                    $current_url = home_url(add_query_arg(array(), $GLOBALS['wp']->request));
                    
                    foreach ($navigation as $name => $url) {
                        $is_active = ($current_url === rtrim($url, '/')) || (rtrim($current_url, '/') === rtrim($url, '/'));
                        if ($name === 'Home' && (is_home() || is_front_page())) $is_active = true;
                        
                        $active_class = $is_active ? 'bg-primary text-primary-foreground shadow-[var(--shadow-glow)]' : 'text-foreground hover:text-accent';
                        
                        echo '<a href="' . esc_url($url) . '" class="px-3 py-2 rounded-md text-base font-medium uppercase transition-all duration-300 hover:bg-card hover:text-accent ' . $active_class . '">' . esc_html($name) . '</a>';
                    }
                    ?>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="<?php echo home_url('/tv-show/'); ?>" class="btn btn-primary bg-gradient-ocean hover:shadow-[var(--shadow-glow)] transition-all duration-300 inline-flex items-center px-4 py-2 rounded-md text-sm font-medium">
                        Watch Trailer
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="md:hidden">
                    <button class="mobile-menu-toggle text-foreground hover:text-accent p-2" onclick="toggleMobileMenu()" aria-label="Toggle mobile menu">
                        <svg class="menu-icon w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="close-icon w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="mobile-menu hidden md:hidden bg-transparent backdrop-blur-sm border-t border-border/20">
            <div class="px-4 pt-2 pb-4 space-y-1">
                <?php
                foreach ($navigation as $name => $url) {
                    $is_active = ($current_url === rtrim($url, '/')) || (rtrim($current_url, '/') === rtrim($url, '/'));
                    if ($name === 'Home' && (is_home() || is_front_page())) $is_active = true;
                    
                    $active_class = $is_active ? 'bg-primary text-primary-foreground' : 'text-foreground hover:bg-card hover:text-accent';
                    
                    echo '<a href="' . esc_url($url) . '" class="block px-3 py-2 rounded-md text-lg font-medium uppercase transition-all duration-300 ' . $active_class . '">' . esc_html($name) . '</a>';
                }
                ?>
                <div class="pt-2">
                    <a href="<?php echo home_url('/tv-show/'); ?>" class="w-full bg-gradient-ocean hover:shadow-[var(--shadow-glow)] transition-all duration-300 inline-flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-white">
                        Watch Trailer
                    </a>
                </div>
            </div>
        </div>
    </header>

    <script>
    function toggleMobileMenu() {
        const mobileMenu = document.querySelector('.mobile-menu');
        const menuIcon = document.querySelector('.menu-icon');
        const closeIcon = document.querySelector('.close-icon');
        
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }
    </script>