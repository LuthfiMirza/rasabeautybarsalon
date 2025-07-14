<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RasaBeauty Bar | Reservasi</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/other.css">
        <link rel="stylesheet" href="css/mobile-nav-improved.css">
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
                    <!-- Logo -->
                    <a href="/" class="cursor-pointer logo">
                        <img src="images/rasa.png" alt="RasaBeauty Bar Logo">
                        <span>RasaBeauty<br><i>Bar</i></span>
                    </a>
                    
                    <!-- Mobile Menu Button -->
                    <button type="button" class="menu vertical-center cursor-pointer">
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
        </div>

        <!--section divider-->
        <div class="section-divider">
            <div>
                <h3 class="oswald-sans">
                    <span><a href="/">BERANDA</a></span>
                    <span>\</span>
                    <span>RESERVASI</span>
                </h3>
            </div>
        </div>

        <!--back to top-->
        <a href="#showcaseID" class="back-to-top cursor-pointer"></a>

        <!--main section-->
        <main class="booking">
            <span class="submit-message"></span>

            <div class="book-form">
                <h1 class="text-white open-sans text-center">Form Reservasi</h1>
                <form 
                    id="bookingForm"
                    class="open-sans grid-wrap"
                    action="{{ route('reservation.store') }}"
                    method="POST"
                >
                @csrf

                <fieldset>
                    <legend class="labels">Nama:</legend>
                    <input type="text" name="name" placeholder="Masukkan Nama Anda" class="input focused" id="name" required>
                    <span id="nameError" class="error">Input tidak valid</span>
                </fieldset>

                <fieldset>
                    <legend class="labels">Telepon:</legend>
                    <input type="tel" name="phone" placeholder="Masukkan Nomor Telepon" class="input focused" id="phone" required>
                    <span id="phoneError" class="error">Nomor tidak valid</span>
                </fieldset>

                <fieldset>
                    <legend class="labels">Email:</legend>
                    <input type="email" name="email" placeholder="Masukkan Email" class="input focused" id="email" required>
                    <span id="emailError" class="error">Email tidak valid</span>
                </fieldset>

                <fieldset>
                    <legend class="labels">Tanggal Reservasi:</legend>
                    <input type="date" name="date" placeholder="Tanggal" class="input focused" id="date" required>
                    <span id="dateError" class="error">Tanggal tidak valid</span>
                </fieldset>

                <fieldset>
                    <legend class="labels">Waktu Reservasi:</legend>
                    <select name="time" class="input focused" id="time" required>
                        <option value="">Pilih Waktu</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                    </select>
                    <span id="timeError" class="error">Mohon pilih waktu</span>
                </fieldset>

                <fieldset>
                    <legend class="labels">Layanan:</legend>
                    <select name="service" class="input focused" id="select" required>
                        <option value="">Mohon pilih layanan</option>
                        <option value="Nail Art">Nail Art</option>
                        <option value="Remove Nail">Remove Nail</option>
                        <option value="Manicure">Manicure</option>
                        <option value="Pedicure">Pedicure</option>
                        <option value="Eyelash Rusian">Eyelash Russian</option>
                        <option value="Eyelash Japanase">Eyelash Japanese</option>
                        <option value="Remove Eyelash">Remove Eyelash</option>
                        <option value="Lashlift">Lashlift</option>
                    </select>
                    <span id="selectError" class="error">Anda harus memilih layanan</span>
                </fieldset>

                <button type="submit" class="btn btn-blue cursor-pointer" id="bookBtn">Buat Reservasi</button>
                
                </form>
            </div>
        </main>

        <!--footer-->
        <footer class="footer">
            <div class="footer-bg"></div>
            <div class="grid-wrap">
                <div class="footer-section">
                    <h3 class="oswald-sans">Kontak</h3>
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
        <script src="js/navbar.js"></script>
        
        <!-- Form validation script -->
        <script>
        document.addEventListener('DOMContentLoaded', function() {
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
                        alert('Mohon isi semua field yang diperlukan.');
                    }
                });
            }
        });
        </script>
    </body>
</html>