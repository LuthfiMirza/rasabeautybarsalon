<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RasaBeauty Bar | Reservation</title>
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
                    <span>RESERVATION</span>
                </h3>
            </div>
        </div>

        <!--back to top-->
        <a href="#showcaseID" class="back-to-top cursor-pointer"></a>

        <!--main section-->
        <main class="booking">
            <span class="submit-message"></span>

            <div class="book-form">
                <h1 class="text-white open-sans text-center">Reservation Form</h1>
                <form 
                    id="bookingForm"
                    class="open-sans grid-wrap"
                    action="{{ route('reservation.store') }}"
                    method="POST"
                >
                @csrf

                <fieldset>
                    <legend class="labels">Name:</legend>
                    <input type="text" name="name" placeholder="Enter your Name" class="input focused" id="name" required>
                    <span id="nameError" class="error">Invalid input</span>
                </fieldset>

                <fieldset>
                    <legend class="labels">Phone:</legend>
                    <input type="tel" name="phone" placeholder="Enter Phone" class="input focused" id="phone" required>
                    <span id="phoneError" class="error">Invalid number</span>
                </fieldset>

                <fieldset>
                    <legend class="labels">Email:</legend>
                    <input type="email" name="email" placeholder="Enter Email" class="input focused" id="email" required>
                    <span id="emailError" class="error">Invalid email</span>
                </fieldset>

                <fieldset>
                    <legend class="labels">Request Date:</legend>
                    <input type="date" name="date" placeholder="Date" class="input focused" id="date" required>
                    <span id="dateError" class="error">Invalid date</span>
                </fieldset>

                <fieldset>
                    <legend class="labels">Request Time:</legend>
                    <select name="time" class="input focused" id="time" required>
                        <option value="">Select Time</option>
                        <option value="09:00">09:00 AM</option>
                        <option value="10:00">10:00 AM</option>
                        <option value="11:00">11:00 AM</option>
                        <option value="12:00">12:00 PM</option>
                        <option value="13:00">01:00 PM</option>
                        <option value="14:00">02:00 PM</option>
                        <option value="15:00">03:00 PM</option>
                        <option value="16:00">04:00 PM</option>
                        <option value="17:00">05:00 PM</option>
                        <option value="18:00">06:00 PM</option>
                    </select>
                    <span id="timeError" class="error">Please select a time</span>
                </fieldset>

                <fieldset>
                    <legend class="labels">Service:</legend>
                    <select name="service" class="input focused" id="select" required>
                        <option value="">Please select a service</option>
                        <option value="Nail Art">Nail Art</option>
                        <option value="Remove Nail">Remove Nail</option>
                        <option value="Manicure">Manicure</option>
                        <option value="Pedicure">Pedicure</option>
                        <option value="Eyelash Rusian">Eyelash Russian</option>
                        <option value="Eyelash Japanase">Eyelash Japanese</option>
                        <option value="Remove Eyelash">Remove Eyelash</option>
                        <option value="Lashlift">Lashlift</option>
                    </select>
                    <span id="selectError" class="error">You must select a service</span>
                </fieldset>

                <button type="submit" class="btn btn-blue cursor-pointer" id="bookBtn">Make Reservation</button>
                
                </form>
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
        
        <!--javascript-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous"></script>
        <script src="js/global.js"></script>
        <script src="js/utils.js"></script>
        <script src="js/validation.js"></script>
        
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

            // Form validation improvements
            const form = document.getElementById('bookingForm');
            if (form) {
                form.addEventListener('submit', function(e) {
                    // Basic validation
                    const requiredFields = form.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.style.borderColor = '#ff0000';
                        } else {
                            field.style.borderColor = '';
                        }
                    });
                    
                    if (!isValid) {
                        e.preventDefault();
                        alert('Please fill in all required fields.');
                    }
                });
            }
        });
        </script>
    </body>
</html>