    </main>
    <!-- End Main Content Wrapper -->

    <footer class="bg-card border-t border-border">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Brand Column -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <h3 class="text-xl font-bold text-foreground">
                                <?php bloginfo('name'); ?>
                            </h3>
                        <?php endif; ?>
                    </div>
                    
                    <p class="text-muted-foreground text-sm leading-relaxed">
                        <?php 
                        $footer_description = get_theme_mod('footer_description', 'A revolutionary sci-fi series set in a fictional Florida K-12 school, seamlessly integrating entertainment with STEM education.');
                        echo esc_html($footer_description);
                        ?>
                    </p>
                    
                    <!-- Social Media Links -->
                    <div class="flex space-x-4">
                        <?php
                        $social_platforms = array(
                            'facebook' => array('icon' => 'facebook', 'label' => 'Facebook'),
                            'twitter' => array('icon' => 'twitter', 'label' => 'Twitter'),
                            'instagram' => array('icon' => 'instagram', 'label' => 'Instagram'),
                            'youtube' => array('icon' => 'youtube', 'label' => 'YouTube')
                        );
                        
                        foreach ($social_platforms as $platform => $data) :
                            $social_url = get_theme_mod($platform . '_url');
                            if ($social_url) :
                        ?>
                            <a href="<?php echo esc_url($social_url); ?>" 
                               class="text-muted-foreground hover:text-accent transition-colors duration-300 hover:scale-110 transform" 
                               aria-label="<?php echo esc_attr($data['label']); ?>"
                               target="_blank" 
                               rel="noopener noreferrer">
                                <?php if ($platform === 'facebook') : ?>
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                <?php elseif ($platform === 'twitter') : ?>
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                <?php elseif ($platform === 'instagram') : ?>
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.229 14.794 3.74 13.643 3.74 12.346s.49-2.448 1.386-3.323c.896-.875 2.026-1.297 3.323-1.297s2.448.422 3.323 1.297c.875.875 1.297 2.026 1.297 3.323s-.422 2.448-1.297 3.323c-.875.875-2.026 1.297-3.323 1.297zm7.83-9.404c-.315 0-.595-.119-.84-.357-.245-.238-.368-.525-.368-.84s.123-.602.368-.84c.245-.238.525-.357.84-.357s.595.119.84.357c.245.238.368.525.368.84s-.123.602-.368.84c-.245.238-.525.357-.84.357z"/>
                                    </svg>
                                <?php elseif ($platform === 'youtube') : ?>
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                    </svg>
                                <?php endif; ?>
                            </a>
                        <?php 
                            endif;
                        endforeach; 
                        ?>
                    </div>
                </div>

                <!-- Educational Partners Column -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-foreground">Educational</h3>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <span class="text-muted-foreground">Academica Partnership</span>
                        </li>
                        <li>
                            <span class="text-muted-foreground">STEM Curriculum</span>
                        </li>
                        <li>
                            <span class="text-muted-foreground">Colēgia Platform</span>
                        </li>
                        <li>
                            <span class="text-muted-foreground">Miami-Dade Integration</span>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links Column -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-foreground">Quick Links</h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 'footer-menu space-y-2',
                        'fallback_cb' => 'waterways_footer_menu',
                        'walker' => new class extends Walker_Nav_Menu {
                            function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
                                $output .= '<li><a href="' . esc_attr($item->url) . '" class="text-muted-foreground hover:text-accent transition-colors duration-300 text-sm">';
                                $output .= esc_html($item->title);
                                $output .= '</a></li>';
                            }
                        }
                    ));
                    ?>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="mt-8 pt-8 border-t border-border">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="flex items-center space-x-2">
                        <svg width="16" height="16" fill="currentColor" class="text-accent" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        <span class="text-sm text-muted-foreground">
                            <?php echo esc_html(get_theme_mod('contact_email', 'info@waterwaysmiami.com')); ?>
                        </span>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <svg width="16" height="16" fill="currentColor" class="text-accent" viewBox="0 0 24 24">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <span class="text-sm text-muted-foreground">
                            <?php echo esc_html(get_theme_mod('contact_phone', '+1 (305) 555-0123')); ?>
                        </span>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <svg width="16" height="16" fill="currentColor" class="text-accent" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        <span class="text-sm text-muted-foreground">
                            <?php echo esc_html(get_theme_mod('contact_location', 'Miami-Dade County, Florida')); ?>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-8 pt-8 border-t border-border text-center">
                <p class="text-sm text-muted-foreground">
                    © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved. 
                    <?php if (is_home() || is_front_page()) : ?>
                        Built with passion for STEM education in Miami.
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </footer>

    <!-- WordPress Footer Hook -->
    <?php wp_footer(); ?>
</body>
</html>