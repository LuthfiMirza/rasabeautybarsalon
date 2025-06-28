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
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="images/rasa.png">
    </head>
    <body>

        <div class="other-showcase" id="showcaseID">
            <!--header-->
                    
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
                </div>
                <nav class="oswald-sans mobile-nav">
                    <ul>
                        <li><a href="/">HOME</a></li>
                        <li><a href="/about">ABOUT</a></li>
                        <li><a href="/#servicesID">SERVICES</a></li>
                        <li><a href="/#contactID">CONTACT</a></li>
                        <li><a href="/book">RESERVATION</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <!--section divider-->
        <div class="section-divider">
           
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
            <input type="text" name="name" placeholder="Enter your Name" class="input focused" id="name">
            <span id="nameError" class="error">Invalid input</span>
        </fieldset>

        <fieldset>
            <legend class="labels">Phone:</legend>
            <input type="tel" name="phone" placeholder="Enter Phone" class="input focused" id="phone">
            <span id="phoneError" class="error">Invalid number</span>
        </fieldset>

        <fieldset>
            <legend class="labels">Email:</legend>
            <input type="email" name="email" placeholder="Enter Email" class="input focused" id="email">
            <span id="emailError" class="error">Invalid email</span>
        </fieldset>

        <fieldset>
            <legend class="labels">Request Date:</legend>
            <input type="date" name="date" placeholder="Date" class="input focused" id="date">
            <span id="dateError" class="error">Invalid date</span>
        </fieldset>

        <fieldset>
            <legend class="labels">Request Time:</legend>
            <input type="time" name="time" placeholder="Time" class="input focused" id="time">
            <span id="timeError" class="error">AM or PM?</span>
        </fieldset>

        <fieldset>
            <legend class="labels">Service:</legend>
            <select name="service" class="input focused" id="select">
                <option value="Service">Please select a service</option>
                <option value="Nail Art">Nail Art </option>
                <option value="Remove Nail">Remove Nail</option>
                <option value="Manicure">Manicure</option>
                <option value="Pedicure">Pedicure</option>
                <option value="Eyelash Rusian">Eyelash Rusian</option>
                <option value="Eyelash Japanase">Eyelash Japanase</option>
                <option value="Remove Eyelash">Remove Eyelash </option>
                <option value="Lashlift">Lashlift</option>
            </select>
            <span id="selectError" class="error">You must select a service</span>
        </fieldset>

        <button type="submit" class="btn btn-blue cursor-pointer" id="bookBtn">Reservation Now</button>
        
        </form>
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
                        <p class="open-sans">RasaBeauty Bar<span id="Year"></span>2019</p>
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
        <script src="js/global.js"></script>
        <script src="js/utils.js"></script>
        <script src="js/validation.js"></script>
    </body>
</html>