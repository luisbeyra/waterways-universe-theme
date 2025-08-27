<?php
/**
 * Template for Games page
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
                <div class="absolute inset-0 bg-gradient-mangrove"></div>
            <?php endif; ?>
            
            <div class="relative z-10 container mx-auto px-4 text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 text-foreground">
                    <?php the_title(); ?>
                </h1>
                <?php if (has_excerpt()) : ?>
                    <p class="text-xl text-muted-foreground max-w-3xl mx-auto mb-8">
                        <?php the_excerpt(); ?>
                    </p>
                <?php endif; ?>
                <a href="#games-collection" class="btn btn-primary animate-glow">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a1 1 0 01-1-1V9a1 1 0 011-1h1a2 2 0 100-4H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 011 1v1z"></path>
                    </svg>
                    Play Now
                </a>
            </div>
        </section>

        <!-- About Games -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-8 text-foreground">
                        Educational Gaming Experience
                    </h2>
                    <div class="prose prose-lg mx-auto text-muted-foreground">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Game Features -->
        <section class="py-20 bg-card">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-foreground">
                    Game Features
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                    <div class="feature-card text-center">
                        <div class="w-16 h-16 bg-gradient-ocean rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Interactive Learning</h3>
                        <p class="text-muted-foreground">
                            Hands-on activities that make STEM concepts come alive through gameplay.
                        </p>
                    </div>
                    
                    <div class="feature-card text-center">
                        <div class="w-16 h-16 bg-gradient-mangrove rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Ecosystem Exploration</h3>
                        <p class="text-muted-foreground">
                            Discover Florida's mangrove ecosystem through immersive virtual environments.
                        </p>
                    </div>
                    
                    <div class="feature-card text-center">
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Progress Tracking</h3>
                        <p class="text-muted-foreground">
                            Advanced analytics help teachers track student progress and understanding.
                        </p>
                    </div>
                    
                    <div class="feature-card text-center">
                        <div class="w-16 h-16 bg-deep-blue rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Collaborative Play</h3>
                        <p class="text-muted-foreground">
                            Multiplayer modes encourage teamwork and peer-to-peer learning.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Games Collection -->
        <?php
        $games = new WP_Query(array(
            'post_type' => 'game_module',
            'posts_per_page' => 6,
            'post_status' => 'publish'
        ));
        
        if ($games->have_posts()) :
        ?>
        <section id="games-collection" class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-foreground">
                    Game Collection
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <?php while ($games->have_posts()) : $games->the_post(); ?>
                        <div class="game-card bg-card border border-border rounded-lg overflow-hidden hover:border-accent transition-all duration-300 hover:shadow-card group">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="game-thumbnail relative overflow-hidden">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('card-image', array('class' => 'w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300')); ?>
                                    </a>
                                    <div class="absolute inset-0 bg-gradient-ocean opacity-0 group-hover:opacity-80 transition-opacity duration-300 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <div class="game-content p-6">
                                <h3 class="game-title mb-3">
                                    <a href="<?php the_permalink(); ?>" class="text-xl font-bold text-foreground hover:text-accent transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <div class="game-excerpt text-muted-foreground mb-4">
                                    <?php the_excerpt(); ?>
                                </div>
                                
                                <div class="game-meta flex items-center justify-between">
                                    <span class="text-sm text-muted-foreground">Educational Game</span>
                                    <a href="<?php the_permalink(); ?>" class="text-accent hover:text-accent-foreground font-medium text-sm">
                                        Play Now →
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div class="text-center mt-12">
                    <a href="<?php echo home_url('/game-modules'); ?>" class="btn btn-outline">
                        View All Games
                    </a>
                </div>
            </div>
        </section>
        <?php endif; wp_reset_postdata(); ?>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>