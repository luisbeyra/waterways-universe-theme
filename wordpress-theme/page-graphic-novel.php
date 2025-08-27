<?php
/**
 * Template for Graphic Novel page
 */

get_header(); ?>

<main id="main-content" class="site-main pt-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20">
        
        <!-- Hero Section -->
        <section class="hero-section relative overflow-hidden rounded-lg mb-20" 
                 style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo get_template_directory_uri(); ?>/assets/images/graphic-novel-hero.jpg'); background-size: cover; background-position: center; min-height: 60vh;">
            <div class="relative z-10 flex items-center justify-center h-full py-20">
                <div class="text-center text-white">
                    <div class="w-20 h-20 bg-coral/20 backdrop-blur-md rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6zm2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H6z"/>
                        </svg>
                    </div>
                    <h1 class="text-5xl font-bold mb-6">Graphic Novel</h1>
                    <p class="text-xl max-w-3xl mx-auto leading-relaxed">
                        Dive into the visual storytelling of Waterways through our interactive comic book series
                    </p>
                </div>
            </div>
        </section>

        <!-- Content Section -->
        <div class="max-w-4xl mx-auto">
            <div class="prose prose-lg prose-invert max-w-none">
                <h2 class="text-3xl font-bold mb-6 text-foreground">Interactive Comic Experience</h2>
                <p class="text-muted-foreground mb-6">
                    The Waterways graphic novel series brings the mysteries of the mangrove ecosystem to life through stunning visual narratives. Follow our characters as they navigate the challenges of environmental science education in an immersive comic book format.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-12">
                    <div class="bg-card p-6 rounded-lg border border-border">
                        <h3 class="text-xl font-semibold mb-4 text-foreground">Visual Learning</h3>
                        <p class="text-muted-foreground">
                            Complex scientific concepts are made accessible through engaging illustrations and character-driven narratives.
                        </p>
                    </div>
                    <div class="bg-card p-6 rounded-lg border border-border">
                        <h3 class="text-xl font-semibold mb-4 text-foreground">Interactive Elements</h3>
                        <p class="text-muted-foreground">
                            Digital features allow readers to explore deeper into the science behind the story.
                        </p>
                    </div>
                </div>

                <h3 class="text-2xl font-bold mb-4 text-foreground">Coming Soon</h3>
                <p class="text-muted-foreground mb-8">
                    The first issue of the Waterways graphic novel series is currently in development. Stay tuned for updates on release dates and preview content.
                </p>

                <div class="text-center">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary bg-gradient-ocean hover:shadow-glow px-8 py-3">
                        Get Notified About Release
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>