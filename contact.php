<?php 
    session_start();
    include("connection.php");
    include("functions.php");

    // Check login
    if(!loggedIn()){
        header("Location:login.php?err=" . urlencode("Be kell jelentkeznie a fiók megtekintése lehetőséghez!!"));
        exit();
    }
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <title>Vegetár - Organic Food Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="vegetarsgr, vega" name="keywords">
    <meta content="Preparing and ordering vegetarian meals" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>Budapest Municipality Jonavos 173</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>vegetarsgr@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <img src="img/mango.jpg" class="fw-bold text-primary m-0" width="60px" height="40px" alt="logo">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">Rólunk</a>
                    <a href="hozzavalo.php" class="nav-item nav-link">Termékek</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Egyéb</a>
                        <div class="dropdown-menu m-0">
                            <a href="feature.php" class="dropdown-item">Menük</a>
                            <a href="testimonial.html" class="dropdown-item">Értékelés</a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="login.php">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="rendeles.php">
                        <small class="fa fa-shopping-bag text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="logout.php">
                        <small class="fa fa-sign-out-alt"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Kapcsolat</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Kapcsolat</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- User Information Start -->
    <div class="container">
        <br>
        <div class="jumbotron">
            <h2>Szeretettel köszöntjük <?php  if(isset($_SESSION['username'])) {echo $_SESSION['username'];} else echo $_COOKIE['username']; ?></h2>
        </div>
    </div><!-- /.container -->
    <!-- User Information End -->

    <!-- Contact Start -->
    <form action="https://formsubmit.co/el/confirm/34fe31dd5b2297c399da7ad11b80ba89" method="POST">
        <div class="container-xxl py-6">
                <div class="container">
                    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Kapcsolat</h1>
                        <p>Lépjen kapcsolatba velünk.</p>
                    </div>
                    
                    <div class="row g-5 justify-content-center">
                        <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                                <h5 class="text-white">Telefon</h5>
                                <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>+36 1 237317</p>
                                <h5 class="text-white">Email</h5>
                                <p class="mb-5"><i class="fa fa-envelope me-3"></i>vegetarsgr@gmail.com</p>
                                <h5 class="text-white">Cím</h5>
                                <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>Budapest Municipality Jonavos 173</p>
                                <h5 class="text-white">Follow Us</h5>
                                <div class="d-flex pt-2">
                                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- User Data -->
                        <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Username " name="name" required>
                                            <label for="name">Felhasználónév</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Email " name="email" required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <!-- User message Start -->
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Üzenet tárgya " name="subject" required>
                                            <label for="subject">Üzenet tárgya</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Üzenet szövege... " id="message"
                                                style="height: 200px" name="message" required></textarea>
                                            <label for="message">Üzenet</label>
                                        </div>

                                        <input type="hidden" name="_captcha" value="false">
                                        <input type="hidden" name="_template" value="table">                                                                              
                                    </div>
                                    <!-- User message End -->

                                    <div class="col-12">
                                        <button id="bu" class="btn btn-primary rounded-pill py-3 px-5" type="submit" >Küldés</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </form>
        <!-- Contact End -->

        <!-- Google Map Start -->
        <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
            <iframe class="w-100" style="height: 450px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.671080558184!2d19.067424415626668!3d47.4963206791775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc6767b07d9b%3A0x7be2e24544320049!2sBudapest%2C%20Blaha%20Lujza%20t%C3%A9r%2C%201085!5e0!3m2!1shu!2shu!4v1675699497378!5m2!1shu!2shu"
                frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
        <!-- Google Map End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Nyitvatartás</h4>
                        <p> Hétfő: Zárva<br>
                            Kedd: 15:00 - 23:00<br>
                            Szerda: 06:00 - 22:00<br>
                            Csütörtök: Zárva<br>
                            Péntek: 14:00 - 23:00<br>
                            Szombat: 01:00 - 23:00<br>
                            Vasárnap: 01:00 - 23:00</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Elérhetőségek</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Budapest Municipality Jonavos 173</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+361237317</p>
                        <p><i class="fa fa-envelope me-3"></i>vegetarsgr@gmail.com</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Gyors linkek</h4>
                        <a class="btn btn-link" href="about.html">Rólunk</a>
                        <a class="btn btn-link" href="altalanos_jog.html">Általános szerződési feltételek</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Hírlevél</h4>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Email">
                            <a href="signup.php"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Regisztráció</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="www.vegetarsgr.hu">Webhelyünk</a>, Minden jog fentartva 2023.
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="contact.php" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
            <i class="bi bi-arrow-up"></i>
        </a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>
</html>