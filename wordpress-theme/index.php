<?php
/**
 * Waterways Theme - Main Index Template
 * 
 * This is the main template file for the Waterways WordPress theme.
 * It includes the header, hero section with 4 main areas, and footer.
 */

get_header(); ?>

<main id="main-content" class="site-main">
    <?php 
    // Include hero section with 4 main areas
    get_template_part('template-parts/hero', 'section'); 
    
    // Include additional sections if on homepage
    if (is_home() || is_front_page()) {
        get_template_part('template-parts/services', 'grid');
        get_template_part('template-parts/about', 'section');
        get_template_part('template-parts/testimonials', 'slider');
        get_template_part('template-parts/contact', 'form');
    }
    
    // Standard WordPress loop for other content
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', get_post_type());
        endwhile;
        
        // Pagination
        the_posts_navigation();
    else :
        get_template_part('template-parts/content', 'none');
    endif;
    ?>
</main>

<?php get_footer(); ?>