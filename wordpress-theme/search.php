<?php
/**
 * Template for displaying search results
 */

get_header(); ?>

<main id="main-content" class="site-main pt-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20">
        
        <!-- Search Header -->
        <header class="search-header text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-foreground">
                <?php
                if (have_posts()) {
                    printf(__('Search Results for: %s', 'waterways'), '<span class="text-accent">"' . get_search_query() . '"</span>');
                } else {
                    printf(__('No Results for: %s', 'waterways'), '<span class="text-accent">"' . get_search_query() . '"</span>');
                }
                ?>
            </h1>
            
            <?php if (have_posts()) : ?>
                <p class="text-xl text-muted-foreground">
                    <?php
                    global $wp_query;
                    $total_results = $wp_query->found_posts;
                    printf(_n('Found %d result', 'Found %d results', $total_results, 'waterways'), $total_results);
                    ?>
                </p>
            <?php endif; ?>
        </header>
        
        <?php if (have_posts()) : ?>
            <!-- Search Results -->
            <div class="search-results space-y-8 max-w-4xl mx-auto">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('search-result bg-card border border-border rounded-lg p-6 hover:border-accent transition-all duration-300'); ?>>
                        <div class="result-content">
                            
                            <!-- Post Type Badge -->
                            <div class="result-type mb-3">
                                <span class="inline-block bg-accent text-accent-foreground px-2 py-1 rounded-full text-xs font-semibold uppercase">
                                    <?php echo get_post_type(); ?>
                                </span>
                                
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo '<span class="inline-block bg-muted text-muted-foreground px-2 py-1 rounded-full text-xs font-medium ml-2">';
                                    echo esc_html($categories[0]->name);
                                    echo '</span>';
                                }
                                ?>
                            </div>
                            
                            <!-- Title -->
                            <h2 class="result-title mb-3">
                                <a href="<?php the_permalink(); ?>" class="text-2xl font-bold text-foreground hover:text-accent transition-colors">
                                    <?php
                                    // Highlight search terms in title
                                    $title = get_the_title();
                                    if (get_search_query()) {
                                        $title = preg_replace('/(' . preg_quote(get_search_query(), '/') . ')/i', '<mark class="bg-accent text-accent-foreground px-1 rounded">$1</mark>', $title);
                                    }
                                    echo $title;
                                    ?>
                                </a>
                            </h2>
                            
                            <!-- Excerpt -->
                            <div class="result-excerpt text-muted-foreground mb-4">
                                <?php
                                $excerpt = get_the_excerpt();
                                if (get_search_query()) {
                                    $excerpt = preg_replace('/(' . preg_quote(get_search_query(), '/') . ')/i', '<mark class="bg-accent text-accent-foreground px-1 rounded">$1</mark>', $excerpt);
                                }
                                echo $excerpt;
                                ?>
                            </div>
                            
                            <!-- Meta Info -->
                            <div class="result-meta flex items-center justify-between text-sm text-muted-foreground">
                                <div class="meta-left flex items-center space-x-4">
                                    <time datetime="<?php echo get_the_date('c'); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                    <span><?php echo get_the_author(); ?></span>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="text-accent hover:text-accent-foreground font-medium">
                                    <?php _e('Read More →', 'waterways'); ?>
                                </a>
                            </div>
                            
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <!-- Pagination -->
            <div class="pagination-wrapper mt-12">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('← Previous', 'waterways'),
                    'next_text' => __('Next →', 'waterways'),
                ));
                ?>
            </div>
            
        <?php else : ?>
            <!-- No Results -->
            <div class="no-results text-center max-w-2xl mx-auto">
                <div class="mb-8">
                    <svg class="w-24 h-24 text-muted-foreground mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m21 21-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <p class="text-lg text-muted-foreground mb-8">
                        <?php _e('Sorry, no results were found for your search. Try adjusting your search terms or explore our content below.', 'waterways'); ?>
                    </p>
                </div>
                
                <!-- Search Suggestions -->
                <div class="search-suggestions mb-8">
                    <h3 class="text-xl font-semibold mb-4 text-foreground">
                        <?php _e('Search Suggestions:', 'waterways'); ?>
                    </h3>
                    <ul class="text-muted-foreground space-y-2">
                        <li><?php _e('• Try using more general keywords', 'waterways'); ?></li>
                        <li><?php _e('• Check your spelling', 'waterways'); ?></li>
                        <li><?php _e('• Use fewer keywords', 'waterways'); ?></li>
                        <li><?php _e('• Try different keywords', 'waterways'); ?></li>
                    </ul>
                </div>
                
                <!-- New Search -->
                <div class="new-search mb-12">
                    <h3 class="text-xl font-semibold mb-4 text-foreground">
                        <?php _e('Try a New Search:', 'waterways'); ?>
                    </h3>
                    <?php get_search_form(); ?>
                </div>
                
                <!-- Browse Categories -->
                <div class="browse-categories">
                    <h3 class="text-xl font-semibold mb-4 text-foreground">
                        <?php _e('Or Browse Our Content:', 'waterways'); ?>
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <a href="<?php echo home_url('/tv-show'); ?>" class="btn btn-outline">TV Show</a>
                        <a href="<?php echo home_url('/games'); ?>" class="btn btn-outline">Games</a>
                        <a href="<?php echo home_url('/graphic-novel'); ?>" class="btn btn-outline">Graphic Novel</a>
                        <a href="<?php echo home_url('/lessons'); ?>" class="btn btn-outline">Lessons</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
    </div>
</main>

<?php get_footer(); ?>