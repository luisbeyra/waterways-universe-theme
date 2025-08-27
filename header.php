<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="author" content="Waterways Miami" />
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>" />
    <?php if (has_post_thumbnail()) : ?>
        <meta property="og:image" content="<?php the_post_thumbnail_url('large'); ?>" />
    <?php endif; ?>
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>" />
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
    <?php if (has_post_thumbnail()) : ?>
        <meta name="twitter:image" content="<?php the_post_thumbnail_url('large'); ?>" />
    <?php endif; ?>
    
    <!-- WordPress Head -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header class="fixed top-0 w-full z-50 bg-transparent backdrop-blur-sm border-b border-border/20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                
                <!-- Logo and Site Title -->
                <div class="flex items-center space-x-2 group">
                    <?php if (has_custom_logo()) : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-2 group">
                            <?php the_custom_logo(); ?>
                        </a>
                    <?php else : ?>
                        <h1 class="text-xl font-bold">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-foreground hover:text-accent transition-colors duration-300">
                                <?php bloginfo('name'); ?>
                            </a>
                        </h1>
                    <?php endif; ?>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-0">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex items-center space-x-0',
                        'fallback_cb' => 'waterways_default_menu',
                        'link_before' => '',
                        'link_after' => '',
                        'walker' => new class extends Walker_Nav_Menu {
                            function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
                                $classes = empty($item->classes) ? array() : (array) $item->classes;
                                $classes[] = 'menu-item-' . $item->ID;
                                
                                $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
                                $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
                                
                                $current_class = in_array('current-menu-item', $classes) ? 
                                    'bg-primary text-primary-foreground shadow-[var(--shadow-glow)]' : 
                                    'text-foreground hover:text-accent';
                                
                                $output .= '<a href="' . esc_attr($item->url) . '" class="px-3 py-2 rounded-md text-base font-medium uppercase transition-all duration-300 hover:bg-card hover:text-accent ' . $current_class . '">';
                                $output .= esc_html($item->title);
                                $output .= '</a>';
                            }
                        }
                    ));
                    ?>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="#trailer" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-primary-foreground bg-gradient-ocean hover:shadow-[var(--shadow-glow)] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Watch Trailer
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-foreground hover:text-accent hover:bg-card focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary transition-colors duration-300" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu icon (hamburger) -->
                        <svg id="menu-icon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Close icon (X) -->
                        <svg id="close-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-transparent backdrop-blur-sm border-t border-border/20">
            <div class="px-4 pt-2 pb-4 space-y-1">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'mobile',
                    'container' => false,
                    'menu_class' => 'mobile-nav-menu',
                    'fallback_cb' => 'waterways_mobile_menu',
                    'walker' => new class extends Walker_Nav_Menu {
                        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
                            $classes = empty($item->classes) ? array() : (array) $item->classes;
                            $classes[] = 'menu-item-' . $item->ID;
                            
                            $current_class = in_array('current-menu-item', $classes) ? 
                                'bg-primary text-primary-foreground' : 
                                'text-foreground hover:bg-card hover:text-accent';
                            
                            $output .= '<a href="' . esc_attr($item->url) . '" class="block px-3 py-2 rounded-md text-lg font-medium uppercase transition-all duration-300 ' . $current_class . '">';
                            $output .= esc_html($item->title);
                            $output .= '</a>';
                        }
                    }
                ));
                ?>
                <div class="pt-2">
                    <a href="#trailer" class="block w-full text-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-primary-foreground bg-gradient-ocean hover:shadow-[var(--shadow-glow)] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Watch Trailer
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <main id="main-content" class="min-h-screen pt-20"><?php // Adding top padding to account for fixed header ?>