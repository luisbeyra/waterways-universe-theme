<?php
/**
 * Template part for displaying contact form
 * WordPress-integrated contact form with proper security
 */
?>

<section class="contact-form py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-6 text-foreground">Get In Touch</h2>
                <p class="text-xl text-muted-foreground">
                    Ready to bring Waterways to your classroom? Contact us today!
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-card border border-border rounded-lg p-8">
                    <?php if (isset($_GET['contact']) && $_GET['contact'] == 'success') : ?>
                        <div class="bg-seaweed/20 border border-seaweed rounded-lg p-4 mb-6">
                            <p class="text-seaweed">Thank you! Your message has been sent successfully.</p>
                        </div>
                    <?php elseif (isset($_GET['contact']) && $_GET['contact'] == 'error') : ?>
                        <div class="bg-destructive/20 border border-destructive rounded-lg p-4 mb-6">
                            <p class="text-destructive">Sorry, there was an error sending your message. Please try again.</p>
                        </div>
                    <?php endif; ?>
                    
                    <form method="post" action="<?php echo admin_url('admin-ajax.php'); ?>" class="space-y-6">
                        <input type="hidden" name="action" value="waterways_contact_form">
                        <?php wp_nonce_field('waterways_contact_form', 'waterways_nonce'); ?>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-foreground mb-2">First Name</label>
                                <input type="text" name="contact_name" required class="w-full px-4 py-3 bg-background border border-border rounded-md focus:border-accent focus:outline-none transition-colors">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-foreground mb-2">Email</label>
                                <input type="email" name="contact_email" required class="w-full px-4 py-3 bg-background border border-border rounded-md focus:border-accent focus:outline-none transition-colors">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Subject</label>
                            <input type="text" name="contact_subject" required class="w-full px-4 py-3 bg-background border border-border rounded-md focus:border-accent focus:outline-none transition-colors">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Message</label>
                            <textarea name="contact_message" rows="6" required class="w-full px-4 py-3 bg-background border border-border rounded-md focus:border-accent focus:outline-none transition-colors resize-none"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-ocean hover:shadow-glow text-white font-medium py-3 rounded-md transition-all duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Info -->
                <div class="space-y-8">
                    <div class="bg-gradient-hero rounded-lg p-8 text-foreground">
                        <h3 class="text-xl font-bold mb-4">Contact Information</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span><?php echo esc_html(get_theme_mod('contact_email', 'info@waterwaysmiami.com')); ?></span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span><?php echo esc_html(get_theme_mod('contact_phone', '+1 (305) 555-0123')); ?></span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                <span><?php echo esc_html(get_theme_mod('contact_location', 'Miami-Dade County, Florida')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>