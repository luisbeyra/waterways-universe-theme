/**
 * Waterways Theme JavaScript
 * Main script file for the Waterways WordPress theme
 */

(function($) {
    'use strict';

    /**
     * Document Ready
     */
    $(document).ready(function() {
        // Initialize theme functionality
        initMobileMenu();
        initAnimations();
        initSmoothScrolling();
        initContactForm();
        initSearchEnhancements();
        initVideoPlayers();
        initCardHovers();
    });

    /**
     * Mobile Menu Functionality
     */
    function initMobileMenu() {
        const mobileToggle = $('#mobile-menu-toggle');
        const mobileMenu = $('#mobile-menu');
        
        if (mobileToggle.length && mobileMenu.length) {
            mobileToggle.on('click', function(e) {
                e.preventDefault();
                mobileMenu.toggleClass('hidden');
                
                // Toggle aria attributes
                const isExpanded = mobileMenu.hasClass('hidden') ? 'false' : 'true';
                mobileToggle.attr('aria-expanded', isExpanded);
            });
            
            // Close mobile menu when clicking outside
            $(document).on('click', function(e) {
                if (!mobileToggle.is(e.target) && !mobileMenu.is(e.target) && mobileMenu.has(e.target).length === 0) {
                    mobileMenu.addClass('hidden');
                    mobileToggle.attr('aria-expanded', 'false');
                }
            });
            
            // Close mobile menu on escape key
            $(document).on('keydown', function(e) {
                if (e.key === 'Escape' || e.keyCode === 27) {
                    mobileMenu.addClass('hidden');
                    mobileToggle.attr('aria-expanded', 'false');
                }
            });
        }
    }

    /**
     * Initialize Animations
     */
    function initAnimations() {
        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-slide-up');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe elements with animation class
        $('.animate-on-scroll').each(function() {
            observer.observe(this);
        });

        // Floating particles animation
        initFloatingParticles();
    }

    /**
     * Floating Particles Animation
     */
    function initFloatingParticles() {
        const heroSection = $('.hero-section, .relative.min-h-screen');
        
        if (heroSection.length) {
            // Create floating particles dynamically
            for (let i = 0; i < 15; i++) {
                const particle = $('<div></div>');
                particle.addClass('absolute w-2 h-2 bg-primary-glow rounded-full animate-float opacity-30');
                particle.css({
                    left: Math.random() * 100 + '%',
                    top: Math.random() * 100 + '%',
                    animationDelay: Math.random() * 4 + 's',
                    animationDuration: (3 + Math.random() * 4) + 's'
                });
                heroSection.append(particle);
            }
        }
    }

    /**
     * Smooth Scrolling
     */
    function initSmoothScrolling() {
        $('a[href*="#"]:not([href="#"])').on('click', function(e) {
            const target = $(this.hash);
            
            if (target.length) {
                e.preventDefault();
                
                $('html, body').animate({
                    scrollTop: target.offset().top - 80 // Account for fixed header
                }, 800, 'easeInOutCubic');
            }
        });
    }

    /**
     * Contact Form Enhancement
     */
    function initContactForm() {
        const contactForm = $('.contact-form, #contact-form');
        
        if (contactForm.length) {
            contactForm.on('submit', function(e) {
                e.preventDefault();
                
                const form = $(this);
                const submitBtn = form.find('button[type="submit"], input[type="submit"]');
                const originalText = submitBtn.text();
                
                // Show loading state
                submitBtn.prop('disabled', true).text('Sending...');
                
                // Prepare form data
                const formData = new FormData(this);
                formData.append('action', 'waterways_contact_form');
                formData.append('waterways_nonce', waterways_ajax.nonce);
                
                // Submit via AJAX
                $.ajax({
                    url: waterways_ajax.ajax_url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        showNotification('Message sent successfully!', 'success');
                        form[0].reset();
                    },
                    error: function() {
                        showNotification('Error sending message. Please try again.', 'error');
                    },
                    complete: function() {
                        submitBtn.prop('disabled', false).text(originalText);
                    }
                });
            });
        }
    }

    /**
     * Search Enhancements
     */
    function initSearchEnhancements() {
        const searchForm = $('.search-form');
        const searchField = $('.search-field');
        
        if (searchField.length) {
            // Add search suggestions (placeholder for future enhancement)
            searchField.on('input', function() {
                const query = $(this).val();
                if (query.length > 2) {
                    // Future: Implement live search suggestions
                    console.log('Search query:', query);
                }
            });
            
            // Clear search on escape
            searchField.on('keydown', function(e) {
                if (e.key === 'Escape' || e.keyCode === 27) {
                    $(this).val('').blur();
                }
            });
        }
    }

    /**
     * Video Player Enhancements
     */
    function initVideoPlayers() {
        $('.video-placeholder, .aspect-video').on('click', function() {
            const container = $(this);
            
            // Future: Replace with actual video embed
            showNotification('Video player will be integrated here.', 'info');
        });
    }

    /**
     * Card Hover Effects
     */
    function initCardHovers() {
        $('.post-card, .game-card, .lesson-card, .episode-card').hover(
            function() {
                $(this).addClass('hover-scale');
            },
            function() {
                $(this).removeClass('hover-scale');
            }
        );
    }

    /**
     * Show Notification
     */
    function showNotification(message, type = 'info') {
        const notification = $(`
            <div class="notification fixed top-4 right-4 z-50 bg-card border border-border rounded-lg p-4 shadow-lg max-w-sm ${type === 'success' ? 'border-green-500' : type === 'error' ? 'border-red-500' : 'border-blue-500'}">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        ${type === 'success' ? 
                            '<svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>' :
                            type === 'error' ?
                            '<svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>' :
                            '<svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
                        }
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-foreground">${message}</p>
                    </div>
                    <div class="ml-auto pl-3">
                        <button class="notification-close text-muted-foreground hover:text-foreground">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        `);
        
        $('body').append(notification);
        
        // Auto-hide after 5 seconds
        setTimeout(function() {
            notification.fadeOut(function() {
                notification.remove();
            });
        }, 5000);
        
        // Manual close
        notification.find('.notification-close').on('click', function() {
            notification.fadeOut(function() {
                notification.remove();
            });
        });
    }

    /**
     * Header Scroll Effect
     */
    $(window).on('scroll', function() {
        const header = $('.site-header');
        const scrollTop = $(window).scrollTop();
        
        if (scrollTop > 100) {
            header.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
        }
    });

    /**
     * Back to Top Button
     */
    const backToTop = $('<button class="back-to-top fixed bottom-8 right-8 bg-gradient-ocean text-primary-foreground p-3 rounded-full shadow-lg hover:shadow-glow transition-all duration-300 z-40 opacity-0 pointer-events-none"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg></button>');
    
    $('body').append(backToTop);
    
    $(window).on('scroll', function() {
        const scrollTop = $(window).scrollTop();
        
        if (scrollTop > 500) {
            backToTop.removeClass('opacity-0 pointer-events-none');
        } else {
            backToTop.addClass('opacity-0 pointer-events-none');
        }
    });
    
    backToTop.on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
    });

    /**
     * Custom easing function for smooth scrolling
     */
    $.easing.easeInOutCubic = function (x, t, b, c, d) {
        if ((t/=d/2) < 1) return c/2*t*t*t + b;
        return c/2*((t-=2)*t*t + 2) + b;
    };

})(jQuery);