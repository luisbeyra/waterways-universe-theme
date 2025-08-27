<?php
/**
 * Template for displaying 404 pages (Not Found)
 */

get_header(); ?>

<main id="main-content" class="site-main pt-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center py-20">
            
            <!-- 404 Hero -->
            <div class="error-hero mb-12">
                <div class="text-8xl md:text-9xl font-bold text-primary mb-6 opacity-50">
                    404
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-foreground">
                    <?php _e('Page Not Found', 'waterways'); ?>
                </h1>
                <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                    <?php _e('The page you\'re looking for seems to have disappeared into the depths of the mangrove ecosystem. Let\'s help you navigate back to safety.', 'waterways'); ?>
                </p>
            </div>
            
            <!-- Search Form -->
            <div class="error-search mb-12">
                <h2 class="text-2xl font-semibold mb-6 text-foreground">
                    <?php _e('Search for Content', 'waterways'); ?>
                </h2>
                <div class="max-w-md mx-auto">
                    <?php get_search_form(); ?>
                </div>
            </div>
            
            <!-- Quick Navigation -->
            <div class="error-navigation mb-12">
                <h2 class="text-2xl font-semibold mb-6 text-foreground">
                    <?php _e('Explore Waterways', 'waterways'); ?>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 max-w-4xl mx-auto">
                    <a href="<?php echo home_url('/tv-show'); ?>" class="nav-card bg-card border border-border rounded-lg p-6 hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-12 h-12 bg-gradient-ocean rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-foreground">TV Show</h3>
                    </a>
                    
                    <a href="<?php echo home_url('/games'); ?>" class="nav-card bg-card border border-border rounded-lg p-6 hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-12 h-12 bg-gradient-mangrove rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a1 1 0 01-1-1V9a1 1 0 011-1h1a2 2 0 100-4H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 011 1v1z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-foreground">Games</h3>
                    </a>
                    
                    <a href="<?php echo home_url('/graphic-novel'); ?>" class="nav-card bg-card border border-border rounded-lg p-6 hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-foreground">Graphic Novel</h3>
                    </a>
                    
                    <a href="<?php echo home_url('/lessons'); ?>" class="nav-card bg-card border border-border rounded-lg p-6 hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-12 h-12 bg-deep-blue rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6C6.48 6 2 9.58 2 14c0 3.31 2.69 6 6 6h8c3.31 0 6-2.69 6-6 0-4.42-4.48-8-12-8z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-foreground">Lessons</h3>
                    </a>
                </div>
            </div>
            
            <!-- CTA Buttons -->
            <div class="error-actions flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                    <?php _e('Return Home', 'waterways'); ?>
                </a>
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">
                    <?php _e('Contact Us', 'waterways'); ?>
                </a>
            </div>
            
        </div>
    </div>
</main>

<?php get_footer(); ?>