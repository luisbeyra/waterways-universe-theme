<?php
/**
 * Hero Section Template Part
 * Displays the main hero section with 4 content areas - matches React version exactly
 */
?>

<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div 
        class="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-background.jpg');"
    >
        <div class="absolute inset-0 bg-background/60 backdrop-blur-sm"></div>
    </div>
    
    <!-- Animated Elements -->
    <div class="absolute inset-0">
        <?php for ($i = 0; $i < 20; $i++) : ?>
            <div
                class="absolute w-2 h-2 bg-primary-glow rounded-full animate-float opacity-30"
                style="left: <?php echo rand(0, 100); ?>%; top: <?php echo rand(0, 100); ?>%; animation-delay: <?php echo rand(0, 4000); ?>ms; animation-duration: <?php echo rand(3000, 7000); ?>ms;"
            ></div>
        <?php endfor; ?>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        <!-- Main Heading -->
        <div class="text-center mb-16">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            if ($custom_logo_id) {
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-24 md:h-32 mx-auto mb-6 animate-slide-up" />';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/waterways-logo.png" alt="' . get_bloginfo('name') . '" class="h-24 md:h-32 mx-auto mb-6 animate-slide-up" />';
            }
            ?>
            
            <p class="text-xl md:text-2xl text-muted-foreground max-w-3xl mx-auto leading-relaxed animate-slide-up">
                Where Science Fiction Meets STEM Education in the Heart of Florida's Mangrove Ecosystem
            </p>
            
            <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center animate-slide-up">
                <a href="<?php echo home_url('/tv-show'); ?>" class="btn btn-primary bg-gradient-ocean hover:shadow-glow text-lg px-8 py-4 animate-glow inline-flex items-center justify-center">
                    <svg class="mr-2" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    Watch Trailer
                </a>
                <a href="<?php echo home_url('/about'); ?>" class="btn btn-outline border-accent text-accent hover:bg-accent hover:text-accent-foreground text-lg px-8 py-4 inline-flex items-center justify-center">
                    Explore Universe
                </a>
            </div>
        </div>

        <!-- Four Hero Sections Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <?php
            // Define hero sections - matching React version exactly
            $hero_sections = array(
                array(
                    'title' => 'TV Show',
                    'description' => 'Experience the sci-fi mystery at Waterways Academy',
                    'icon' => 'tv',
                    'image' => get_template_directory_uri() . '/assets/images/tv-show-hero.jpg',
                    'link' => home_url('/tv-show'),
                    'gradient' => 'from-primary to-accent'
                ),
                array(
                    'title' => 'Games',
                    'description' => 'Educational gaming in the mangrove ecosystem',
                    'icon' => 'gamepad',
                    'image' => get_template_directory_uri() . '/assets/images/games-hero.jpg',
                    'link' => home_url('/games'),
                    'gradient' => 'from-seaweed to-primary'
                ),
                array(
                    'title' => 'Graphic Novel',
                    'description' => 'Interactive comic book experience',
                    'icon' => 'book',
                    'image' => get_template_directory_uri() . '/assets/images/graphic-novel-hero.jpg',
                    'link' => home_url('/graphic-novel'),
                    'gradient' => 'from-coral to-accent'
                ),
                array(
                    'title' => 'Lessons',
                    'description' => 'STEM curriculum for the classroom',
                    'icon' => 'graduation',
                    'image' => get_template_directory_uri() . '/assets/images/lessons-hero.jpg',
                    'link' => home_url('/lessons'),
                    'gradient' => 'from-accent to-deep-blue'
                )
            );
            ?>
            
            <?php foreach ($hero_sections as $index => $section) : ?>
                <a href="<?php echo esc_url($section['link']); ?>" class="group">
                    <div class="relative overflow-hidden h-80 bg-card/80 backdrop-blur-sm border border-border hover:border-accent transition-all duration-500 transform hover:scale-105 hover:shadow-card animate-slide-up rounded-lg">
                        <!-- Background Image -->
                        <div 
                            class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" 
                            style="background-image: url('<?php echo esc_url($section['image']); ?>');"
                        >
                            <div class="absolute inset-0 bg-gradient-to-t <?php echo esc_attr($section['gradient']); ?> opacity-60 group-hover:opacity-40 transition-opacity duration-500"></div>
                        </div>
                        
                        <!-- Content Overlay -->
                        <div class="relative z-10 h-full flex flex-col justify-between p-6">
                            <!-- Icon -->
                            <div class="flex justify-center">
                                <div class="w-16 h-16 bg-background/20 backdrop-blur-md rounded-full flex items-center justify-center group-hover:bg-accent/80 transition-all duration-300">
                                    <?php 
                                    // SVG icons for each section
                                    switch ($section['icon']) {
                                        case 'tv':
                                            echo '<svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24" class="text-foreground group-hover:text-accent-foreground"><path d="M8 5v14l11-7z"/></svg>';
                                            break;
                                        case 'gamepad':
                                            echo '<svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24" class="text-foreground group-hover:text-accent-foreground"><path d="M6 9a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h1v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H6z"/><circle cx="9" cy="12" r="1"/><circle cx="15" cy="12" r="1"/></svg>';
                                            break;
                                        case 'book':
                                            echo '<svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24" class="text-foreground group-hover:text-accent-foreground"><path d="M4 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6zm2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H6z"/></svg>';
                                            break;
                                        case 'graduation':
                                            echo '<svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24" class="text-foreground group-hover:text-accent-foreground"><path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6L23 9l-11-6zM18.82 9L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/></svg>';
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