    <!-- Footer - Exact React Match -->
    <footer class="bg-card border-t border-border">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Brand Column -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        if ($custom_logo_id) {
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-13 w-auto" />';
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/waterways-logo.png" alt="' . get_bloginfo('name') . '" class="h-13 w-auto" />';
                        }
                        ?>
                    </div>
                    <p class="text-muted-foreground text-sm leading-relaxed">
                        A revolutionary sci-fi series set in a fictional Florida K-12 school, 
                        seamlessly integrating entertainment with STEM education.
                    </p>
                    <div class="flex space-x-4">
                        <?php if (get_theme_mod('facebook_url')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" class="text-muted-foreground hover:text-accent transition-colors duration-300 hover:scale-110 transform" aria-label="Facebook">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        <?php if (get_theme_mod('twitter_url')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" class="text-muted-foreground hover:text-accent transition-colors duration-300 hover:scale-110 transform" aria-label="Twitter">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        <?php if (get_theme_mod('instagram_url')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>" class="text-muted-foreground hover:text-accent transition-colors duration-300 hover:scale-110 transform" aria-label="Instagram">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.73-3.016-1.804C4.798 14.539 4.34 13.748 4.34 12.888c0-2.084 1.690-3.774 3.774-3.774s3.774 1.690 3.774 3.774c0 2.084-1.690 3.774-3.774 3.774z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        <?php if (get_theme_mod('youtube_url')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('youtube_url')); ?>" class="text-muted-foreground hover:text-accent transition-colors duration-300 hover:scale-110 transform" aria-label="YouTube">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Educational Partners -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-foreground">Educational</h3>
                    <ul class="space-y-2 text-sm">
                        <li><span class="text-muted-foreground">Academica Partnership</span></li>
                        <li><span class="text-muted-foreground">STEM Curriculum</span></li>
                        <li><span class="text-muted-foreground">Colēgia Platform</span></li>
                        <li><span class="text-muted-foreground">Classroom Resources</span></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-foreground">Contact</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center space-x-2 text-muted-foreground">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                            <span><?php echo esc_html(get_theme_mod('contact_email', 'info@waterwaysmiami.com')); ?></span>
                        </div>
                        <div class="flex items-center space-x-2 text-muted-foreground">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                            <span><?php echo esc_html(get_theme_mod('contact_phone', '+1 (305) 555-0123')); ?></span>
                        </div>
                        <div class="flex items-center space-x-2 text-muted-foreground">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            <span><?php echo esc_html(get_theme_mod('contact_location', 'Miami-Dade County, Florida')); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="mt-8 pt-8 border-t border-border flex flex-col sm:flex-row justify-between items-center">
                <p class="text-muted-foreground text-sm">
                    © <?php echo date('Y'); ?> Waterways Miami. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 sm:mt-0">
                    <a href="<?php echo home_url('/privacy-policy/'); ?>" class="text-muted-foreground hover:text-accent text-sm transition-colors duration-300">
                        Privacy Policy
                    </a>
                    <a href="<?php echo home_url('/terms-of-service/'); ?>" class="text-muted-foreground hover:text-accent text-sm transition-colors duration-300">
                        Terms of Service
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>