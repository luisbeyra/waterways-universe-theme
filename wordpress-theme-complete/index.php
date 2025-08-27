<?php
/**
 * Waterways Theme - Main Index Template
 */

get_header(); ?>

<main id="main-content" class="site-main">
    <?php if (is_home() || is_front_page()) : ?>
        <!-- Homepage Content -->
        <div class="homepage-content">
            <div class="container">
                <!-- Logo Section -->
                <div class="logo-section">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png" 
                         alt="Waterways Logo" 
                         class="main-logo">
                </div>

                <!-- Main Description -->
                <div class="main-description">
                    <p>A revolutionary sci-fi series set in a fictional Florida K-12 school, seamlessly integrating entertainment with STEM education.</p>
                </div>

                <!-- Content Sections -->
                <div class="content-sections">
                    <!-- Educational Section -->
                    <div class="content-section">
                        <h3>Educational</h3>
                        <ul>
                            <li>Academica Partnership</li>
                            <li>STEM Curriculum</li>
                            <li>Colēgia Platform</li>
                            <li>Classroom Resources</li>
                        </ul>
                    </div>

                    <!-- Contact Section -->
                    <div class="content-section">
                        <h3>Contact</h3>
                        <div class="contact-info">
                            <p><span class="contact-icon">📧</span> info@waterwaysmiami.com</p>
                            <p><span class="contact-icon">📞</span> +1 (305) 555-0123</p>
                            <p><span class="contact-icon">📍</span> Miami-Dade County, Florida</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <!-- Other Pages Content -->
        <div class="container page-content">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header>
                        
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="no-content">
                    <h1>Nothing Found</h1>
                    <p>It seems we can't find what you're looking for.</p>
                    <a href="<?php echo home_url(); ?>" class="btn-home">Return Home</a>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
