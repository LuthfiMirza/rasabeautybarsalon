/**
 * Simple Mobile Navigation Script
 * Reliable and straightforward mobile menu functionality
 */

(function() {
    'use strict';
    
    let isMenuOpen = false;
    let scrollPosition = 0;
    
    function initMobileNav() {
        console.log('Initializing simple mobile navigation...');
        
        const menuButton = document.querySelector('.menu');
        const mobileNav = document.querySelector('.mobile-nav');
        const body = document.body;
        
        if (!menuButton || !mobileNav) {
            console.warn('Menu button or mobile nav not found');
            return;
        }
        
        console.log('Menu button found:', menuButton);
        console.log('Mobile nav found:', mobileNav);
        
        // Open menu function
        function openMenu() {
            console.log('Opening menu...');
            
            // Store current scroll position
            scrollPosition = window.pageYOffset;
            
            // Add classes
            mobileNav.classList.add('active');
            body.classList.add('menu-open');
            menuButton.classList.add('active');
            
            // Prevent body scroll
            body.style.position = 'fixed';
            body.style.top = `-${scrollPosition}px`;
            body.style.width = '100%';
            
            isMenuOpen = true;
            console.log('Menu opened');
        }
        
        // Close menu function
        function closeMenu() {
            console.log('Closing menu...');
            
            // Remove classes
            mobileNav.classList.remove('active');
            body.classList.remove('menu-open');
            menuButton.classList.remove('active');
            
            // Restore body scroll
            body.style.position = '';
            body.style.top = '';
            body.style.width = '';
            window.scrollTo(0, scrollPosition);
            
            isMenuOpen = false;
            console.log('Menu closed');
        }
        
        // Toggle menu function
        function toggleMenu() {
            console.log('Toggling menu. Current state:', isMenuOpen);
            if (isMenuOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        }
        
        // Menu button click handler
        function handleMenuClick(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Menu button clicked');
            toggleMenu();
        }
        
        // Menu button touch handler (for mobile)
        function handleMenuTouch(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Menu button touched');
            toggleMenu();
        }
        
        // Outside click handler
        function handleOutsideClick(e) {
            if (isMenuOpen && 
                !mobileNav.contains(e.target) && 
                !menuButton.contains(e.target)) {
                console.log('Clicked outside menu');
                closeMenu();
            }
        }
        
        // Mobile nav link click handler
        function handleNavLinkClick(e) {
            console.log('Nav link clicked:', e.target.href);
            // Close menu when any link is clicked
            setTimeout(closeMenu, 100);
        }
        
        // Escape key handler
        function handleKeyDown(e) {
            if (e.key === 'Escape' && isMenuOpen) {
                console.log('Escape key pressed');
                closeMenu();
            }
        }
        
        // Resize handler
        function handleResize() {
            if (window.innerWidth >= 1024 && isMenuOpen) {
                console.log('Resized to desktop, closing menu');
                closeMenu();
            }
        }
        
        // Add event listeners
        menuButton.addEventListener('click', handleMenuClick);
        menuButton.addEventListener('touchstart', handleMenuTouch, { passive: false });
        
        // Add click listeners to nav links
        const navLinks = mobileNav.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', handleNavLinkClick);
        });
        
        // Add global event listeners
        document.addEventListener('click', handleOutsideClick);
        document.addEventListener('keydown', handleKeyDown);
        window.addEventListener('resize', handleResize);
        
        // Expose functions for debugging
        window.mobileNavDebug = {
            openMenu: openMenu,
            closeMenu: closeMenu,
            toggleMenu: toggleMenu,
            isOpen: () => isMenuOpen
        };
        
        console.log('Mobile navigation initialized successfully');
        console.log('Debug functions available: window.mobileNavDebug');
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMobileNav);
    } else {
        initMobileNav();
    }
    
})();