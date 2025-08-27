<?php
/**
 * Template part for displaying the hero section with 4 main areas
 * Used on the homepage to showcase TV Show, Games, Graphic Novel, and Lessons
 */
?>

<section class="hero-section relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="hero-background absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-background.jpg');">
        <div class="absolute inset-0 bg-background/60 backdrop-blur-sm"></div>
    </div>
    
    <!-- Animated Elements -->
    <div class="absolute inset-0">
        <?php for ($i = 0; $i < 20; $i++) : ?>
            <div class="absolute w-2 h-2 bg-primary-glow rounded-full animate-float opacity-30" 
                 style="left: <?php echo rand(0, 100); ?>%; top: <?php echo rand(0, 100); ?>%; animation-delay: <?php echo rand(0, 4); ?>s; animation-duration: <?php echo 3 + rand(0, 4); ?>s;"></div>
        <?php endfor; ?>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        <!-- Main Heading -->
        <div class="text-center mb-16">
            <div class="flex items-center justify-center mb-6">
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/WaterWays-Logo-Web.png" 
                    alt="<?php bloginfo('name'); ?> Logo" 
                    class="h-24 w-auto animate-slide-up"
                >
            </div>
            <p class="text-xl md:text-2xl text-muted-foreground max-w-3xl mx-auto leading-relaxed animate-slide-up">
                <?php 
                $hero_description = get_theme_mod('hero_description', 'Where Science Fiction Meets STEM Education in the Heart of Florida\'s Mangrove Ecosystem');
                echo esc_html($hero_description); 
                ?>
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center animate-slide-up">
                <a href="<?php echo home_url('/tv-show'); ?>" class="btn btn-primary bg-gradient-ocean hover:shadow-glow text-lg px-8 py-4 animate-glow inline-flex items-center justify-center rounded-md text-white font-medium transition-all duration-300">
                    <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h8m-9-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Watch Trailer
                </a>
                <a href="#explore" class="btn btn-outline border-accent text-accent hover:bg-accent hover:text-accent-foreground text-lg px-8 py-4 inline-flex items-center justify-center rounded-md font-medium transition-all duration-300">
                    Explore Universe
                </a>
            </div>
        </div>

        <!-- Four Hero Sections Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto" id="explore">
            <?php
            $hero_sections = array(
                array(
                    'title' => 'TV Show',
                    'description' => 'Experience the sci-fi mystery at Waterways Academy',
                    'image' => get_template_directory_uri() . '/assets/images/tv-show-hero.jpg',
                    'link' => home_url('/tv-show'),
                    'gradient' => 'from-primary to-accent'
                ),
                array(
                    'title' => 'Games',
                    'description' => 'Educational gaming in the mangrove ecosystem',
                    'image' => get_template_directory_uri() . '/assets/images/games-hero.jpg',
                    'link' => home_url('/games'),
                    'gradient' => 'from-seaweed to-primary'
                ),
                array(
                    'title' => 'Graphic Novel',
                    'description' => 'Interactive comic book experience',
                    'image' => get_template_directory_uri() . '/assets/images/graphic-novel-hero.jpg',
                    'link' => home_url('/graphic-novel'),
                    'gradient' => 'from-coral to-accent'
                ),
                array(
                    'title' => 'Lessons',
                    'description' => 'STEM curriculum for the classroom',
                    'image' => get_template_directory_uri() . '/assets/images/lessons-hero.jpg',
                    'link' => home_url('/lessons'),
                    'gradient' => 'from-accent to-deep-blue'
                )
            );

            foreach ($hero_sections as $section) : ?>
                <a href="<?php echo esc_url($section['link']); ?>" class="hero-card group block">
                    <div class="relative overflow-hidden h-80 bg-card/80 backdrop-blur-sm border border-border hover:border-accent transition-all duration-500 transform hover:scale-105 hover:shadow-card animate-slide-up rounded-lg">
                        <!-- Background Image -->
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('<?php echo esc_url($section['image']); ?>');">
                            <div class="absolute inset-0 bg-gradient-to-t <?php echo esc_attr($section['gradient']); ?> opacity-60 group-hover:opacity-40 transition-opacity duration-500"></div>
                        </div>
                        
                        <!-- Content Overlay -->
                        <div class="relative z-10 h-full flex flex-col justify-between p-6">
                            <!-- Icon -->
                            <div class="flex justify-center">
                                <div class="w-16 h-16 bg-background/20 backdrop-blur-md rounded-full flex items-center justify-center group-hover:bg-accent/80 transition-all duration-300">
                                    <?php
                                    // Icon based on section title
                                    switch ($section['title']) {
                                        case 'TV Show':
                                            echo '<svg class="w-8 h-8 text-foreground group-hover:text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h8m-9-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
                                            break;
                                        case 'Games':
                                            echo '<svg class="w-8 h-8 text-foreground group-hover:text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a1 1 0 01-1-1V9a1 1 0 011-1h1a2 2 0 100-4H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 011 1v1z"></path></svg>';
                                            break;
                                        case 'Graphic Novel':
                                            echo '<svg class="w-8 h-8 text-foreground group-hover:text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>';
                                            break;
                                        case 'Lessons':
                                            echo '<svg class="w-8 h-8 text-foreground group-hover:text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>';
                                            break;
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <!-- Text Content -->
                            <div class="text-center">
                                <h3 class="text-2xl font-bold text-foreground mb-2 group-hover:text-accent transition-colors duration-300">
                                    <?php echo esc_html($section['title']); ?>
                                </h3>
                                <p class="text-muted-foreground group-hover:text-foreground transition-colors duration-300">
                                    <?php echo esc_html($section['description']); ?>
                                </p>
                            </div>
                            
                            <!-- Hover Effect Border -->
                            <div class="absolute inset-0 border-2 border-transparent group-hover:border-accent transition-colors duration-300 rounded-lg"></div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Additional Info -->
        <div class="text-center mt-16 animate-slide-up">
            <p class="text-lg text-muted-foreground">
                A groundbreaking series featuring guest experts, interactive curriculum, and immersive gaming experiences
            </p>
        </div>
    </div>
</section>