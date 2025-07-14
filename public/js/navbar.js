/**
 * Navbar functionality for RasaBeauty Bar
 * Handles mobile menu toggle, scroll effects, and smooth scrolling
 */

document.addEventListener('DOMContentLoaded', function() {
    // Get DOM elements
    const menuButton = document.querySelector('.menu');
    const mobileNav = document.querySelector('.mobile-nav');
    const header = document.querySelector('header');
    const backToTop = document.querySelector('.back-to-top');
    const body = document.body;

    // Check if required elements exist
    if (!menuButton || !mobileNav) {
        console.warn('Menu button or mobile nav not found');
        return;
    }

    /**
     * Toggle mobile menu
     */
    function toggleMenu() {
        const isActive = mobileNav.classList.contains('active');
        
        if (isActive) {
            // Close menu
            closeMenu();
        } else {
            // Open menu
            openMenu();
        }
    }

    /**
     * Open mobile menu
     */
    function openMenu() {
        mobileNav.classList.add('active');
        body.classList.add('menu-open');
        menuButton.classList.add('active');
        
        // Prevent body scroll on mobile
        const scrollY = window.scrollY;
        body.style.position = 'fixed';
        body.style.top = `-${scrollY}px`;
        body.style.width = '100%';
    }

    /**
     * Close mobile menu
     */
    function closeMenu() {
        mobileNav.classList.remove('active');
        body.classList.remove('menu-open');
        menuButton.classList.remove('active');
        
        // Restore body scroll position
        const scrollY = body.style.top;
        body.style.position = '';
        body.style.top = '';
        body.style.width = '';
        if (scrollY) {
            window.scrollTo(0, parseInt(scrollY || '0') * -1);
        }
    }

    // Unified event handler for both click and touch
    let touchStarted = false;

    // Touch events for mobile devices
    menuButton.addEventListener('touchstart', function(e) {
        touchStarted = true;
        e.preventDefault();
        e.stopPropagation();
        // console.log('Menu button touched'); // Debug log
    });

    menuButton.addEventListener('touchend', function(e) {
        if (touchStarted) {
            e.preventDefault();
            e.stopPropagation();
            // console.log('Menu button touch ended'); // Debug log
            toggleMenu();
            touchStarted = false;
        }
    });

    // Click event for desktop and as fallback
    menuButton.addEventListener('click', function(e) {
        // Prevent double triggering on touch devices
        if (touchStarted) {
            return;
        }
        e.preventDefault();
        e.stopPropagation();
        // console.log('Menu button clicked'); // Debug log
        toggleMenu();
    });

    // Reset touch state if touch is cancelled
    menuButton.addEventListener('touchcancel', function(e) {
        touchStarted = false;
    });

    // Event listener for mobile nav links - close menu when link is clicked
    const mobileNavLinks = mobileNav.querySelectorAll('a');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Don't prevent default for external links
            if (!this.getAttribute('href').startsWith('#')) {
                closeMenu();
            }
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (mobileNav.classList.contains('active') && 
            !mobileNav.contains(e.target) && 
            !menuButton.contains(e.target)) {
            closeMenu();
        }
    });

    // Close menu when window is resized to desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024) {
            closeMenu();
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);
            
            if (target) {
                // Close mobile menu if open
                closeMenu();
                
                // Smooth scroll to target
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Header scroll effect
    let lastScrollY = window.scrollY;
    let ticking = false;

    function updateHeader() {
        const scrollY = window.scrollY;
        
        // Add/remove scrolled class
        if (scrollY > 50) {
            header?.classList.add('scrolled');
        } else {
            header?.classList.remove('scrolled');
        }

        // Show/hide back to top button
        if (scrollY > 300) {
            backToTop?.classList.add('active');
        } else {
            backToTop?.classList.remove('active');
        }

        lastScrollY = scrollY;
        ticking = false;
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    }

    window.addEventListener('scroll', requestTick);

    // Back to top functionality
    if (backToTop) {
        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Keyboard navigation support
    document.addEventListener('keydown', function(e) {
        // Close menu with Escape key
        if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
            closeMenu();
        }
    });

    // Focus management for accessibility
    menuButton.addEventListener('focus', function() {
        this.style.outline = '2px solid #f9c1e1';
    });

    menuButton.addEventListener('blur', function() {
        this.style.outline = 'none';
    });

    // Initialize header state
    updateHeader();
});