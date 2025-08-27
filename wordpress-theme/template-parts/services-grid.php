<?php
/**
 * Template part for displaying services grid section
 * Shows the main offerings of Waterways
 */
?>

<section class="services-grid py-20 bg-card">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6 text-foreground">What We Offer</h2>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                Comprehensive educational entertainment that transforms how students learn STEM subjects
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
            <?php
            $services = array(
                array(
                    'title' => 'Educational TV Series',
                    'description' => 'Network-quality sci-fi series set in Waterways Academy with integrated STEM curriculum and expert cameos.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>',
                    'color' => 'bg-gradient-ocean'
                ),
                array(
                    'title' => 'Interactive Gaming',
                    'description' => 'Educational games in the mangrove ecosystem teaching drone technology, biology, and engineering principles.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a1 1 0 01-1-1V9a1 1 0 011-1h1a2 2 0 100-4H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 011 1v1z"></path></svg>',
                    'color' => 'bg-gradient-mangrove'
                ),
                array(
                    'title' => 'Digital Comic Books',
                    'description' => 'Interactive graphic novels that expand the Waterways universe with beautiful artwork and engaging storylines.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>',
                    'color' => 'bg-accent'
                ),
                array(
                    'title' => 'Classroom Curriculum',
                    'description' => 'Comprehensive lesson plans and resources developed by Academica educators for K-12 STEM education.',
                    'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>',
                    'color' => 'bg-seaweed'
                )
            );

            foreach ($services as $index => $service) : ?>
                <div class="service-card group">
                    <div class="bg-card border border-border hover:border-accent rounded-lg p-8 h-full transition-all duration-300 hover:shadow-card transform hover:-translate-y-2">
                        <div class="<?php echo esc_attr($service['color']); ?> w-20 h-20 rounded-full flex items-center justify-center text-white mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <?php echo $service['icon']; ?>
                        </div>
                        
                        <h3 class="text-xl font-bold text-center mb-4 text-foreground group-hover:text-accent transition-colors duration-300">
                            <?php echo esc_html($service['title']); ?>
                        </h3>
                        
                        <p class="text-muted-foreground text-center leading-relaxed">
                            <?php echo esc_html($service['description']); ?>
                        </p>
                        
                        <div class="mt-6 text-center">
                            <a href="#" class="inline-flex items-center text-accent hover:text-accent-foreground font-medium transition-colors duration-300">
                                Learn More
                                <svg class="ml-2 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Call to Action -->
        <div class="text-center mt-16">
            <h3 class="text-2xl font-bold mb-4 text-foreground">Ready to Transform Education?</h3>
            <p class="text-muted-foreground mb-8 max-w-2xl mx-auto">
                Join thousands of educators who are already using Waterways to inspire the next generation of scientists and innovators.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary bg-gradient-ocean hover:shadow-glow px-8 py-3 rounded-md text-white font-medium transition-all duration-300">
                    Get Started Today
                </a>
                <a href="<?php echo home_url('/lessons'); ?>" class="btn btn-outline border-accent text-accent hover:bg-accent hover:text-accent-foreground px-8 py-3 rounded-md font-medium transition-all duration-300">
                    View Curriculum
                </a>
            </div>
        </div>
    </div>
</section>