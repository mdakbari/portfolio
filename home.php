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
    <style>
		.skills {
			display: flex;
			flex-wrap: wrap;
		}

		.skills_skills {
			background-color: #f1f1f1;
			border-radius: 10px;
			padding: 10px;
			margin: 5px;
			width: 70;
			text-align: center;
			color: black;
			transition: background 0.3s ease;
		}
		#html {
			background: linear-gradient(90deg, #e34c26, #c76b44);

		}

		#css {
			background: linear-gradient(90deg, #264de4, #2965f1);
		}

		#js {
			background: linear-gradient(90deg, #f0db4f, #f7df1e);
		}

		#python {
			background: linear-gradient(90deg, #3776ab, #3c78b5);
		}

		#bootstrap {
			background: linear-gradient(90deg, #563d7c, #6f42c1);
		}

		#mysql {
			background: linear-gradient(90deg, #00758f, #0086a8);
		}

		#react {
			background: linear-gradient(90deg, #61dbfb, #00d8ff);
		}

		#django {
			background: linear-gradient(90deg, #092e20, #0c3e2e);
		}

		#flask {
			background: linear-gradient(90deg, #363131, #837070);
			/* color: white; */

		}

		#laravel {
			background: linear-gradient(90deg, #f55247, #ff6b6b);
		}

		#php {
			background: linear-gradient(90deg, #4f5b93, #5c6bc0);
		}

		#java {
			background: linear-gradient(90deg, #5382a1, #5c6bc0);
		}

		#mongodb {
			background: linear-gradient(90deg, #4db33d, #5cb85c);
		}

		#github {
			background: linear-gradient(90deg, #24292e, #2f363d);
		}

		.skills_skills:hover {
			background: #fff;
			color: #000;
		}




	</style>
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
                            <a class="nav-link" href="#about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main data-bs-spy="scroll" data-bs-target=".nav-box">
    <!-- Hero section -->
    <div id="about" class="hero-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="hero-heading display-1 fw-bold mb-0 stroke-text">Manthan Akbari</h1>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Hero section -->

    <!-- About section -->
    <div class="container">
        <div class="row g-4 g-md-5">
            <div class="col-12 col-lg-4 order-lg-2 text-center">
                <!-- Hero Avatar -->
                <div class="hero-avatar">
                    <img src="assets/images/hero2.png" data-rjs="2" alt="">
                </div>
                <!-- end Hero Avatar -->
            </div>
            <div class="col-12 col-lg-4 order-lg-1">
                <div class="row g-4 g-lg-5">
                    <div class="col-12 col-md-12 col-lg-12">
                        <h6 class="sm-heading">Biography</h6>
                        <p>Hello, I'm Manthan Akbari, a Computer Science and Engineering student specializing in AI and ML. Currently pursuing a Bachelor's degree, I've completed a diploma in IT. Proficient in web development, I merge theoretical knowledge with practical skills to create innovative solutions.</p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-12">
                        <h6 class="sm-heading">Connect</h6>
                        <ul class="list-inline">
                            <li>
                                <a class="button-circle button-circle-sm" href="https://www.facebook.com/manthan.akbari.3" target="_blank">
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a class="button-circle button-circle-sm" href="https://www.linkedin.com/in/manthan-akbari-825995236/" target="_blank">
                                    <i class="bi bi-linkedin"></i>
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a class="button-circle button-circle-sm" href="https://www.instagram.com/md_akbari18/" target="_blank">
                                    <i class="bi bi-instagram"></i>
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a class="button-circle button-circle-sm" href="https://github.com/mdakbari" target="_blank">
                                    <i class="bi bi-github"></i>
                                    <i class="bi bi-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- end row(inner) -->
            </div>
            <div class="col-12 col-md-12 col-lg-4 col-sm-4 order-lg-3 text-lg-start">
                <div class="col-12 col-md-12 col-lg-12">
                    <h6 class="sm-heading">Skills</h6>
                    <div class="skills">
                        <div class="skills_skills" id="html">HTML5</div>
                        <div class="skills_skills" id="css">CSS3</div>
                        <div class="skills_skills" id="js">JavaScript</div>
                        <div class="skills_skills" id="python">Python</div>
                        <div class="skills_skills" id="bootstrap">Bootstrap</div>
                        <div class="skills_skills" id="mysql">MySQL</div>
                        <div class="skills_skills" id="react">React</div>
                        <div class="skills_skills" id="django">Django</div>
                        <div class="skills_skills" id="flask">Flask</div>
                        <div class="skills_skills" id="laravel">Laravel</div>
                        <div class="skills_skills" id="php">PHP</div>
                        <div class="skills_skills" id="java">Java</div>
                        <div class="skills_skills" id="mongodb">MongoDB</div>
                        <div class="skills_skills" id="github">GitHub</div>
                    </div>
                </div>
            </div><!-- end row(inner) -->
        </div><!-- end row -->
    </div><!-- end container -->
    <!-- end About section -->

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

    <!-- Portfolio section -->
    <div id="portfolio" class="section-box">
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
                                <h2><a class="portfolio-caption"  href="<?php echo htmlspecialchars($project['title']); ?>"><?php echo htmlspecialchars($project['title']); ?></a></h2>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Portfolio section -->

    <!-- Awards section -->
    <div id="awards" class="section pb-0">
        <div class="container">
            <div class="row g-4 g-xl-5">
                <div class="col-12 col-xl-4">
                    <h1 class="display-3 fw-medium mb-0">Edu<span class="text-gradient">cation</span></h1>
                </div>
                <div class="col-12 col-xl-8">
                    <div class="row g-4">
                        <!-- Award box 1 -->
                        <div class="col-12 col-md-6">
                            <div class="fancy-box">
                                <h4>Diploma in IT</h4>
                                <h6 class="sm-heading 04 mb-2">2019-2022</h6>
                                <p>I have successfully completed my diploma in Information Technology from Government Polytechnic in Ahmedabad.</p>
                            </div>
                        </div>
                        <!-- Award box 2 -->
                        <div class="col-12 col-md-6">
                            <div class="fancy-box">
                                <h4>BE in CSE(AI-ML)</h4>
                                <h6 class="sm-heading 04 mb-2">2022-2025</h6>
                                <p> I am currently pursuing my Bachelor of Engineering degree in CSE (AI-ML) at New LJ Institute of Engineering and Technology in Ahmedabad.</p>
                            </div>
                        </div>
                    </div><!-- end row(inner) -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Awards section -->

    <!-- Contact section -->
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
                        <form method="post" action="add_contact.php">
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
                            <button class="button button-dot" type="submit">
                                <span data-text="Send Message">Send Message</span>
                            </button>
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
    <!-- end Contact section -->

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
