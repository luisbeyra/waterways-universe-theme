<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Waterways - A revolutionary sci-fi series set in a fictional Florida K-12 school, seamlessly integrating entertainment with STEM education in the mangrove ecosystem.">
    <meta name="keywords" content="STEM education, sci-fi series, Florida, mangrove ecosystem, educational games, curriculum">
    <meta name="author" content="Waterways Miami">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <meta property="og:description" content="A revolutionary sci-fi series set in a fictional Florida K-12 school, seamlessly integrating entertainment with STEM education.">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="twitter:title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <meta property="twitter:description" content="A revolutionary sci-fi series set in a fictional Florida K-12 school, seamlessly integrating entertainment with STEM education.">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">

    <!-- Preload critical images -->
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/images/hero-background.jpg">
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png">

    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen bg-background'); ?>>
<?php wp_body_open(); ?>

<header class="fixed top-0 w-full z-50 bg-transparent backdrop-blur-sm border-b border-border/20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-2 group">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png" 
                         alt="<?php bloginfo('name'); ?> Logo" 
                         class="h-11 w-auto transition-all duration-300 group-hover:scale-105">
                <?php endif; ?>
            </a>

            <!-- Desktop Navigation -->
            <?php if (has_nav_menu('primary')) : ?>
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => 'nav',
                    'container_class'=> 'hidden md:flex items-center space-x-0',
                    'walker'         => new Waterways_Walker_Nav_Menu(),
                    'items_wrap'     => '%3$s',
                )); ?>
            <?php else : ?>
                <?php waterways_default_menu(); ?>
            <?php endif; ?>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="#" class="btn btn-primary btn-lg bg-gradient-ocean hover:shadow-[var(--shadow-glow)] transition-all duration-300">
                    Watch Trailer
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button onclick="toggleMobileMenu()" class="btn btn-ghost btn-sm text-foreground hover:text-accent">
                    <svg id="menu-icon" class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="mobile-menu md:hidden bg-transparent backdrop-blur-sm border-t border-border/20">
        <?php if (has_nav_menu('mobile')) : ?>
            <?php wp_nav_menu(array(
                'theme_location' => 'mobile',
                'container'      => 'div',
                'container_class'=> 'px-4 pt-2 pb-4 space-y-1',
                'link_before'    => '<span class="block px-3 py-2 rounded-md text-lg font-medium uppercase transition-all duration-300 text-foreground hover:bg-card hover:text-accent">',
                'link_after'     => '</span>',
            )); ?>
        <?php else : ?>
            <?php waterways_mobile_menu(); ?>
        <?php endif; ?>
        <div class="px-4 pt-2">
            <a href="#" class="btn btn-primary w-full bg-gradient-ocean hover:shadow-[var(--shadow-glow)] transition-all duration-300">
                Watch Trailer
            </a>
        </div>
    </div>
</header>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    
    if (mobileMenu.classList.contains('show')) {
        mobileMenu.classList.remove('show');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    } else {
        mobileMenu.classList.add('show');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    }
}
</script>