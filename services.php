<?php
include 'db.php'; 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Md</title>
    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="shortcut icon">
    <!-- CSS -->
    <link href="assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
    <link href="assets/plugins/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/theme.min.css" rel="stylesheet">
    <!-- Fonts/Icons -->
    <link href="assets/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/plugins/fontawesome/css/all.css" rel="stylesheet">
    
</head>

<body data-preloader="true">

    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container" id="nav_container">
                <a class="navbar-brand" href="/">
                    MdAkbari
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <button class="close-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Close navigation">
                        &times;
                    </button>
                    <ul class="navbar-nav mx-auto navbar-nav-center">
                        <li class="nav-item">
                            <a class="nav-link" href="about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main data-bs-spy="scroll" data-bs-target=".nav-box">
   

       <!-- Services section -->
       <div id="services" class="section">
        <div class="container">
            <div class="row g-4 g-xl-5">
                <div class="col-12 col-xl-4">
                    <span class="title-heading 04">Services</span>
                    <h1 class="display-3 fw-medium mb-0">What I <span class="text-gradient">Do</span></h1>
                </div>
                <div class="col-12 col-xl-8">
                    <div class="row g-4">
                        <!-- Service box 1 -->
                        <div class="col-12">
                            <div class="service-box">
                                <div class="service-order">
                                    <h3>01/</h3>
                                </div>
                                <div class="service-title">
                                    <i class="bi bi-brush"></i>
                                    <h3>Frontend Development</h3>
                                </div>
                                <div class="service-text">
                                    <p>I specialize in frontend development, proficient in HTML, CSS, Bootstrap, and JavaScript, with expertise in the React framework.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Service box 2 -->
                        <div class="col-12">
                            <div class="service-box">
                                <div class="service-order">
                                    <h3>02/</h3>
                                </div>
                                <div class="service-title">
                                    <i class="bi bi-code-slash"></i>
                                    <h3>Backend Development</h3>
                                </div>
                                <div class="service-text">
                                    <p>I possess expertise in languages such as python and javaScript, along with proficiency in frameworks like Django and Flask.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Service box 3 -->
                        <div class="col-12">
                            <div class="service-box">
                                <div class="service-order">
                                    <h3>03/</h3>
                                </div>
                                <div class="service-title">
                                    <i class="bi bi-window"></i>
                                    <h3>Web Application</h3>
                                </div>
                                <div class="service-text">
                                    <p>My approach combines technical expertise with a creative mindset, resulting in dynamic and responsive web applications.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end Service box 3 -->
                    </div><!-- end row(inner) -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Services section -->



</main>
    <!-- Footer -->
    <div class="py-4 py-lg-5 text-center">
        <p>&copy; 2023 Mdakbari, All Rights Reserved.</p>
    </div>
    <!-- end Footer -->

    <!-- Scroll To Top -->
    <div class="scrolltotop">
        <a class="button-circle" href="#">
            <i class="bi bi-arrow-up"></i>
            <i class="bi bi-arrow-up"></i>
        </a>
    </div>
    <!-- end Scroll To Top -->

    <script>
        document.getElementById("contactform").addEventListener("submit", function(event) {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const subject = document.getElementById("subject").value;
            const message = document.getElementById("message").value;

            const msg = `Name: ${name}\nEmail: ${email}\nSubject: ${subject}\nMessage: ${message}`;
            const pnumber = 9016755950;

            const whatsapp = `https://api.whatsapp.com/send?phone=${pnumber}&text=${encodeURIComponent(msg)}`;
            window.open(whatsapp, '_blank');
        });
    </script>

    <!-- JavaScripts -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi4SV0ZRVGoIDH2E00YtJ8Gvg67eaPG5A"></script>
    <script src="assets/plugins/jquery.min.js"></script>
    <script src="assets/plugins/plugins.js"></script>
    <script src="assets/js/functions.min.js"></script>
</body>

</html>
