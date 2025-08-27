<?php
/**
 * Template part for displaying the hero section with 4 main areas
 * Used on the homepage to showcase TV Show, Games, Graphic Novel, and Lessons
 */
?>

<section class="hero-section relative" style="min-height: 100vh; display: flex; align-items: center; justify-content: center; overflow: hidden;">
    <!-- Background Image with Overlay -->
    <div class="hero-background absolute" style="top: 0; left: 0; right: 0; bottom: 0; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-background.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute" style="top: 0; left: 0; right: 0; bottom: 0; background-color: hsl(var(--background) / 0.6); backdrop-filter: blur(4px);"></div>
    </div>
    
    <!-- Animated Elements -->
    <div class="absolute" style="top: 0; left: 0; right: 0; bottom: 0;">
        <?php for ($i = 0; $i < 20; $i++) : ?>
            <div class="absolute animate-float" 
                 style="width: 8px; height: 8px; background-color: hsl(var(--primary-glow)); border-radius: 50%; opacity: 0.3; left: <?php echo rand(0, 100); ?>%; top: <?php echo rand(0, 100); ?>%; animation-delay: <?php echo rand(0, 4); ?>s; animation-duration: <?php echo 3 + rand(0, 4); ?>s;"></div>
        <?php endfor; ?>
    </div>

    <!-- Content -->
    <div class="relative z-10 container" style="padding-top: 5rem;">
        <!-- Main Heading -->
        <div style="text-align: center; margin-bottom: 4rem;">
            <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/WaterWays-Logo-Web.png" 
                    alt="<?php bloginfo('name'); ?> Logo" 
                    class="animate-slide-up"
                    style="height: 6rem; width: auto;"
                >
            </div>
            <p class="text-xl text-muted-foreground animate-slide-up" style="max-width: 48rem; margin: 0 auto; line-height: 1.625;">
                <?php 
                $hero_description = get_theme_mod('hero_description', 'Where Science Fiction Meets STEM Education in the Heart of Florida\'s Mangrove Ecosystem');
                echo esc_html($hero_description); 
                ?>
            </p>
            <div style="margin-top: 2rem; display: flex; flex-direction: column; gap: 1rem; justify-content: center; align-items: center;">
                <a href="<?php echo home_url('/tv-show'); ?>" class="btn btn-primary animate-glow" style="font-size: 1.125rem; padding: 1rem 2rem; display: inline-flex; align-items: center; justify-content: center;">
                    <svg style="margin-right: 0.5rem; width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h8m-9-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Watch Trailer
                </a>
                <a href="#explore" class="btn" style="font-size: 1.125rem; padding: 1rem 2rem; display: inline-flex; align-items: center; justify-content: center; border: 1px solid hsl(var(--accent)); color: hsl(var(--accent)); background: transparent;">
                    Explore Universe
                </a>
            </div>
        </div>

        <!-- Four Hero Sections Grid -->
        <div class="grid gap-8" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); max-width: 72rem; margin: 0 auto;" id="explore">
            <?php
            $hero_sections = array(
                array(
                    'title' => 'TV Show',
                    'description' => 'Experience the sci-fi mystery at Waterways Academy',
                    'image' => get_template_directory_uri() . '/assets/images/tv-show-hero.jpg',
                    'link' => home_url('/tv-show'),
                    'gradient' => 'linear-gradient(to bottom right, hsl(var(--primary)), hsl(var(--accent)))'
                ),
                array(
                    'title' => 'Games',
                    'description' => 'Educational gaming in the mangrove ecosystem',
                    'image' => get_template_directory_uri() . '/assets/images/games-hero.jpg',
                    'link' => home_url('/games'),
                    'gradient' => 'linear-gradient(to bottom right, hsl(var(--seaweed)), hsl(var(--primary)))'
                ),
                array(
                    'title' => 'Graphic Novel',
                    'description' => 'Interactive comic book experience',
                    'image' => get_template_directory_uri() . '/assets/images/graphic-novel-hero.jpg',
                    'link' => home_url('/graphic-novel'),
                    'gradient' => 'linear-gradient(to bottom right, hsl(var(--coral)), hsl(var(--accent)))'
                ),
                array(
                    'title' => 'Lessons',
                    'description' => 'STEM curriculum for the classroom',
                    'image' => get_template_directory_uri() . '/assets/images/lessons-hero.jpg',
                    'link' => home_url('/lessons'),
                    'gradient' => 'linear-gradient(to bottom right, hsl(var(--accent)), hsl(var(--deep-blue)))'
                )
            );

            foreach ($hero_sections as $section) : ?>
                <a href="<?php echo esc_url($section['link']); ?>" class="hero-card" style="display: block; text-decoration: none;">
                    <div class="relative" style="overflow: hidden; height: 20rem; background-color: hsl(var(--card) / 0.8); backdrop-filter: blur(4px); border: 1px solid hsl(var(--border)); border-radius: 0.5rem; transition: var(--transition-smooth); cursor: pointer;">
                        <!-- Background Image -->
                        <div class="absolute" style="top: 0; left: 0; right: 0; bottom: 0; background-image: url('<?php echo esc_url($section['image']); ?>'); background-size: cover; background-position: center; transition: transform 0.7s;">
                            <div class="absolute" style="top: 0; left: 0; right: 0; bottom: 0; background: <?php echo esc_attr($section['gradient']); ?>; opacity: 0.6; transition: opacity 0.5s;"></div>
                        </div>
                        
                        <!-- Content Overlay -->
                        <div class="relative z-10" style="height: 100%; display: flex; flex-direction: column; justify-content: space-between; padding: 1.5rem;">
                            <!-- Icon -->
                            <div style="display: flex; justify-content: center;">
                                <div style="width: 4rem; height: 4rem; background-color: hsl(var(--background) / 0.2); backdrop-filter: blur(4px); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: var(--transition-smooth);">
                                    <?php
                                    // Icon based on section title
                                    switch ($section['title']) {
                                        case 'TV Show':
                                            echo '<svg style="width: 2rem; height: 2rem; color: hsl(var(--foreground));" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h8m-9-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
                                            break;
                                        case 'Games':
                                            echo '<svg style="width: 2rem; height: 2rem; color: hsl(var(--foreground));" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a1 1 0 01-1-1V9a1 1 0 011-1h1a2 2 0 100-4H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 011 1v1z"></path></svg>';
                                            break;
                                        case 'Graphic Novel':
                                            echo '<svg style="width: 2rem; height: 2rem; color: hsl(var(--foreground));" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>';
                                            break;
                                        case 'Lessons':
                                            echo '<svg style="width: 2rem; height: 2rem; color: hsl(var(--foreground));" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>';
                                            break;
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <!-- Text Content -->
                            <div style="text-align: center;">
                                <h3 style="font-size: 1.5rem; font-weight: 700; color: hsl(var(--foreground)); margin-bottom: 0.5rem; transition: color 0.3s;">
                                    <?php echo esc_html($section['title']); ?>
                                </h3>
                                <p style="color: hsl(var(--muted-foreground)); transition: color 0.3s;">
                                    <?php echo esc_html($section['description']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Additional Info -->
        <div style="text-align: center; margin-top: 4rem;" class="animate-slide-up">
            <p style="font-size: 1.125rem; color: hsl(var(--muted-foreground));">
                A groundbreaking series featuring guest experts, interactive curriculum, and immersive gaming experiences
            </p>
        </div>
    </div>
</section>

<style>
.hero-card:hover .relative {
    transform: scale(1.05);
    border-color: hsl(var(--accent));
    box-shadow: var(--shadow-card);
}

.hero-card:hover .absolute div {
    opacity: 0.4;
}

.hero-card:hover h3 {
    color: hsl(var(--accent));
}

.hero-card:hover p {
    color: hsl(var(--foreground));
}

@media (min-width: 768px) {
    .grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (min-width: 1024px) {
    .grid {
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }
    
    .flex {
        flex-direction: row;
    }
}
</style>