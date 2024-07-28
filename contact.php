<?php
include 'db.php'; // Include database connection
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
   

    <div id="contact" class="section pb-0">
        <div class="container">
            <div class="row g-4 g-xl-5">
                <div class="col-12 col-xl-4">
                    <span class="title-heading 04">Contact</span>
                    <h1 class="display-3 fw-medium mb-0">Let's <span class="text-gradient">Talk</span></h1>
                </div>
                <div class="col-12 col-xl-8">
                    <div class="row g-4 g-lg-5">
                        <div class="col-12 col-md-6">
                            <h6 class="sm-heading">Email:</h6>
                            <h3 class="mb-0">md.akbari1811@gmail.com</h3>
                        </div>
                        <div class="col-12 col-md-6">
                            <h6 class="sm-heading">Call:</h6>
                            <h3 class="mb-0">+91 9016755950</h3>
                        </div>
                    </div><!-- end row(inner) -->
                    <!-- Contact Form -->
                    <div class="contact-form mt-4 mt-lg-5 text-xl-end">
                    <form action="add_contact.php" method="post">
                        <div class="row gx-3 gy-0">
                            <div class="col-12 col-md-6">
                                <input type="text" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" id="email" name="email" placeholder="E-Mail" required>
                            </div>
                        </div>
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                        <button class="button button-dot" name="submit" type="submit">
                            <span data-text="Send Message">Send Message</span>
                        </button>
                        <!-- <input type="submit" value="Send Message"> -->
                    </form>

                        <!-- Submit result -->
                    </div><!-- end contact-form -->
                </div>
            </div><!-- end row -->
            <!-- Google Maps -->
            <!-- <div id="map1" class="gmap gmap-md border-radius-1 mt-5" data-latitude="51.513569" data-longitude="-0.123443"></div> -->
            <!-- end Google Maps -->
        </div><!-- end container -->
    </div>



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

  
    <!-- JavaScripts -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi4SV0ZRVGoIDH2E00YtJ8Gvg67eaPG5A"></script>
    <script src="assets/plugins/jquery.min.js"></script>
    <script src="assets/plugins/plugins.js"></script>
    <script src="assets/js/functions.min.js"></script>
</body>

</html>
