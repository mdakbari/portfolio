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
   

      <!-- Portfolio section -->
      <div id="" class="section-box" style="padding-top: 80px">
        <div class="section-sm bg-dark border-radius-1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <span class="title-heading 04">Portfolio</span>
                        <h1 class="display-3 fw-medium">Recent <span class="text-gradient">Works</span></h1>
                        <div class="mt-4">
                            <div class="swiper-portfolio-prev button-circle cursor-link">
                                <i class="bi bi-arrow-left"></i>
                                <i class="bi bi-arrow-left"></i>
                            </div>
                            <div class="swiper-portfolio-next button-circle cursor-link">
                                <i class="bi bi-arrow-right"></i>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
                <style>
                    .portfolio-box .portfolio-img img {
                        width: 100%;
                        height: 295px;
                    }
                </style>
           <div class="swiper portfolio-slider mt-4 mt-lg-5">
            <div class="swiper-wrapper">
                <?php foreach ($projects as $project): ?>
                    <div class="swiper-slide">
                        <div class="portfolio-box">
                               <div class="portfolio-img">   
                                    <a href="<?php echo htmlspecialchars($project['title']); ?>">
                                    <img src="<?php echo htmlspecialchars($project['main_image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                                    </a>
                                </div>
                
                            <div class="pt-4">
                                <ul class="list-inline-dot sm-heading text-white mb-2">
                                    <li><a class="link-hover" href="#"><span data-text="<?php echo htmlspecialchars($project['project_type']); ?>"><?php echo htmlspecialchars($project['project_type']); ?></span></a></li>
                                </ul>
                                <h2><a class="portfolio-caption"  href="<?php echo htmlspecialchars($project['title']); ?>"> <?php echo htmlspecialchars($project['title']); ?></a></h2>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            </div>
        </div>
    </div>
    <!-- end Portfolio section -->


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
