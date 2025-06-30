<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RasaBeauty Bar | Home</title>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>
        <link rel="shortcut icon" type="image/png" href="images/rasa.png">
    </head>
    
    <body>

    <!--showcase-->
    <div class="showcase" id="showcaseID">

        <!--header-->
        <header>
            <div class="container-lg header-container">
                <a href="index" class="cursor-pointer">
                    
                </a>
                <button type="button" class="menu vertical-center cursor-pointer"><img src="images/icons8-menu-48.png" alt="Menu"></button>
                <nav class="oswald-sans desktop-nav vertical-center">
                    <ul>
                        <li class="link-animate"><a href="/">HOME</a></li>
                        <li class="link-animate"><a href="/about">ABOUT</a></li>
                        <li class="link-animate"><a href="/#servicesID">SERVICES</a></li>
                        <li class="link-animate"><a href="/#contactID">CONTACT</a></li>
                        <li><a href="/book" class="btn btn-blue">RESERVATION</a></li>
                    </ul>
                </nav>

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

        <!--carousel-->
        <div class="fade">
            <div><img src="images/atas.png" alt="Image 1">
                <p class="text-white center-all text-center playfair-serif showcase-text"><span class="first-child">Pretty Nails.</span></br><span class="last-child">Perfect Lashes</span>
                    
                </p>
            </div>
        </div>
    </div>

        <!--main content-->
        <main class="main">

             <!--about-->
             <div class="section about">
                <h1 class="title text-center">About Our Salon</h1>
                <div class="divider"></div>
                <div class="container-lg grid-wrap">
                    <img src="images/rbb1.jpg" class="img">
                    <div class="about-text">
                        <p class="open-sans text-gray p-text">Welcome to RasaBeauty Bar Salon, where beauty meets elegance and self-care is celebrated in every detail. Located at the heart of Depok, our salon is a cozy and modern space designed to help you relax, feel confident, and express your unique style. We specialize in nail art, lash lift, eyelash extensions, and more all crafted with love and precision.</p>

                        <p class="open-sans text-gray p-text">Our mission is to enhance your natural beauty through safe, high-quality treatments tailored just for you. Every service is delivered by trained professionals who care about your comfort and satisfaction. Let us pamper you from fingertips to lashes. Because at RasaBeauty Bar Salon, every detail matters and you deserve to feel beautiful, every single day.</p>
                        <a href="#showcaseID" class="back-to-top cursor-pointer">
                        </a>
                        <a href="about" class="btn btn-white text-decoration text-center">READ MORE</a>
                    </div>
                </div>
            </div>

            <!--side image 1-->
            <img src="images/side_img1.png" alt="Side Image - Purple Flower" class="side-img" id="side-img1">

            <!--services-->
            <div class="section services" id="servicesID">
                <h1 class="title text-center">Our Services</h1>
                <div class="divider"></div>
                <div class="grid-wrap">
                   <div class="service-item">
                    <h1 class="playfair-serif light text-center">NAIL ART</h1>
                    <p class="open-sans p-text text-center">Shiny nails, happy heart! a touch of color, a spark of joy, and a boost of confidence all in one.</p>
            
            
                       <div class="table-wrap" style="max-height: none; opacity: 1; margin: 20px 0;">
                        <table class="oswald-sans blue-table">
                            <tr>
                                <td>Menicure + Nail art all Design</td>
                                <td>125 K</td>
                            </tr>
                            <tr>
                                <td>Nail Extentsion</td>
                                <td>160 K</td>
                            </tr>
                            <tr>
                                <td>Pollygel Extentsion</td>
                                <td>300 K</td>
                            </tr>
                            <tr>
                                <td>Art Extentsion</td>
                                <td>3-30 K</td>
                            </tr>
                            <tr>
                                <td>Aksesoris Nail Premium</td>
                                <td>5-30 K/Finger</td>
                            </tr>
                            <tr>
                                <td>Remove Nail</td>
                                <td>5 K/Finger</td>
                            </tr>
                            <tr>
                                <td>Remove Extentsion</td>
                                <td>10 K/Finger</td>
                            </tr>
                            <tr>
                                <td>Embossed Flower</td>
                                <td>5 K/Petals</td>
                            </tr>
                            <tr>
                                <td>Nail Serum</td>
                                <td>100 K</td>
                            </tr>
               
                        </table>
                       </div>
            
            
                       <button type="button" class="oswald-sans read-more-btn">READ MORE</button>
                   </div>
                   <div class="service-item">
                       <h1 class="playfair-serif light text-center">MENICURE PEDICURE</h1>
                       <p class="open-sans p-text text-center">We provide quick and effective polishes that do not require full cuticle maintenance!</p>

                       <div class="table-wrap">
                        <table class="oswald-sans gray-table">
                            <tr>
                                <td>Menicure</td>
                                <td>100 K</td>
                            </tr>
                            <tr>
                                <td>Pedicure</td>
                                <td>100 K</td>
                            </tr>
                            <tr>
                                <td>Foot Spa</td>
                                <td>150 K</td>
                            </tr>
                            
                        </table>
                       </div>

                       <button type="button" class="oswald-sans service-btn" data-service="menicure">READ MORE</button>
                   </div>
                   <div class="service-item">
                       <h1 class="playfair-serif light text-center">EYELASH</h1>
                       <p class="open-sans p-text text-center">Eyelashes may be small, but when lifted, curled, or enhanced, they make your eyes sparkle and your confidence glow.</p>

                       <div class="table-wrap">
                        <table class="oswald-sans blue-table">
                            <tr>
                                <td>Eyelash Rusian</td>
                                <td>125 K</td>
                            </tr>
                            <tr>
                                <td>Eyelash Japanase</td>
                                <td>190 K</td>
                            </tr>
                            <tr>
                                <td>Eyelash Natural</td>
                                <td>150 K</td>
                            </tr>
                            <tr>
                                <td>Retouch Eyelash</td>
                                <td>75 K</td>
                            </tr>
                            <tr>
                                <td>Remove Eyelash</td>
                                <td>50 K</td>
                            </tr>
                        
                        </table>
                       </div>

                       <button type="button" class="oswald-sans service-btn" data-service="eyelash">READ MORE</button>
                   </div>
                   <div class="service-item">
                       <h1 class="playfair-serif light text-center">LASHLIFT</h1>
                       <p class="open-sans p-text text-center">A lash lift is a little magic that opens your eyes and brightens your look, giving you that fresh, awake glow every single day!</p>

                       <div class="table-wrap">
                        <table class="oswald-sans gray-table">
                            <tr>
                                <td>Lashlift</td>
                                <td>125 k</td>
                            </tr>
            
                        </table>
                       </div>

                       <button type="button" class="oswald-sans service-btn" data-service="lashlift">READ MORE</button>
                   </div>
                </div>
            </div>

            <!--gallery-->
            <div class="section gallery">
                <h1 class="title text-center">Gallery</h1>
                <div class="divider"></div>
                <div class="container-lg grid-wrap gallery-wrap flex">
                    <div class="flex">
                        <div class="img-wrap overflow-hidden">
                            <img src="images/r2.jpg" class="img cursor-pointer">
                        </div>
                        <div class="img-wrap overflow-hidden">
                            <img src="images/r1.jpg" class="img cursor-pointer">
                        </div>
                        <div class="img-wrap overflow-hidden">
                            <img src="images/r3.jpg" class="img cursor-pointer">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="img-wrap overflow-hidden">
                            <img src="images/lash1.jpg" class="img cursor-pointer">
                        </div>
                        <div class="img-wrap overflow-hidden">
                            <img src="images/lash2.jpg" class="img cursor-pointer">
                        </div>
                        <div class="img-wrap overflow-hidden">
                            <img src="images/bulu.jpg" class="img cursor-pointer">
                        </div>
                    </div>
                </div>
            </div>

            <!--modal-->
            <div id="modalBackground" class="cursor-pointer"></div>
            <img src="" alt="Selected Image" class="center-all" id="image">

            <!--book-->
            

            <!--contact-->
            <div class="section contact" id="contactID">
                <h1 class="title text-center">Contact Us</h1>
                <div class="divider"></div>
                <div class="grid-wrap">
                    <form method="GET" action="{{ route('reservation.store') }}">
                    

                        <div>
                            <span id="nameError" class="error">Invalid name</span>
                            <input type="text" id="name" name="Name" placeholder="Enter Name" class="input focused">
                            <span id="emailError" class="error">Invalid email</span>
                            <input type="email" id="email" name="Email" placeholder="Enter Email" class="input focused">
                            <span id="subjectError" class="error">Cannot be blank</span>
                            <input type="text" id="subject" placeholder="Subject" class="input focused" name="Subject">
                            <span id="messageError" class="error">Cannot be blank</span>
                            <textarea id="message" placeholder="Enter Message" class="input focused" name="Message"></textarea>
                            <button type="submit" name="submit" class="btn btn-blue2 text-center cursor-pointer" id="submit">SEND YOUR MESSAGE</button>

                            <span class="submit-message"></span>
                        </div>
                    </form>
                    <div class="map">
                        <div class="container-lg">
                            <div id="mapid"></div>
                        </div>
                    </div>
                </div>
                <script>
                    var mymap = L.map('mapid').setView([-6.418861, 106.825972], 15);
                
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; OpenStreetMap contributors'
                    }).addTo(mymap);
                
                    L.marker([-6.418861, 106.825972]).addTo(mymap)
                        .bindPopup('Lokasi Kami di Sini')
                        .openPopup();
                </script>
                
            </div>

        </main>

        <!--footer-->
        <footer class="footer">
            <!--side image 2-->
            
            <div class="footer-bg"></div>
            <div class="grid-wrap">
                <div class="footer-section">
                    <h3 class="oswald-sans">Contact</h3>
                    <ul class="open-sans">
                        <li><img src="images/map.jpg" alt="Location" class="contact-icons">Ruko Alpiana No 21</br><span>Jalan Boulevard, Kota Depok Jawa Barat</span></li>
                        <li><img src="images/tlfn.jpg" alt="Phone" class="contact-icons"><a href="tel:484-329-7989" id="phone-number">087816658903</a></li>
                        <li class="oswald-sans"><img src="images/ig.png" alt="insta" class="contact-icons"><a href="https://www.instagram.com/rasabeautybar?igsh=NXZxZWszZmIzbWJr" id="email-link">@rasabeautybar</a></li>
                       
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
                        <p class="open-sans">RasaBeauty Bar <span id="Year"></span>2019</p>
                    </div>
                    <div class="footer-icons">
                        
                    </div>
                </div>
            </div>
        </footer>

        <!--javascript-->
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <!-- <script src="src/validation.js"></script>
        <script src="src/global.js"></script>
        <script src="src/home.js"></script> -->
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
        

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.querySelector('.menu');
    const mobileNav = document.querySelector('.mobile-nav');
    const body = document.body;

    // Fungsi untuk toggle menu
    function toggleMenu() {
        mobileNav.classList.toggle('active');
        body.classList.toggle('menu-open');
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
        });
    });

    // Tutup menu saat klik di luar area menu
    document.addEventListener('click', function(e) {
        if (mobileNav.classList.contains('active') && 
            !mobileNav.contains(e.target) && 
            !menuButton.contains(e.target)) {
            mobileNav.classList.remove('active');
            body.classList.remove('menu-open');
        }
    });

    // Tutup menu saat window di-resize ke desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024) {
            mobileNav.classList.remove('active');
            body.classList.remove('menu-open');
        }
    });
});
</script>

