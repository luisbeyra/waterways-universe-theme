/**
 * Waterways Theme JavaScript
 * Main JavaScript functionality for the Waterways WordPress theme
 */

jQuery(document).ready(function($) {
    
    // Mobile Menu Toggle Function
    window.toggleMobileMenu = function() {
        const mobileMenu = document.querySelector('.mobile-menu');
        const menuIcon = document.querySelector('.menu-icon');
        const closeIcon = document.querySelector('.close-icon');
        
        if (mobileMenu && menuIcon && closeIcon) {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        }
    };
    
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    
    // Add scroll effects to header
    $(window).scroll(function() {
        const header = $('.site-header');
        if ($(window).scrollTop() > 50) {
            header.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
        }
    });
    
    // Initialize animations on scroll
    function initScrollAnimations() {
        const animatedElements = $('.animate-slide-up');
        
        $(window).scroll(function() {
            animatedElements.each(function() {
                const elementTop = $(this).offset().top;
                const elementBottom = elementTop + $(this).outerHeight();
                const viewportTop = $(window).scrollTop();
                const viewportBottom = viewportTop + $(window).height();
                
                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).addClass('animated');
                }
            });
        });
    }
    
    // Initialize on page load
    initScrollAnimations();
    
    // Hero section particle animation
    function initParticleAnimation() {
        const particles = $('.particle');
        particles.each(function(index) {
            const delay = Math.random() * 4000;
            const duration = 3000 + Math.random() * 4000;
            
            $(this).css({
                'animation-delay': delay + 'ms',
                'animation-duration': duration + 'ms'
            });
        });
    }
    
    initParticleAnimation();
    
    // Form handling (if contact forms exist)
    $('.contact-form').on('submit', function(e) {
        const form = $(this);
        const submitButton = form.find('button[type="submit"]');
        
        submitButton.prop('disabled', true).addClass('loading');
        
        // Re-enable after 3 seconds (adjust based on actual form processing time)
        setTimeout(function() {
            submitButton.prop('disabled', false).removeClass('loading');
        }, 3000);
    });
    
    // Add loading states to buttons with external links
    $('a[href^="http"]:not([href*="' + window.location.hostname + '"])').on('click', function() {
        $(this).addClass('loading');
    });
    
});

// Ensure functions are available globally
window.waterways = {
    toggleMobileMenu: window.toggleMobileMenu
};