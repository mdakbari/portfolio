<?php
include 'db.php'; 


$sql_images = "SELECT * FROM project_images
                JOIN project_project_image ON project_images.id = project_project_image.project_image_id
                WHERE project_project_image.project_id = ?";
$stmt_images = $conn->prepare($sql_images);
$stmt_images->bind_param("i", $project['id']);
$stmt_images->execute();
$images_result = $stmt_images->get_result();
$additional_images = $images_result->fetch_all(MYSQLI_ASSOC);


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
    <main>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h1 class="display-3 fw-medium"><?php echo htmlspecialchars($project['title']); ?></h1>
                        <p><?php echo htmlspecialchars($project['description']); ?></p>
                    </div>
                </div>
                <div class="row g-4 mt-5">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="fancy-box">
                            <h6 class="sm-heading mb-1">Type:</h6>
                            <ul class="list-inline-dot">
                                <li><?php echo htmlspecialchars($project['project_type']); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="fancy-box">
                            <h6 class="sm-heading mb-1">Frontend:</h6>
                            <ul class="list-inline-dot">
                                <li><?php echo htmlspecialchars($project['frontend_technologies']); ?></li>
                            </ul>
                        </div>
                    </div>
                
                    
                   
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="fancy-box">
                            <h6 class="sm-heading mb-1">Backend:</h6>
                            <ul class="list-inline-dot">
                                <li><?php echo htmlspecialchars($project['backend_technologies']); ?></li>
                            </ul>
                        </div>
                    </div>
                    
                 

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="fancy-box">
                            <h6 class="sm-heading mb-1">Website:</h6>
                            <a class="link-hover" href="<?php echo htmlspecialchars($project['website_url']); ?>" target="_blank">
                                <span data-text="<?php echo htmlspecialchars($project['website_url']); ?>"><?php echo htmlspecialchars($project['website_url']); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <img class="border-radius" src="<?php echo htmlspecialchars($project['main_image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                    </div>
                    <?php foreach ($additional_images as $image): ?>
                        <div class="col-12 col-md-6 mt-4">
                            <a class="lightbox-image-box border-radius" href="<?php echo htmlspecialchars($image['image']); ?>">
                                <img src="<?php echo htmlspecialchars($image['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                                <div class="lightbox-icon">
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
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