<script>

    closeButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const modal = this.closest('.service-modal');
            modal.style.display = 'none';
        });
    });

    window.addEventListener('click', function(e) {
        modals.forEach(modal => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    });
</script>


    </body>
</html>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const serviceButtons = document.querySelectorAll('.services .service-item button');

    serviceButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const currentItem = this.closest('.service-item');
            const currentTable = currentItem.querySelector('.table-wrap');
            const isExpanded = currentItem.classList.contains('expanded');

            // Tutup semua service-item terlebih dahulu
            document.querySelectorAll('.services .service-item.expanded').forEach(item => {
                if (item !== currentItem) {
                    item.classList.remove('expanded');
                    item.querySelector('button').textContent = 'READ MORE';
                    const otherTable = item.querySelector('.table-wrap');
                    otherTable.style.opacity = '0';
                    setTimeout(() => {
                        otherTable.style.display = 'none';
                    }, 300);
                }
            });

            // Toggle item yang sedang diklik
            if (!isExpanded) {
                currentItem.classList.add('expanded');
                this.textContent = 'READ LESS';
                currentTable.style.display = 'block';
                setTimeout(() => {
                    currentTable.style.opacity = '1';
                }, 10);
            } else {
                currentItem.classList.remove('expanded');
                this.textContent = 'READ MORE';
                currentTable.style.opacity = '0';
                setTimeout(() => {
                    currentTable.style.display = 'none';
                }, 300);
            }
        });
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var backToTop = document.querySelector('.back-to-top');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTop.classList.add('active');
        } else {
            backToTop.classList.remove('active');
        }
    });

    backToTop.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
</script>
<script>
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 50) { // Ubah angka ini sesuai kebutuhan
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
</script>
