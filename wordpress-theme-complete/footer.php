<footer class="bg-card border-t border-border">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Brand Column -->
            <div class="space-y-4">
                <div class="flex items-center space-x-2">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png" 
                             alt="<?php bloginfo('name'); ?> Logo" 
                             class="h-13 w-auto">
                    <?php endif; ?>
                </div>
                <p class="text-muted-foreground text-sm leading-relaxed">
                    <?php echo esc_html(waterways_get_option('waterways_footer_description', 'A revolutionary sci-fi series set in a fictional Florida K-12 school, seamlessly integrating entertainment with STEM education.')); ?>
                </p>
                <div class="flex space-x-4">
                    <?php 
                    $social_links = array(
                        'facebook' => array('icon' => 'M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z', 'label' => 'Facebook'),
                        'twitter' => array('icon' => 'M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z', 'label' => 'Twitter'),
                        'instagram' => array('icon' => 'M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01M22 16a6 6 0 01-6 6H8a6 6 0 01-6-6V8a6 6 0 016-6h8a6 6 0 016 6v8z', 'label' => 'Instagram'),
                        'youtube' => array('icon' => 'M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 011.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 01-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 01-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 010 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 011.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 017.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z', 'label' => 'YouTube')
                    );
                    
                    foreach ($social_links as $network => $data) :
                        $url = waterways_get_option('waterways_' . $network);
                        if ($url) : ?>
                            <a href="<?php echo esc_url($url); ?>" 
                               class="text-muted-foreground hover:text-accent transition-colors duration-300 hover:scale-110 transform" 
                               aria-label="<?php echo esc_attr($data['label']); ?>"
                               target="_blank" rel="noopener noreferrer">
                                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $data['icon']; ?>"></path>
                                </svg>
                            </a>
                        <?php endif;
                    endforeach; ?>
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
                        <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span><?php echo esc_html(waterways_get_option('waterways_contact_email', 'info@waterwaysmiami.com')); ?></span>
                    </div>
                    <div class="flex items-center space-x-2 text-muted-foreground">
                        <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span><?php echo esc_html(waterways_get_option('waterways_contact_phone', '+1 (305) 555-0123')); ?></span>
                    </div>
                    <div class="flex items-center space-x-2 text-muted-foreground">
                        <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span><?php echo esc_html(waterways_get_option('waterways_contact_address', 'Miami-Dade County, Florida')); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-8 pt-8 border-t border-border flex flex-col sm:flex-row justify-between items-center">
            <p class="text-muted-foreground text-sm">
                © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
            </p>
            <?php if (has_nav_menu('footer')) : ?>
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => 'div',
                    'container_class'=> 'flex space-x-6 mt-4 sm:mt-0',
                    'link_before'    => '<span class="text-muted-foreground hover:text-accent text-sm transition-colors duration-300">',
                    'link_after'     => '</span>',
                )); ?>
            <?php else : ?>
                <?php waterways_footer_menu(); ?>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>