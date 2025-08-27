<?php
/**
 * Template for displaying archive pages
 */

get_header(); ?>

<main id="main-content" class="site-main pt-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20">
        
        <!-- Archive Header -->
        <header class="archive-header text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-foreground">
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    echo __('Posts by ', 'waterways') . get_the_author();
                } elseif (is_date()) {
                    echo __('Archive for ', 'waterways');
                    if (is_month()) {
                        echo get_the_date('F Y');
                    } elseif (is_year()) {
                        echo get_the_date('Y');
                    } else {
                        echo get_the_date();
                    }
                } else {
                    echo __('Archives', 'waterways');
                }
                ?>
            </h1>
            
            <?php
            $description = get_the_archive_description();
            if ($description) :
            ?>
                <div class="archive-description text-xl text-muted-foreground max-w-3xl mx-auto">
                    <?php echo $description; ?>
                </div>
            <?php endif; ?>
        </header>
        
        <!-- Posts Grid -->
        <?php if (have_posts()) : ?>
            <div class="posts-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card bg-card border border-border rounded-lg overflow-hidden hover:border-accent transition-all duration-300 hover:shadow-card'); ?>>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('card-image', array('class' => 'w-full h-48 object-cover')); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content p-6">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo '<div class="post-category mb-3">';
                                echo '<span class="inline-block bg-accent text-accent-foreground px-2 py-1 rounded-full text-xs font-semibold">';
                                echo esc_html($categories[0]->name);
                                echo '</span>';
                                echo '</div>';
                            }
                            ?>
                            
                            <h2 class="post-title mb-3">
                                <a href="<?php the_permalink(); ?>" class="text-xl font-bold text-foreground hover:text-accent transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="post-excerpt text-muted-foreground mb-4">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <div class="post-meta flex items-center justify-between text-sm text-muted-foreground">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                                <span><?php echo get_the_author(); ?></span>
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
                    'class' => 'pagination flex justify-center space-x-2',
                ));
                ?>
            </div>
            
        <?php else : ?>
            <div class="no-posts text-center py-20">
                <h2 class="text-2xl font-bold mb-4 text-foreground">
                    <?php _e('No posts found', 'waterways'); ?>
                </h2>
                <p class="text-muted-foreground mb-8">
                    <?php _e('Sorry, no posts were found in this archive.', 'waterways'); ?>
                </p>
                <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                    <?php _e('Return Home', 'waterways'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>