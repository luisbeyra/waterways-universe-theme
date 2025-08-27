<?php
/**
 * Waterways Theme - Main Index Template
 * 
 * This template displays the homepage with hero section and handles other content pages
 */

get_header(); ?>

<main id="main-content" class="site-main">
    <?php 
    // Show hero section only on homepage
    if (is_home() || is_front_page()) {
        // Include the hero section template part - FORCE INCLUDE
        include(get_template_directory() . '/template-parts/hero-section.php');
    } else {
        // For other pages, show standard content with proper spacing
        if (have_posts()) : ?>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 pt-32">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('max-w-4xl mx-auto'); ?>>
                        <header class="entry-header text-center mb-12">
                            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-foreground">
                                <?php the_title(); ?>
                            </h1>
                            <?php if (has_excerpt()) : ?>
                                <div class="text-xl text-muted-foreground max-w-3xl mx-auto">
                                    <?php the_excerpt(); ?>
                                </div>
                            <?php endif; ?>
                        </header>
                        
                        <div class="entry-content prose prose-lg max-w-none">
                            <?php
                            the_content();
                            
                            wp_link_pages(array(
                                'before' => '<div class="page-links mt-8">',
                                'after'  => '</div>',
                            ));
                            ?>
                        </div>
                    </article>
                <?php endwhile; ?>
                
                <?php
                // Pagination
                the_posts_navigation();
                ?>
            </div>
        <?php else : ?>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 pt-32">
                <div class="text-center max-w-2xl mx-auto">
                    <h1 class="text-3xl font-bold mb-4 text-foreground">Nothing Found</h1>
                    <p class="text-muted-foreground mb-8">It seems we can't find what you're looking for. Perhaps searching can help.</p>
                    <a href="<?php echo home_url(); ?>" class="btn btn-primary bg-gradient-ocean hover:shadow-[var(--shadow-glow)] px-8 py-3">
                        Return Home
                    </a>
                </div>
            </div>
        <?php endif;
    }
    ?>
</main>

<?php get_footer(); ?>