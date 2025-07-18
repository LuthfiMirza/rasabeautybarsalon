<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RasaBeauty Bar | Beranda</title>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/mobile-nav-improved.css">
        <link rel="stylesheet" href="css/whatsapp-contact.css">
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
                <!-- Logo -->
                <a href="/" class="cursor-pointer logo">
                    <img src="images/rasa.png" alt="RasaBeauty Bar Logo">
                    <span>RasaBeauty<br><i>Bar</i></span>
                </a>
                
                <!-- Mobile Menu Button -->
                <button class="menu" type="button" aria-label="Toggle menu" aria-expanded="false">
                    <img src="images/icons8-menu-48.png" alt="Menu">
                </button>
                
                <!-- Desktop Navigation -->
                <nav class="oswald-sans desktop-nav vertical-center">
                    <ul>
                        <li class="link-animate"><a href="/">BERANDA</a></li>
                        <li class="link-animate"><a href="/about">TENTANG</a></li>
                        <li class="link-animate"><a href="/#servicesID">LAYANAN</a></li>
                        <li class="link-animate"><a href="/#contactID">KONTAK</a></li>
                        <li><a href="/book" class="btn btn-blue">RESERVASI</a></li>
                    </ul>
                </nav>

                <!-- Mobile Navigation -->
                <nav class="mobile-nav">
                    <ul>
                        <li><a href="/">BERANDA</a></li>
                        <li><a href="/about">TENTANG</a></li>
                        <li><a href="/#servicesID">LAYANAN</a></li>
                        <li><a href="/#contactID">KONTAK</a></li>
                        <li><a href="/book" class="btn btn-blue">RESERVASI</a></li>
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
                <h1 class="title text-center">Tentang Salon Kami</h1>
                <div class="divider"></div>
                <div class="container-lg grid-wrap">
                    <img src="images/rbb1.jpg" class="img">
                    <div class="about-text">
                        <p class="open-sans text-gray p-text">Selamat datang di RasaBeauty Bar Salon, tempat di mana kecantikan bertemu dengan keanggunan dan perawatan diri dirayakan dalam setiap detail. Berlokasi di jantung kota Depok, salon kami adalah ruang yang nyaman dan modern yang dirancang untuk membantu Anda rileks, merasa percaya diri, dan mengekspresikan gaya unik Anda. Kami mengkhususkan diri dalam nail art, lash lift, eyelash extensions, dan banyak lagi yang semuanya dibuat dengan cinta dan presisi.</p>

                        <p class="open-sans text-gray p-text">Misi kami adalah meningkatkan kecantikan alami Anda melalui perawatan yang aman dan berkualitas tinggi yang disesuaikan khusus untuk Anda. Setiap layanan diberikan oleh profesional terlatih yang peduli dengan kenyamanan dan kepuasan Anda. Biarkan kami memanjakan Anda dari ujung jari hingga bulu mata. Karena di RasaBeauty Bar Salon, setiap detail penting dan Anda layak merasa cantik, setiap hari.</p>
                        <a href="#showcaseID" class="back-to-top cursor-pointer">
                        </a>
                        <a href="about" class="btn btn-white text-decoration text-center">BACA SELENGKAPNYA</a>
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

                       <div class="table-wrap">
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

                       <div class="text-center">
                           <button type="button" class="oswald-sans service-btn" data-service="nailart">READ MORE</button>
                       </div>
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

                       <div class="text-center">
                           <button type="button" class="oswald-sans service-btn" data-service="menicure">READ MORE</button>
                       </div>
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

                       <div class="text-center">
                           <button type="button" class="oswald-sans service-btn" data-service="eyelash">READ MORE</button>
                       </div>
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

                       <div class="text-center">
                           <button type="button" class="oswald-sans service-btn" data-service="lashlift">READ MORE</button>
                       </div>
                   </div>
                </div>
            </div>

            <!--gallery-->
            <div class="section gallery">
                <h1 class="title text-center">Galeri</h1>
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

            <!--contact-->
            <div class="section contact" id="contactID">
                <div class="container-lg">
                    <h1 class="title text-center">Hubungi Kami</h1>
                    <div class="divider"></div>
                    
                    <!-- Contact Methods -->
                    <div class="contact-methods">
                        <div class="contact-card whatsapp-card">
                            <div class="contact-icon">
                                <span>💬</span>
                            </div>
                            <h3 class="oswald-sans">WhatsApp</h3>
                            <p class="open-sans">Chat langsung dengan kami</p>
                            <a href="https://wa.me/6287816658903" target="_blank" class="contact-btn whatsapp-btn">
                                087816658903
                            </a>
                        </div>
                        
                        <div class="contact-card phone-card">
                            <div class="contact-icon">
                                <span>📞</span>
                            </div>
                            <h3 class="oswald-sans">Telepon</h3>
                            <p class="open-sans">Hubungi kami langsung</p>
                            <a href="tel:087816658903" class="contact-btn phone-btn">
                                087816658903
                            </a>
                        </div>
                        
                        <div class="contact-card location-card">
                            <div class="contact-icon">
                                <span>📍</span>
                            </div>
                            <h3 class="oswald-sans">Lokasi</h3>
                            <p class="open-sans">Kunjungi salon kami</p>
                            <div class="location-info">
                                <span>Ruko Alpiana No 21</span>
                                <span>Jl. Boulevard, Depok</span>
                            </div>
                        </div>
                        
                        <div class="contact-card hours-card">
                            <div class="contact-icon">
                                <span>🕒</span>
                            </div>
                            <h3 class="oswald-sans">Jam Buka</h3>
                            <p class="open-sans">Waktu operasional</p>
                            <div class="hours-info">
                                <span>Selasa - Minggu</span>
                                <span>12.00 - 20.00</span>
                                <small>Senin Tutup</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Contact Form -->
                    <div class="quick-contact">
                        <h3 class="oswald-sans text-center">Kirim Pesan Cepat</h3>
                        <form id="quickContactForm" class="quick-form">
                            <div class="form-row">
                                <input type="text" id="quickName" placeholder="Nama Anda" class="quick-input" required>
                                <input type="tel" id="quickPhone" placeholder="Nomor WhatsApp" class="quick-input" required>
                            </div>
                            <textarea id="quickMessage" placeholder="Pesan Anda..." class="quick-textarea" rows="3" required></textarea>
                            <button type="submit" class="quick-submit-btn">
                                <span>📱</span>
                                Kirim via WhatsApp
                            </button>
                        </form>
                    </div>
                    
                    <!-- Map Section -->
                    <div class="modern-map-section">
                        <h3 class="oswald-sans text-center">Temukan Kami</h3>
                        <div class="map-container">
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
                        .bindPopup('<strong>RasaBeauty Bar</strong><br>Ruko Alpiana No 21<br>Jalan Boulevard, Kota Depok')
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
                    <h3 class="oswald-sans">Kontak</h3>
                    <ul class="open-sans">
                        <li><img src="images/map.jpg" alt="Location" class="contact-icons">Ruko Alpiana No 21</br><span>Jalan Boulevard, Kota Depok Jawa Barat</span></li>
                        <li><img src="images/tlfn.jpg" alt="Phone" class="contact-icons"><a href="tel:087816658903" id="phone-number">087816658903</a></li>
                        <li class="oswald-sans"><img src="images/ig.png" alt="insta" class="contact-icons"><a href="https://www.instagram.com/rasabeautybar?igsh=NXZxZWszZmIzbWJr" id="email-link">@rasabeautybar</a></li>
                       
                    </ul>
                </div>
                <div class="footer-section">
                    <h3 class="oswald-sans">Jam Buka</h3>
                    <ul class="open-sans">
                        <li>Selasa - Minggu 12.00 - 20.00</li>
                        <li>Senin Tutup</li>
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
        

