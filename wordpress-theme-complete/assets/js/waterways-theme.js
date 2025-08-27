/**
 * Waterways Theme JavaScript
 * 
 * Main JavaScript file for theme functionality
 */

(function() {
    'use strict';

    // Mobile menu functionality
    function initMobileMenu() {
        const mobileMenuToggle = document.querySelector('[onclick="toggleMobileMenu()"]');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        if (!mobileMenuToggle || !mobileMenu) return;

        // Add click event listener
        mobileMenuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            toggleMobileMenu();
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mobileMenu.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                if (mobileMenu.classList.contains('show')) {
                    toggleMobileMenu();
                }
            }
        });

        // Close mobile menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768 && mobileMenu.classList.contains('show')) {
                toggleMobileMenu();
            }
        });
    }

    // Toggle mobile menu function
    window.toggleMobileMenu = function() {
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        if (!mobileMenu || !menuIcon || !closeIcon) return;
        
        if (mobileMenu.classList.contains('show')) {
            mobileMenu.classList.remove('show');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        } else {
            mobileMenu.classList.add('show');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        }
    };

    // Smooth scrolling for anchor links
    function initSmoothScrolling() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Animation on scroll
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-slide-up');
                }
            });
        }, observerOptions);

        // Observe elements with animation classes
        const animatedElements = document.querySelectorAll('.wp-card, .animate-on-scroll');
        animatedElements.forEach(el => observer.observe(el));
    }

    // Floating particles effect
    function initFloatingParticles() {
        const heroSection = document.querySelector('.hero-section, section.relative.min-h-screen');
        if (!heroSection) return;

        // Add floating particles dynamically if needed
        const existingParticles = heroSection.querySelectorAll('.animate-float');
        if (existingParticles.length === 0) {
            const particleContainer = document.createElement('div');
            particleContainer.className = 'absolute inset-0';
            
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'absolute w-2 h-2 bg-primary-glow rounded-full animate-float opacity-30';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 4 + 's';
                particle.style.animationDuration = (3 + Math.random() * 4) + 's';
                
                particleContainer.appendChild(particle);
            }
            
            heroSection.appendChild(particleContainer);
        }
    }

    // Contact form handling
    function initContactForm() {
        const contactForm = document.getElementById('contact-form');
        if (!contactForm) return;

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            formData.append('action', 'waterways_contact_form');
            formData.append('nonce', waterways_ajax.nonce);

            // Show loading state
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;

            // Send AJAX request
            fetch(waterways_ajax.ajax_url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Handle success
                showNotification('Message sent successfully!', 'success');
                contactForm.reset();
            })
            .catch(error => {
                // Handle error
                showNotification('Error sending message. Please try again.', 'error');
                console.error('Contact form error:', error);
            })
            .finally(() => {
                // Reset button
                submitButton.textContent = originalText;
                submitButton.disabled = false;
            });
        });
    }

    // Show notification
    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transition-all duration-300 ${
            type === 'success' ? 'bg-seaweed text-primary-foreground' : 'bg-destructive text-destructive-foreground'
        }`;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => notification.classList.add('opacity-100'));
        
        // Remove after 5 seconds
        setTimeout(() => {
            notification.classList.add('opacity-0');
            setTimeout(() => notification.remove(), 300);
        }, 5000);
    }

    // Header scroll effect
    function initHeaderScrollEffect() {
        const header = document.querySelector('header');
        if (!header) return;

        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.classList.add('bg-card/80');
                header.classList.remove('bg-transparent');
            } else {
                header.classList.add('bg-transparent');
                header.classList.remove('bg-card/80');
            }
        });
    }

    // Lazy loading for images
    function initLazyLoading() {
        const images = document.querySelectorAll('img[data-src]');
        
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    observer.unobserve(img);
                }
            });
        });

        images.forEach(img => imageObserver.observe(img));
    }

    // Initialize all functions when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        initMobileMenu();
        initSmoothScrolling();
        initScrollAnimations();
        initFloatingParticles();
        initContactForm();
        initHeaderScrollEffect();
        initLazyLoading();
    });

    // Additional initialization for dynamic content
    window.addEventListener('load', function() {
        // Any additional initialization after full page load
        console.log('Waterways theme loaded successfully');
    });

})();