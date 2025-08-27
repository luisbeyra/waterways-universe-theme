<?php
/**
 * Template for Lessons page
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
                <div class="absolute inset-0 bg-gradient-to-br from-deep-blue to-accent"></div>
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
                <a href="#curriculum" class="btn btn-primary animate-glow">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    Explore Curriculum
                </a>
            </div>
        </section>

        <!-- About Lessons -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-8 text-foreground">
                        STEM Curriculum for the Classroom
                    </h2>
                    <div class="prose prose-lg mx-auto text-muted-foreground">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Curriculum Features -->
        <section class="py-20 bg-card">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-foreground">
                    Curriculum Features
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="feature-card bg-card border border-border rounded-lg p-8 text-center hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-16 h-16 bg-gradient-ocean rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Standards Aligned</h3>
                        <p class="text-muted-foreground">
                            All content meets state and national STEM education standards for K-12 learning.
                        </p>
                    </div>
                    
                    <div class="feature-card bg-card border border-border rounded-lg p-8 text-center hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-16 h-16 bg-gradient-mangrove rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Ready-to-Use</h3>
                        <p class="text-muted-foreground">
                            Complete lesson plans with activities, assessments, and teacher guides included.
                        </p>
                    </div>
                    
                    <div class="feature-card bg-card border border-border rounded-lg p-8 text-center hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Progress Tracking</h3>
                        <p class="text-muted-foreground">
                            Built-in assessment tools help track student progress and understanding.
                        </p>
                    </div>
                    
                    <div class="feature-card bg-card border border-border rounded-lg p-8 text-center hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-16 h-16 bg-deep-blue rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Collaborative Learning</h3>
                        <p class="text-muted-foreground">
                            Group activities and projects that encourage peer-to-peer learning.
                        </p>
                    </div>
                    
                    <div class="feature-card bg-card border border-border rounded-lg p-8 text-center hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-16 h-16 bg-coral rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Real-World Applications</h3>
                        <p class="text-muted-foreground">
                            Connect classroom learning to real environmental and scientific challenges.
                        </p>
                    </div>
                    
                    <div class="feature-card bg-card border border-border rounded-lg p-8 text-center hover:border-accent transition-all duration-300 hover:shadow-card">
                        <div class="w-16 h-16 bg-seaweed rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-foreground">Digital Resources</h3>
                        <p class="text-muted-foreground">
                            Access via Colēgia platform with interactive tools and multimedia content.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lesson Plans -->
        <?php
        $lessons = new WP_Query(array(
            'post_type' => 'lesson_plan',
            'posts_per_page' => 6,
            'post_status' => 'publish'
        ));
        
        if ($lessons->have_posts()) :
        ?>
        <section id="curriculum" class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-foreground">
                    Featured Lesson Plans
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <?php while ($lessons->have_posts()) : $lessons->the_post(); ?>
                        <div class="lesson-card bg-card border border-border rounded-lg overflow-hidden hover:border-accent transition-all duration-300 hover:shadow-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="lesson-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('card-image', array('class' => 'w-full h-48 object-cover')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="lesson-content p-6">
                                <div class="lesson-grade mb-3">
                                    <span class="inline-block bg-accent text-accent-foreground px-2 py-1 rounded-full text-xs font-semibold">
                                        Grade <?php echo get_post_meta(get_the_ID(), 'grade_level', true) ?: 'K-12'; ?>
                                    </span>
                                    <span class="inline-block bg-muted text-muted-foreground px-2 py-1 rounded-full text-xs font-medium ml-2">
                                        <?php echo get_post_meta(get_the_ID(), 'subject_area', true) ?: 'STEM'; ?>
                                    </span>
                                </div>
                                
                                <h3 class="lesson-title mb-3">
                                    <a href="<?php the_permalink(); ?>" class="text-xl font-bold text-foreground hover:text-accent transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <div class="lesson-excerpt text-muted-foreground mb-4">
                                    <?php the_excerpt(); ?>
                                </div>
                                
                                <div class="lesson-meta flex items-center justify-between text-sm text-muted-foreground">
                                    <span><?php echo get_post_meta(get_the_ID(), 'duration', true) ?: '45 min'; ?></span>
                                    <a href="<?php the_permalink(); ?>" class="text-accent hover:text-accent-foreground font-medium">
                                        View Lesson →
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div class="text-center mt-12">
                    <a href="<?php echo home_url('/lesson-plans'); ?>" class="btn btn-outline">
                        View All Lessons
                    </a>
                </div>
            </div>
        </section>
        <?php endif; wp_reset_postdata(); ?>

        <!-- Academica Partnership -->
        <section class="py-20 bg-card">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-8 text-foreground">
                        Educational Partnership
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="text-left">
                            <h3 class="text-2xl font-semibold mb-4 text-foreground">Academica Collaboration</h3>
                            <p class="text-muted-foreground leading-relaxed mb-4">
                                Our partnership with Academica brings decades of educational expertise to the Waterways project. 
                                Together, we've developed curriculum that meets rigorous academic standards while maintaining 
                                the excitement and engagement of our entertainment content.
                            </p>
                            <p class="text-muted-foreground leading-relaxed">
                                Through the Colēgia platform, educators have access to comprehensive resources, assessment tools, 
                                and professional development opportunities that make implementing Waterways content seamless and effective.
                            </p>
                        </div>
                        <div class="bg-gradient-ocean rounded-lg p-8 text-center">
                            <svg class="w-16 h-16 text-primary-foreground mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h4 class="text-xl font-semibold text-primary-foreground mb-2">
                                Award-Winning Education
                            </h4>
                            <p class="text-primary-foreground/90">
                                Recognized for excellence in innovative STEM education and environmental awareness programs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>