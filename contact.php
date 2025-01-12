<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Placement Portal</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assets/css/variables.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- custom css -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <link rel="stylesheet" href="assets/css/chat.css">
</head>

<body>

    <!-- <header> -->



    <?php

    include 'php/header.php'

    ?>



    <!-- </header> -->

<body>

    
   

    <!-- Header -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0"></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="admin/index.php">Admin Login</a></li>
                            <li><a href="login-candidates.php">Student Login</a></li>
                            <li><a href="login-company.php">Placement Cell</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Register</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="register-candidates.php">Students</a></li>
                            <li><a href="register-company.php">Placement Cell</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav>
           
        </div>
    </header>

    <!-- Contact Section -->
    <section id="contact" class="contact py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2><strong>Contact Us</strong></h2>
                <p>PLACEMENT CELL</p>
            </div>
            <div class="row gy-5 gx-lg-5">
                <div class="col-lg-4">
                    <div class="info p-4 bg-light rounded shadow">
                        <h3 class="text-center mb-4">Get in Touch</h3>
                        <p class="text-center">PLACEMENT CELL</p>
                        <div class="info-item d-flex mb-4">
                            <i class="bi bi-envelope flex-shrink-0 me-3" style="font-size: 24px;"></i>
                            <div>
                                <h4>Email:</h4>
                                <p><a href="mailto:sabbanisaikiran1978@gmail.com" class="text-decoration-none">xxxxxxxx@placementcell.com</a></p>
                            </div>
                        </div>
                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0 me-3" style="font-size: 24px;"></i>
                            <div>
                                <h4>Call:</h4>
                                <p><a href="tel:+919381306601" class="text-decoration-none">xxxxxxxxx</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 text-center d-flex align-items-center justify-content-center">
                    <div class="card p-5 w-75 shadow">
                        <h5>Thank you for your interest. Reach out to us using the contact details provided.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Footer -->
<footer id="footer" class="footer py-4">
    <div class="footer-legal text-center">
        <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <!-- Removed copyright and credits content -->
            </div>
            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
