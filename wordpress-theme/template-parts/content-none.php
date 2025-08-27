<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>

<section class="no-results not-found text-center py-20">
    <header class="page-header mb-8">
        <h1 class="page-title text-3xl font-bold text-foreground">
            <?php _e('Nothing here', 'waterways'); ?>
        </h1>
    </header>

    <div class="page-content max-w-2xl mx-auto">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            
            <p class="text-muted-foreground mb-6">
                <?php
                printf(
                    wp_kses(
                        __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'waterways'),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ),
                    esc_url(admin_url('post-new.php'))
                );
                ?>
            </p>
            
        <?php elseif (is_search()) : ?>
            
            <p class="text-muted-foreground mb-6">
                <?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'waterways'); ?>
            </p>
            
            <div class="search-form-wrapper">
                <?php get_search_form(); ?>
            </div>
            
        <?php else : ?>
            
            <p class="text-muted-foreground mb-6">
                <?php _e('It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'waterways'); ?>
            </p>
            
            <div class="search-form-wrapper">
                <?php get_search_form(); ?>
            </div>
            
        <?php endif; ?>
        
        <div class="mt-8">
            <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                <?php _e('Return to Homepage', 'waterways'); ?>
            </a>
        </div>
    </div>
</section>