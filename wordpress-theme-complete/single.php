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
                    <header class="entry-header text-center mb-12">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail mb-8">
                                <?php the_post_thumbnail('hero-image', array('class' => 'w-full h-auto rounded-lg')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-foreground">
                            <?php the_title(); ?>
                        </h1>
                        
                        <div class="entry-meta text-sm text-muted-foreground mb-4">
                            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                <?php echo esc_html(get_the_date()); ?>
                            </time>
                            <?php if (has_category()) : ?>
                                <span class="mx-2">•</span>
                                <?php the_category(', '); ?>
                            <?php endif; ?>
                        </div>
                        
                        <?php if (has_excerpt()) : ?>
                            <div class="entry-excerpt text-xl text-muted-foreground max-w-3xl mx-auto">
                                <?php the_excerpt(); ?>
                            </div>
                        <?php endif; ?>
                    </header>
                    
                    <!-- Post Content -->
                    <div class="entry-content prose prose-lg max-w-none">
                        <?php
                        the_content();
                        
                        wp_link_pages(array(
                            'before' => '<div class="page-links mt-8">',
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                    
                    <!-- Post Footer -->
                    <footer class="entry-footer mt-12 pt-8 border-t border-border">
                        <?php if (has_tag()) : ?>
                            <div class="tags mb-4">
                                <span class="text-sm font-semibold text-muted-foreground mr-2">Tags:</span>
                                <?php the_tags('<span class="badge badge-outline mr-2">', '</span><span class="badge badge-outline mr-2">', '</span>'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Post Navigation -->
                        <div class="post-navigation flex justify-between items-center">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            
                            <?php if ($prev_post) : ?>
                                <a href="<?php echo get_permalink($prev_post); ?>" class="btn btn-outline">
                                    ← Previous Post
                                </a>
                            <?php else : ?>
                                <div></div>
                            <?php endif; ?>
                            
                            <?php if ($next_post) : ?>
                                <a href="<?php echo get_permalink($next_post); ?>" class="btn btn-outline">
                                    Next Post →
                                </a>
                            <?php else : ?>
                                <div></div>
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