<?php
/**
 * Template for TV Show page
 */

get_header(); ?>

<main id="main-content" class="site-main pt-20">
    <?php while (have_posts()) : the_post(); ?>
        
        <!-- Hero Section -->
        <section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
            <?php if (has_post_thumbnail()) : ?>
                <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo get_the_post_thumbnail_url(null, 'hero-image'); ?>');">
                    <div class="absolute inset-0 bg-background/70 backdrop-blur-sm"></div>
                </div>
            <?php else : ?>
                <div class="absolute inset-0 bg-gradient-hero"></div>
            <?php endif; ?>
            
            <div class="relative z-10 container mx-auto px-4 text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-hero bg-clip-text text-transparent">
                    <?php the_title(); ?>
                </h1>
                <?php if (has_excerpt()) : ?>
                    <p class="text-xl text-muted-foreground max-w-3xl mx-auto mb-8">
                        <?php the_excerpt(); ?>
                    </p>
                <?php endif; ?>
                <a href="#watch-trailer" class="btn btn-primary animate-glow">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Watch Trailer Now
                </a>
            </div>
        </section>

        <!-- About the Show -->
        <section class="py-20 bg-card">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-foreground">
                        About Waterways
                    </h2>
                    
                    <div class="prose prose-lg mx-auto text-muted-foreground">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Grid -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-foreground">
                    What Makes Waterways Special
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="feature-card bg-card border border-border rounded-lg p-8 text-center hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-16 h-16 bg-gradient-ocean rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Expert Cameos</h3>
                        <p class="text-muted-foreground">
                            Features renowned experts and celebrities in classroom scenes, with extended educational interviews.
                        </p>
                    </div>
                    
                    <div class="feature-card bg-card border border-border rounded-lg p-8 text-center hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-16 h-16 bg-gradient-mangrove rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Educational Curriculum</h3>
                        <p class="text-muted-foreground">
                            Comprehensive STEM curriculum developed by Academica educators, accessible through Colēgia platform.
                        </p>
                    </div>
                    
                    <div class="feature-card bg-card border border-border rounded-lg p-8 text-center hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Network Quality</h3>
                        <p class="text-muted-foreground">
                            First-of-its-kind network quality TV show seamlessly integrating entertainment with education.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section -->
        <section id="watch-trailer" class="py-20 bg-card">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-8 text-foreground">
                        Watch the Official Trailer
                    </h2>
                    <div class="aspect-video bg-muted rounded-lg flex items-center justify-center mb-8">
                        <div class="text-center">
                            <svg class="w-16 h-16 text-muted-foreground mb-4 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-muted-foreground">Trailer Video Player</p>
                            <p class="text-sm text-muted-foreground mt-2">
                                Experience the mystery and science of Waterways Academy
                            </p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">
                        Watch Full Episodes
                    </a>
                </div>
            </div>
        </section>

        <!-- Episodes Archive -->
        <?php
        $episodes = new WP_Query(array(
            'post_type' => 'tv_episode',
            'posts_per_page' => 6,
            'post_status' => 'publish'
        ));
        
        if ($episodes->have_posts()) :
        ?>
        <section class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-foreground">
                    Latest Episodes
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <?php while ($episodes->have_posts()) : $episodes->the_post(); ?>
                        <div class="episode-card bg-card border border-border rounded-lg overflow-hidden hover:border-accent transition-all duration-300 hover:shadow-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="episode-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('card-image', array('class' => 'w-full h-48 object-cover')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="episode-content p-6">
                                <h3 class="episode-title mb-3">
                                    <a href="<?php the_permalink(); ?>" class="text-xl font-bold text-foreground hover:text-accent transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <div class="episode-excerpt text-muted-foreground mb-4">
                                    <?php the_excerpt(); ?>
                                </div>
                                
                                <div class="episode-meta text-sm text-muted-foreground">
                                    <?php echo get_the_date(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div class="text-center mt-12">
                    <a href="<?php echo home_url('/episodes'); ?>" class="btn btn-outline">
                        View All Episodes
                    </a>
                </div>
            </div>
        </section>
        <?php endif; wp_reset_postdata(); ?>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>