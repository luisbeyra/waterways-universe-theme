<?php
/**
 * Hero Section Template Part
 * 
 * Displays the main hero section with 4 interactive cards
 */
?>

<section class="hero-section relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-background.jpg')">
        <div class="absolute inset-0 bg-background/60 backdrop-blur-sm"></div>
    </div>
    
    <!-- Animated Elements -->
    <div class="absolute inset-0">
        <?php for ($i = 0; $i < 20; $i++) : ?>
            <div class="absolute w-2 h-2 bg-primary-glow rounded-full animate-float opacity-30"
                 style="left: <?php echo rand(0, 100); ?>%; 
                        top: <?php echo rand(0, 100); ?>%; 
                        animation-delay: <?php echo rand(0, 4000); ?>ms;
                        animation-duration: <?php echo (3000 + rand(0, 4000)); ?>ms;">
            </div>
        <?php endfor; ?>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        <!-- Main Heading -->
        <div class="text-center mb-16">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/waterways-logo.png" 
                 alt="Waterways Logo" 
                 class="h-24 md:h-32 mx-auto mb-6 animate-slide-up">
            <p class="text-xl md:text-2xl text-muted-foreground max-w-3xl mx-auto leading-relaxed animate-slide-up">
                Where Science Fiction Meets STEM Education in the Heart of Florida's Mangrove Ecosystem
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center animate-slide-up">
                <a href="#" class="btn btn-lg btn-primary bg-gradient-ocean hover:shadow-glow text-lg px-8 py-4 animate-glow">
                    <svg class="icon mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Watch Trailer
                </a>
                <a href="<?php echo home_url('/about'); ?>" class="btn btn-outline btn-lg border-accent text-accent hover:bg-accent hover:text-accent-foreground text-lg px-8 py-4">
                    Explore Universe
                </a>
            </div>
        </div>

        <!-- Four Hero Sections Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <?php 
            $hero_sections = array(
                array(
                    'title' => 'TV Show',
                    'description' => 'Experience the sci-fi mystery at Waterways Academy',
                    'image' => 'tv-show-hero.jpg',
                    'link' => home_url('/tv-show'),
                    'gradient' => 'from-primary to-accent',
                    'icon' => 'M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                ),
                array(
                    'title' => 'Games',
                    'description' => 'Educational gaming in the mangrove ecosystem',
                    'image' => 'games-hero.jpg',
                    'link' => home_url('/games'),
                    'gradient' => 'from-seaweed to-primary',
                    'icon' => 'M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 000 1.788l4 2.001V13a1 1 0 00-1.447-.894l-4 2A1 1 0 0011 15v2z M7 7a1 1 0 100-2H5a1 1 0 000 2h2z M7 11a1 1 0 100-2H5a1 1 0 000 2h2z M7 15a1 1 0 100-2H5a1 1 0 000 2h2z'
                ),
                array(
                    'title' => 'Graphic Novel',
                    'description' => 'Interactive comic book experience',
                    'image' => 'graphic-novel-hero.jpg',
                    'link' => home_url('/graphic-novel'),
                    'gradient' => 'from-coral to-accent',
                    'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'
                ),
                array(
                    'title' => 'Lessons',
                    'description' => 'STEM curriculum for the classroom',
                    'image' => 'lessons-hero.jpg',
                    'link' => home_url('/lessons'),
                    'gradient' => 'from-accent to-deep-blue',
                    'icon' => 'M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z'
                )
            );
            
            foreach ($hero_sections as $index => $section) : ?>
                <a href="<?php echo esc_url($section['link']); ?>" class="group">
                    <div class="wp-card relative overflow-hidden h-80 bg-card/80 backdrop-blur-sm border-border hover:border-accent transition-all duration-500 transform hover:scale-105 hover:shadow-card animate-slide-up">
                        <!-- Background Image -->
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $section['image']; ?>')">
                            <div class="absolute inset-0 bg-gradient-to-t <?php echo $section['gradient']; ?> opacity-60 group-hover:opacity-40 transition-opacity duration-500"></div>
                        </div>
                        
                        <!-- Content Overlay -->
                        <div class="relative z-10 h-full flex flex-col justify-between p-6">
                            <!-- Icon -->
                            <div class="flex justify-center">
                                <div class="w-16 h-16 bg-background/20 backdrop-blur-md rounded-full flex items-center justify-center group-hover:bg-accent/80 transition-all duration-300">
                                    <svg class="icon icon-lg text-foreground group-hover:text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $section['icon']; ?>"></path>
                                    </svg>
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