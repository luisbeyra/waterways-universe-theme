<?php
/**
 * Template for displaying single pages
 * Used for About, Contact, and other static pages
 */

get_header(); ?>

<main id="main-content" class="site-main pt-20">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('py-20'); ?>>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    
                    <!-- Page Header -->
                    <header class="page-header text-center mb-12">
                        <h1 class="text-5xl font-bold mb-6 text-foreground">
                            <?php the_title(); ?>
                        </h1>
                        <?php if (has_excerpt()) : ?>
                            <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                                <?php the_excerpt(); ?>
                            </p>
                        <?php endif; ?>
                    </header>
                    
                    <!-- Page Content -->
                    <div class="page-content prose prose-lg mx-auto">
                        <?php
                        the_content();
                        
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'waterways'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                    
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