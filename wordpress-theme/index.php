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
    // Show hero section only on homepage - matching React version
    if (is_home() || is_front_page()) {
        get_template_part('template-parts/hero', 'section');
    } else {
        // For other pages, show standard content
        if (have_posts()) :
            echo '<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 pt-32">';
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', get_post_type());
            endwhile;
            
            // Pagination
            the_posts_navigation();
            echo '</div>';
        else :
            echo '<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 pt-32">';
            get_template_part('template-parts/content', 'none');
            echo '</div>';
        endif;
    }
    ?>
</main>

<?php get_footer(); ?>