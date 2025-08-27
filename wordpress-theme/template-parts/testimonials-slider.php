<?php
/**
 * Template part for displaying testimonials slider
 * Shows feedback from educators and students
 */
?>

<section class="testimonials-slider py-20 bg-card">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6 text-foreground">What Educators Say</h2>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                Hear from teachers and students who have experienced the transformative power of Waterways education
            </p>
        </div>
        
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $testimonials = array(
                    array(
                        'quote' => 'Waterways has completely transformed how my students engage with STEM subjects. The integration of storytelling with scientific concepts is brilliant.',
                        'name' => 'Dr. Sarah Martinez',
                        'title' => 'High School Biology Teacher',
                        'school' => 'Miami-Dade County Schools',
                        'rating' => 5
                    ),
                    array(
                        'quote' => 'The gaming components make complex engineering principles accessible to middle school students. They\'re learning without realizing it!',
                        'name' => 'James Thompson',
                        'title' => 'STEM Coordinator', 
                        'school' => 'Broward County Schools',
                        'rating' => 5
                    ),
                    array(
                        'quote' => 'As an environmental science educator, I love how Waterways promotes awareness of Florida\'s ecosystems while teaching cutting-edge science.',
                        'name' => 'Maria Rodriguez',
                        'title' => 'Environmental Science Teacher',
                        'school' => 'Palm Beach County Schools',
                        'rating' => 5
                    ),
                    array(
                        'quote' => 'The curriculum resources are incredibly comprehensive. Everything we need to implement STEM education effectively is provided.',
                        'name' => 'David Chen',
                        'title' => 'Science Department Head',
                        'school' => 'Orange County Schools',
                        'rating' => 5
                    ),
                    array(
                        'quote' => 'My students are more excited about science class than ever before. The TV series and games create real engagement.',
                        'name' => 'Lisa Johnson',
                        'title' => '8th Grade Science Teacher',
                        'school' => 'Hillsborough County Schools',
                        'rating' => 5
                    ),
                    array(
                        'quote' => 'Waterways bridges the gap between entertainment and education perfectly. It\'s exactly what modern classrooms need.',
                        'name' => 'Robert Kim',
                        'title' => 'Technology Integration Specialist',
                        'school' => 'Pinellas County Schools',
                        'rating' => 5
                    )
                );

                foreach ($testimonials as $index => $testimonial) : ?>
                    <div class="testimonial-card group">
                        <div class="bg-background border border-border hover:border-accent rounded-lg p-6 h-full transition-all duration-300 hover:shadow-card transform hover:-translate-y-1">
                            
                            <!-- Star Rating -->
                            <div class="flex items-center mb-4">
                                <?php for ($i = 0; $i < $testimonial['rating']; $i++) : ?>
                                    <svg class="w-5 h-5 text-accent fill-current" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                <?php endfor; ?>
                            </div>
                            
                            <!-- Quote -->
                            <blockquote class="text-muted-foreground leading-relaxed mb-6 italic">
                                "<?php echo esc_html($testimonial['quote']); ?>"
                            </blockquote>
                            
                            <!-- Author Info -->
                            <div class="border-t border-border pt-4">
                                <div class="flex items-center space-x-3">
                                    <!-- Avatar Placeholder -->
                                    <div class="w-12 h-12 bg-gradient-ocean rounded-full flex items-center justify-center text-white font-bold">
                                        <?php echo esc_html(substr($testimonial['name'], 0, 1)); ?>
                                    </div>
                                    
                                    <div>
                                        <h4 class="font-semibold text-foreground group-hover:text-accent transition-colors duration-300">
                                            <?php echo esc_html($testimonial['name']); ?>
                                        </h4>
                                        <p class="text-sm text-muted-foreground">
                                            <?php echo esc_html($testimonial['title']); ?>
                                        </p>
                                        <p class="text-xs text-muted-foreground">
                                            <?php echo esc_html($testimonial['school']); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Partnership Logos -->
        <div class="mt-16 text-center">
            <h3 class="text-2xl font-bold mb-8 text-foreground">Trusted by Educational Leaders</h3>
            <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                <!-- Placeholder for partner logos -->
                <div class="bg-muted rounded-lg p-4 w-32 h-16 flex items-center justify-center">
                    <span class="text-sm text-muted-foreground">Academica</span>
                </div>
                <div class="bg-muted rounded-lg p-4 w-32 h-16 flex items-center justify-center">
                    <span class="text-sm text-muted-foreground">Colēgia</span>
                </div>
                <div class="bg-muted rounded-lg p-4 w-32 h-16 flex items-center justify-center">
                    <span class="text-sm text-muted-foreground">Florida DOE</span>
                </div>
                <div class="bg-muted rounded-lg p-4 w-32 h-16 flex items-center justify-center">
                    <span class="text-sm text-muted-foreground">Miami-Dade</span>
                </div>
            </div>
        </div>
        
        <!-- Call to Action -->
        <div class="text-center mt-16">
            <h3 class="text-2xl font-bold mb-4 text-foreground">Join the Waterways Community</h3>
            <p class="text-muted-foreground mb-8 max-w-2xl mx-auto">
                Be part of the educational revolution. Bring engaging STEM content to your classroom today.
            </p>
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary bg-gradient-ocean hover:shadow-glow px-8 py-3 rounded-md text-white font-medium transition-all duration-300">
                Request Demo
            </a>
        </div>
    </div>
</section>