<script src="js/navbar.js"></script>
<script src="js/whatsapp-contact.js"></script>
<script>
// Quick fix untuk memastikan CSS sudah load
document.addEventListener('DOMContentLoaded', function() {
    // Force apply critical styles
    const menu = document.querySelector('.menu');
    const mobileNav = document.querySelector('.mobile-nav');
    
    if (menu) {
        menu.style.position = 'fixed';
        menu.style.top = '20px';
        menu.style.right = '20px';
        menu.style.zIndex = '99999';
        menu.style.transform = 'none';
    }
    
    if (mobileNav) {
        mobileNav.style.position = 'fixed';
        mobileNav.style.top = '0';
        mobileNav.style.left = '-300px';
        mobileNav.style.zIndex = '99998';
    }
});
</script>
<script>
// Quick Contact Form Handler
document.addEventListener('DOMContentLoaded', function() {
    const quickForm = document.getElementById('quickContactForm');
    if (quickForm) {
        quickForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('quickName').value;
            const phone = document.getElementById('quickPhone').value;
            const message = document.getElementById('quickMessage').value;
            
            if (name && phone && message) {
                const waMessage = `Halo, saya ${name}. ${message}`;
                const waLink = `https://wa.me/6287816658903?text=${encodeURIComponent(waMessage)}`;
                window.open(waLink, '_blank');
            }
        });
    }
});

// Service buttons functionality
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

// Back to top functionality
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

    </body>
</html>