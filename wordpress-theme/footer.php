    <!-- Site Footer -->
    <footer class="site-footer">
        <div class="container py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Brand Column -->
                <div class="footer-brand space-y-4">
                    <div class="flex items-center space-x-2">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/WaterWays-Logo-Web.png" 
                            alt="<?php bloginfo('name'); ?> Logo" 
                            class="h-auto"
                            style="height: 3.25rem;"
                        >
                    </div>
                    <p class="text-muted-foreground text-sm leading-relaxed">
                        <?php 
                        $footer_description = get_theme_mod('footer_description', 'A revolutionary sci-fi series set in a fictional Florida K-12 school, seamlessly integrating entertainment with STEM education.');
                        echo esc_html($footer_description); 
                        ?>
                    </p>
                    
                    <!-- Social Media Links -->
                    <div class="social-links flex space-x-4">
                        <?php if (get_theme_mod('facebook_url')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" class="text-muted-foreground hover:text-accent" aria-label="Facebook">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('twitter_url')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" class="text-muted-foreground hover:text-accent" aria-label="Twitter">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('instagram_url')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>" class="text-muted-foreground hover:text-accent" aria-label="Instagram">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.621 5.367 11.988 11.988 11.988s11.987-5.367 11.987-11.988C24.004 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.348-1.051-2.348-2.348s1.051-2.348 2.348-2.348 2.348 1.051 2.348 2.348-1.051 2.348-2.348 2.348zm7.718 0c-1.297 0-2.348-1.051-2.348-2.348s1.051-2.348 2.348-2.348 2.348 1.051 2.348 2.348-1.051 2.348-2.348 2.348z"/></svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('youtube_url')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('youtube_url')); ?>" class="text-muted-foreground hover:text-accent" aria-label="YouTube">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Educational Partners -->
                <div class="footer-educational">
                    <h3 class="text-lg font-semibold mb-4 text-foreground">Educational</h3>
                    <ul class="space-y-2 text-sm">
                        <li><span class="text-muted-foreground">Academica Partnership</span></li>
                        <li><span class="text-muted-foreground">STEM Curriculum</span></li>
                        <li><span class="text-muted-foreground">Colēgia Platform</span></li>
                        <li><span class="text-muted-foreground">Classroom Resources</span></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-contact">
                    <h3 class="text-lg font-semibold mb-4 text-foreground">Contact</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center space-x-2 text-muted-foreground">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span><?php echo esc_html(get_theme_mod('contact_email', 'info@waterwaysmiami.com')); ?></span>
                        </div>
                        <div class="flex items-center space-x-2 text-muted-foreground">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span><?php echo esc_html(get_theme_mod('contact_phone', '+1 (305) 555-0123')); ?></span>
                        </div>
                        <div class="flex items-center space-x-2 text-muted-foreground">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span><?php echo esc_html(get_theme_mod('contact_location', 'Miami-Dade County, Florida')); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="mt-8 pt-8 border-t border-border flex">
                <p class="text-muted-foreground text-sm">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
                </p>
                <div class="flex space-x-4 mt-4 sm:mt-0" style="margin-left: auto;">
                    <a href="<?php echo home_url('/privacy-policy'); ?>" class="text-muted-foreground hover:text-accent text-sm">
                        Privacy Policy
                    </a>
                    <a href="<?php echo home_url('/terms-of-service'); ?>" class="text-muted-foreground hover:text-accent text-sm">
                        Terms of Service
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>