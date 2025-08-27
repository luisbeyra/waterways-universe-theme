<?php
/**
 * Sidebar template
 */

if (!is_active_sidebar('main-sidebar')) {
    return;
}
?>

<aside id="secondary" class="widget-area sidebar bg-card rounded-lg p-6 border border-border">
    <h2 class="sidebar-title text-xl font-bold mb-6 text-foreground">
        <?php _e('Sidebar', 'waterways'); ?>
    </h2>
    
    <?php dynamic_sidebar('main-sidebar'); ?>
    
    <!-- Default sidebar content if no widgets -->
    <?php if (!dynamic_sidebar('main-sidebar')) : ?>
        
        <!-- Recent Posts -->
        <div class="widget widget-recent-posts mb-8">
            <h3 class="widget-title text-lg font-semibold mb-4 text-foreground">
                <?php _e('Recent Articles', 'waterways'); ?>
            </h3>
            <ul class="recent-posts-list space-y-3">
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 5,
                    'post_status' => 'publish'
                ));
                
                foreach ($recent_posts as $post) :
                ?>
                    <li>
                        <a href="<?php echo get_permalink($post['ID']); ?>" class="text-muted-foreground hover:text-accent transition-colors">
                            <?php echo esc_html($post['post_title']); ?>
                        </a>
                        <div class="text-xs text-muted-foreground mt-1">
                            <?php echo get_the_date('', $post['ID']); ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <!-- Categories -->
        <div class="widget widget-categories mb-8">
            <h3 class="widget-title text-lg font-semibold mb-4 text-foreground">
                <?php _e('Categories', 'waterways'); ?>
            </h3>
            <ul class="categories-list space-y-2">
                <?php
                $categories = get_categories();
                foreach ($categories as $category) :
                ?>
                    <li>
                        <a href="<?php echo get_category_link($category->term_id); ?>" class="text-muted-foreground hover:text-accent transition-colors flex items-center justify-between">
                            <span><?php echo esc_html($category->name); ?></span>
                            <span class="text-xs bg-muted rounded-full px-2 py-1">
                                <?php echo $category->count; ?>
                            </span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <!-- Tags -->
        <?php
        $tags = get_tags();
        if ($tags) :
        ?>
            <div class="widget widget-tags mb-8">
                <h3 class="widget-title text-lg font-semibold mb-4 text-foreground">
                    <?php _e('Popular Tags', 'waterways'); ?>
                </h3>
                <div class="tags-list flex flex-wrap gap-2">
                    <?php foreach ($tags as $tag) : ?>
                        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="bg-muted text-muted-foreground px-3 py-1 rounded-full text-sm hover:bg-accent hover:text-accent-foreground transition-colors">
                            <?php echo esc_html($tag->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- Newsletter Signup -->
        <div class="widget widget-newsletter mb-8 bg-gradient-ocean rounded-lg p-6 text-center">
            <h3 class="widget-title text-lg font-semibold mb-3 text-primary-foreground">
                <?php _e('Stay Updated', 'waterways'); ?>
            </h3>
            <p class="text-primary-foreground/90 text-sm mb-4">
                <?php _e('Get the latest news about Waterways episodes, games, and educational content.', 'waterways'); ?>
            </p>
            <form class="newsletter-form">
                <input type="email" placeholder="Your email address" class="w-full px-3 py-2 rounded-md text-foreground bg-background/90 border border-border mb-3">
                <button type="submit" class="w-full bg-background text-primary font-semibold py-2 rounded-md hover:bg-background/90 transition-colors">
                    <?php _e('Subscribe', 'waterways'); ?>
                </button>
            </form>
        </div>
        
    <?php endif; ?>
</aside>