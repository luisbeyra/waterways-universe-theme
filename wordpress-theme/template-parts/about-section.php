<?php
/**
 * Template part for displaying about section
 * Brief overview of Waterways project
 */
?>

<section class="about-section py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Content Column -->
                <div class="space-y-6">
                    <div>
                        <h2 class="text-4xl font-bold mb-6 text-foreground">
                            About Waterways
                        </h2>
                        <p class="text-xl text-muted-foreground leading-relaxed mb-6">
                            A revolutionary approach to STEM education that seamlessly blends entertainment with learning through the power of storytelling.
                        </p>
                    </div>
                    
                    <div class="space-y-4">
                        <p class="text-muted-foreground leading-relaxed">
                            Set in the fictional Waterways Academy in Florida, our series combines mystery, suspense, and science fiction to create engaging content that makes STEM subjects accessible and exciting for students of all ages.
                        </p>
                        
                        <p class="text-muted-foreground leading-relaxed">
                            Developed in partnership with Academica educators, Waterways offers a comprehensive curriculum accessible through classroom use and online via the Colēgia platform, enriching each episode's educational value.
                        </p>
                        
                        <p class="text-muted-foreground leading-relaxed">
                            Our unique approach features guest cameos from renowned experts and celebrities, extended educational interviews, and immersive gaming experiences set in Florida's beautiful mangrove ecosystem.
                        </p>
                    </div>
                    
                    <!-- Features List -->
                    <div class="space-y-3 mt-8">
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-accent rounded-full mt-2 flex-shrink-0"></div>
                            <span class="text-muted-foreground">Network-quality TV series with integrated STEM curriculum</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-accent rounded-full mt-2 flex-shrink-0"></div>
                            <span class="text-muted-foreground">Educational gaming ecosystem in mangrove environment</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-accent rounded-full mt-2 flex-shrink-0"></div>
                            <span class="text-muted-foreground">Interactive graphic novels with engaging storylines</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-accent rounded-full mt-2 flex-shrink-0"></div>
                            <span class="text-muted-foreground">Comprehensive classroom resources and lesson plans</span>
                        </div>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mt-8">
                        <a href="<?php echo home_url('/about'); ?>" class="btn btn-primary bg-gradient-ocean hover:shadow-glow px-6 py-3 rounded-md text-white font-medium transition-all duration-300">
                            Learn More About Us
                        </a>
                        <a href="<?php echo home_url('/tv-show'); ?>" class="btn btn-outline border-accent text-accent hover:bg-accent hover:text-accent-foreground px-6 py-3 rounded-md font-medium transition-all duration-300">
                            Watch Trailer
                        </a>
                    </div>
                </div>
                
                <!-- Image Column -->
                <div class="relative">
                    <!-- Main Image -->
                    <div class="relative z-10">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/tv-show-hero.jpg" 
                            alt="Waterways Academy - STEM Education in Action"
                            class="rounded-lg shadow-card w-full h-auto"
                            loading="lazy"
                        >
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-ocean rounded-full opacity-20 animate-float"></div>
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-mangrove rounded-full opacity-15 animate-wave"></div>
                    
                    <!-- Stats Overlay -->
                    <div class="absolute -bottom-8 left-8 bg-card border border-border rounded-lg p-6 shadow-card backdrop-blur-sm">
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div>
                                <div class="text-2xl font-bold text-accent">K-12</div>
                                <div class="text-sm text-muted-foreground">Grade Levels</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-accent">STEM</div>
                                <div class="text-sm text-muted-foreground">Focused</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mission Statement -->
        <div class="max-w-4xl mx-auto text-center mt-20">
            <div class="bg-gradient-hero rounded-lg p-8 text-foreground">
                <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                <p class="text-lg leading-relaxed opacity-90">
                    "To transform education by creating engaging experiences that inspire students to explore science, 
                    technology, engineering, and mathematics while promoting environmental awareness and conservation 
                    of Florida's unique ecosystems."
                </p>
            </div>
        </div>
    </div>
</section>