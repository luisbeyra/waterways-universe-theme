<?php
/**
 * Template for displaying single posts
 */

get_header(); ?>

<main id="main-content" class="site-main pt-20">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('py-20'); ?>>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    
                    <!-- Post Header -->
                    <header class="post-header text-center mb-12">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            echo '<div class="post-category mb-4">';
                            echo '<span class="inline-block bg-accent text-accent-foreground px-3 py-1 rounded-full text-sm font-semibold">';
                            echo esc_html($categories[0]->name);
                            echo '</span>';
                            echo '</div>';
                        }
                        ?>
                        
                        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-foreground">
                            <?php the_title(); ?>
                        </h1>
                        
                        <div class="post-meta flex items-center justify-center space-x-6 text-muted-foreground mb-8">
                            <time datetime="<?php echo get_the_date('c'); ?>" class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <?php echo get_the_date(); ?>
                            </time>
                            
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <?php echo get_the_author(); ?>
                            </span>
                        </div>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail mb-8">
                                <?php the_post_thumbnail('hero-image', array('class' => 'w-full rounded-lg shadow-lg')); ?>
                            </div>
                        <?php endif; ?>
                    </header>
                    
                    <!-- Post Content -->
                    <div class="post-content prose prose-lg mx-auto text-muted-foreground">
                        <?php
                        the_content();
                        
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'waterways'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                    
                    <!-- Post Footer -->
                    <footer class="post-footer mt-12 pt-8 border-t border-border">
                        <?php
                        $tags = get_the_tags();
                        if ($tags) {
                            echo '<div class="post-tags mb-6">';
                            echo '<h3 class="text-lg font-semibold mb-3 text-foreground">' . __('Tags:', 'waterways') . '</h3>';
                            echo '<div class="flex flex-wrap gap-2">';
                            foreach ($tags as $tag) {
                                echo '<span class="bg-muted text-muted-foreground px-3 py-1 rounded-full text-sm">';
                                echo esc_html($tag->name);
                                echo '</span>';
                            }
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                        
                        <!-- Post Navigation -->
                        <div class="post-navigation flex justify-between items-center">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            
                            <?php if ($prev_post) : ?>
                                <a href="<?php echo get_permalink($prev_post); ?>" class="text-accent hover:text-accent-foreground transition-colors">
                                    ← <?php echo esc_html($prev_post->post_title); ?>
                                </a>
                            <?php else : ?>
                                <span></span>
                            <?php endif; ?>
                            
                            <?php if ($next_post) : ?>
                                <a href="<?php echo get_permalink($next_post); ?>" class="text-accent hover:text-accent-foreground transition-colors">
                                    <?php echo esc_html($next_post->post_title); ?> →
                                </a>
                            <?php endif; ?>
                        </div>
                    </footer>
                    
                    <?php if (comments_open() || get_comments_number()) : ?>
                        <div class="comments-section mt-12">
                            <?php comments_template(); ?>
                        </div>
                    <?php endif; ?>
                    
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>