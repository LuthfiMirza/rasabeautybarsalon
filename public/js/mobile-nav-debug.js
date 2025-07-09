/**
 * Mobile Navigation Debug Script
 * Helps identify and fix mobile navigation issues
 */

document.addEventListener('DOMContentLoaded', function() {
    console.log('Mobile nav debug script loaded');
    
    // Find all menu buttons and mobile navs
    const menuButtons = document.querySelectorAll('.menu');
    const mobileNavs = document.querySelectorAll('.mobile-nav');
    
    console.log('Found menu buttons:', menuButtons.length);
    console.log('Found mobile navs:', mobileNavs.length);
    
    // Log elements
    menuButtons.forEach((btn, index) => {
        console.log(`Menu button ${index}:`, btn);
        console.log(`Menu button ${index} computed styles:`, window.getComputedStyle(btn));
    });
    
    mobileNavs.forEach((nav, index) => {
        console.log(`Mobile nav ${index}:`, nav);
        console.log(`Mobile nav ${index} computed styles:`, window.getComputedStyle(nav));
    });
    
    // Add click listeners with debugging
    menuButtons.forEach((btn, index) => {
        btn.addEventListener('click', function(e) {
            console.log(`Menu button ${index} clicked`);
            console.log('Event:', e);
            
            const mobileNav = document.querySelector('.mobile-nav');
            if (mobileNav) {
                const isActive = mobileNav.classList.contains('active');
                console.log('Mobile nav active before toggle:', isActive);
                
                mobileNav.classList.toggle('active');
                document.body.classList.toggle('menu-open');
                btn.classList.toggle('active');
                
                console.log('Mobile nav active after toggle:', mobileNav.classList.contains('active'));
                console.log('Body has menu-open:', document.body.classList.contains('menu-open'));
                console.log('Button has active:', btn.classList.contains('active'));
            } else {
                console.error('Mobile nav not found!');
            }
        });
    });
    
    // Check for CSS conflicts
    function checkCSSConflicts() {
        const mobileNav = document.querySelector('.mobile-nav');
        if (mobileNav) {
            const styles = window.getComputedStyle(mobileNav);
            console.log('Mobile nav CSS check:');
            console.log('Position:', styles.position);
            console.log('Z-index:', styles.zIndex);
            console.log('Left:', styles.left);
            console.log('Width:', styles.width);
            console.log('Height:', styles.height);
            console.log('Display:', styles.display);
            console.log('Visibility:', styles.visibility);
            console.log('Transform:', styles.transform);
        }
        
        const menuBtn = document.querySelector('.menu');
        if (menuBtn) {
            const btnStyles = window.getComputedStyle(menuBtn);
            console.log('Menu button CSS check:');
            console.log('Position:', btnStyles.position);
            console.log('Z-index:', btnStyles.zIndex);
            console.log('Top:', btnStyles.top);
            console.log('Right:', btnStyles.right);
            console.log('Display:', btnStyles.display);
            console.log('Visibility:', btnStyles.visibility);
        }
    }
    
    // Run CSS check after a delay
    setTimeout(checkCSSConflicts, 1000);
    
    // Monitor for class changes
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                console.log('Class changed on:', mutation.target);
                console.log('New classes:', mutation.target.className);
            }
        });
    });
    
    // Observe body and mobile nav for class changes
    observer.observe(document.body, { attributes: true });
    mobileNavs.forEach(nav => {
        observer.observe(nav, { attributes: true });
    });
    
    // Test function to manually trigger menu
    window.testMobileMenu = function() {
        console.log('Testing mobile menu...');
        const mobileNav = document.querySelector('.mobile-nav');
        const menuBtn = document.querySelector('.menu');
        
        if (mobileNav && menuBtn) {
            mobileNav.classList.add('active');
            document.body.classList.add('menu-open');
            menuBtn.classList.add('active');
            console.log('Mobile menu should now be visible');
        } else {
            console.error('Mobile nav or menu button not found');
        }
    };
    
    // Add to window for debugging
    window.closeMobileMenu = function() {
        console.log('Closing mobile menu...');
        const mobileNav = document.querySelector('.mobile-nav');
        const menuBtn = document.querySelector('.menu');
        
        if (mobileNav && menuBtn) {
            mobileNav.classList.remove('active');
            document.body.classList.remove('menu-open');
            menuBtn.classList.remove('active');
            console.log('Mobile menu should now be hidden');
        }
    };
    
    console.log('Debug functions available: testMobileMenu(), closeMobileMenu()');
});