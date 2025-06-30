<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RasaBeauty Bar | About</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/other.css">
        <link rel="stylesheet" href="css/mobile-nav-fix.css">
        <link rel="stylesheet" href="css/breadcrumb-white.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="images/rasa.png">
    </head>
    <body>

        <div class="relative">
            <!-- Header Section -->
            <div class="other-showcase" id="showcaseID">
                <header>
                    <div class="container-lg header-container">
                        <a href="/" class="cursor-pointer logo">
                            <!-- Logo space if needed -->
                        </a>
                        
                        <!-- Mobile Menu Button -->
                        <button type="button" class="menu vertical-center cursor-pointer">
                            <img src="images/icons8-menu-48.png" alt="Menu">
                        </button>
                        
                        <!-- Desktop Navigation -->
                        <nav class="oswald-sans desktop-nav vertical-center">
                            <ul>
                                <li class="link-animate"><a href="/">HOME</a></li>
                                <li class="link-animate"><a href="/about">ABOUT</a></li>
                                <li class="link-animate"><a href="/#servicesID">SERVICES</a></li>
                                <li class="link-animate"><a href="/#contactID">CONTACT</a></li>
                                <li><a href="/book" class="btn btn-blue">RESERVATION</a></li>
                            </ul>
                        </nav>

                        <!-- Mobile Navigation -->
                        <nav class="mobile-nav">
                            <ul>
                                <li><a href="/">HOME</a></li>
                                <li><a href="/about">ABOUT</a></li>
                                <li><a href="/#servicesID">SERVICES</a></li>
                                <li><a href="/#contactID">CONTACT</a></li>
                                <li><a href="/book" class="btn btn-blue">RESERVATION</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
            </div>

            <!--section divider-->
            <div class="section-divider">
                <div>
                    <h3 class="oswald-sans">
                        <span><a href="/">HOME</a></span>
                        <span>\</span>
                        <span>ABOUT US</span>
                    </h3>
                </div>
            </div>

            <!--back to top-->
            <a href="#showcaseID" class="back-to-top cursor-pointer"></a>

            <!-- Main Content -->
            <main class="about-main">
                <div class="grid-wrap">
                    <img src="images/rb.jpg" class="img img-temp" alt="RasaBeauty Bar Interior">
                    <h1 class="playfair-serif">Welcome to RasaBeauty Bar</h1>
                    <div class="right-column">
                        <p class="open-sans">
                            Your go to destination for beautiful nails and stunning lashes. We're here to help you relax, feel confident, and glow from the inside out.
                            Our team of friendly professionals is dedicated to giving you the best beauty experience, using quality products and a personal touch in every service. From nail art to lash treatments, everything is done with care and creativity.
                        </p>
                        <p class="open-sans">
                            Our skilled beauty team offers everything from minimalist nail styles, 3D nail art, chrome, to seasonal designs along with lash lifts, natural look extensions, volume lashes, and more. 
                        </p>
                        <p class="open-sans">
                            Thank you for visiting RasaBeauty Bar Salon. We're honored to be part of your beauty journey. Sit back, relax, and let us take care of the little details that make a big difference. You deserve to feel beautiful every day, in every way.
                        </p>
                    </div>
                </div>
            </main>

            <!--footer-->
            <footer class="footer">
                <div class="footer-bg"></div>
                <div class="grid-wrap">
                    <div class="footer-section">
                        <h3 class="oswald-sans">Contact</h3>
                        <ul class="open-sans">
                            <li>
                                <img src="images/map.jpg" alt="Location" class="contact-icons">
                                Ruko Alpiana No 21<br>
                                <span>Jalan Boulevard, Kota Depok Jawa Barat</span>
                            </li>
                            <li>
                                <img src="images/tlfn.jpg" alt="Phone" class="contact-icons">
                                <a href="tel:087816658903" id="phone-number">087816658903</a>
                            </li>
                            <li class="oswald-sans">
                                <img src="images/ig.png" alt="Instagram" class="contact-icons">
                                <a href="https://www.instagram.com/rasabeautybar?igsh=NXZxZWszZmIzbWJr" id="email-link" target="_blank">@rasabeautybar</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-section">
                        <h3 class="oswald-sans">We are Open</h3>
                        <ul class="open-sans">
                            <li>Tuesday - Sunday 12 PM - 8 PM</li>
                            <li>Monday Closed</li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="wrap">
                        <div class="copyright">
                            <p class="open-sans">RasaBeauty Bar <span id="Year">© </span>2024</p>
                        </div>
                        <div class="footer-icons">
                            <!-- Social media icons can go here -->
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        
        <!--javascript-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous"></script>
        <script src="js/global.js"></script>
        
        <!-- Mobile Navigation Script -->
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('.menu');
            const mobileNav = document.querySelector('.mobile-nav');
            const body = document.body;

            // Check if elements exist
            if (!menuButton || !mobileNav) {
                console.error('Menu button or mobile nav not found');
                return;
            }

            // Fungsi untuk toggle menu
            function toggleMenu() {
                mobileNav.classList.toggle('active');
                body.classList.toggle('menu-open');
                
                // Add visual feedback to menu button
                menuButton.classList.toggle('active');
            }

            // Event listener untuk tombol menu
            menuButton.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                toggleMenu();
            });

            // Event listener untuk link di mobile nav - tutup menu saat link diklik
            const mobileNavLinks = mobileNav.querySelectorAll('a');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileNav.classList.remove('active');
                    body.classList.remove('menu-open');
                    menuButton.classList.remove('active');
                });
            });

            // Tutup menu saat klik di luar area menu
            document.addEventListener('click', function(e) {
                if (mobileNav.classList.contains('active') && 
                    !mobileNav.contains(e.target) && 
                    !menuButton.contains(e.target)) {
                    mobileNav.classList.remove('active');
                    body.classList.remove('menu-open');
                    menuButton.classList.remove('active');
                }
            });

            // Tutup menu saat window di-resize ke desktop
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 1024) {
                    mobileNav.classList.remove('active');
                    body.classList.remove('menu-open');
                    menuButton.classList.remove('active');
                }
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
        </script>
    </body>
</html>