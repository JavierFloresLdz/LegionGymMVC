<!DOCTYPE html>
<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['precio'])) && ($_POST['precio'] != '')) {

    include "models/modelo.php";
    $nuevo = new Service();
    $asd = $nuevo->setServicio($_POST['nombre'], $_POST['precio']);
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Legion Gym | Web Site</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="icon" href="assets/img/Logorojo.png" type="image/png" />

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="black-bg">
    <!-- ? Preloader Start
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
     Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img style="height: 45px; width: 95px;" src="assets/img/logo/logolegion.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.html">Inicio</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.1s">Se parte de</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.4s">La Legion</h1>
                                    <form action="#" method="post" class="col-lg-5">
                                        <span data-animation="fadeInLeft" data-delay="0.1s" style="font-size: 40px;">Nuevo Miembro</span>
                                        <h2 data-animation="fadeInLeft" data-delay="0.1s" style="color: white;">Nombre del Socio:</h2><input style="font-size: 16px;" data-animation="fadeInLeft" data-delay="0.1s" type="text" name="nombre" class="form-control" />
                                        <h2 data-animation="fadeInLeft" data-delay="0.1s" style="color: white;">Precio de Suscripción:</h2><input style="font-size: 16px;" data-animation="fadeInLeft" data-delay="0.1s" type="text" name="precio" class="form-control" />
                                        <br />
                                        <input data-animation="fadeInLeft" data-delay="0.1s" type="submit" value="Registrar" class="btn btn-success" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- slider Area End-->

        <!--? Team -->
        <section class="team-area fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">

                            <h2>Listado de Socios</h2>
                            <a style="font-size: 30px;" href="controllers/controlador.php"><i class="fa fa-align-justify"></i> Acceder al listado de socios</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team1.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Fisicoconstructivismo</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team2.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Ganancia de masa muscular</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Perdida de peso</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Services End -->
        <!-- Courses area start -->
        <section class="pricing-area section-padding40 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                            <h2>Planes</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="properties__card">
                                <div class="about-icon">
                                    <img src="assets/img/icon/price.svg" alt="">
                                </div>
                                <div class="properties__caption">
                                    <span class="month">3 meses</span>
                                    <p class="mb-25">$1200mx</p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/ok.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Área de Cardio</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/ok.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Área de Pesas</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/cerrar.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Entrenador Personal</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/cerrar.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Dieta Personalizada</p>
                                        </div>
                                    </div>
                                    <div class="single-features mb-20">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/cerrar.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Seguimiento Mes a Mes</p>
                                        </div>
                                    </div>
                                    <a href="#" class="border-btn border-btn2">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="properties__card">
                                <div class="about-icon">
                                    <img src="assets/img/icon/price.svg" alt="">
                                </div>
                                <div class="properties__caption">
                                    <span class="month">6 meses</span>
                                    <p class="mb-25">$3000mx</p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/ok.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Área de Cardio</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/ok.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Área de Pesas</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/ok.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Entrenador Personal</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/cerrar.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Dieta Personalizada</p>
                                        </div>
                                    </div>
                                    <div class="single-features mb-20">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/cerrar.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Seguimiento Mes a Mes</p>
                                        </div>
                                    </div>
                                    <a href="#" class="border-btn border-btn2">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <div class="properties__card">
                                <div class="about-icon">
                                    <img src="assets/img/icon/price.svg" alt="">
                                </div>
                                <div class="properties__caption">
                                    <span class="month">12 meses</span>
                                    <p class="mb-25">7200$mx</p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/ok.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Área de Cardio</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/ok.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Área de Pesas</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/ok.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Entrenador Personal</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/ok.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Dieta Personalizada</p>
                                        </div>
                                    </div>
                                    <div class="single-features mb-20">
                                        <div class="features-icon">
                                            <img style="width: 18px; height: 13px;" src="assets/img/icon/ok.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Seguimiento Mes a Mes</p>
                                        </div>
                                    </div>
                                    <a href="#" class="border-btn border-btn2">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses area End -->
        <!--? video_start -->
        <div class="video-area section-bg2 d-flex align-items-center" data-background="assets/img/gallery/video-bg.png">
            <div class="container">
                <div class="video-wrap position-relative">
                    <div class="video-icon">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/QuF_hkXTyrI?controls=0&amp;start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- video_end -->
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area black-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- Footer Menu -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-footer-caption mb-50 text-center">
                                <!-- logo -->
                                <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                    <a href="index.html"><img src="assets/img/logo/logolegion.png" alt=""></a>
                                </div>
                                <!-- Menu -->
                                <!-- Header Start -->
                                <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                    <div class="main-header main-header2">
                                        <div class="menu-wrapper menu-wrapper2">
                                            <!-- Main-menu -->
                                            <div class="main-menu main-menu2 text-center">
                                                <nav>
                                                    <ul>
                                                        <li><a href="index.php">Nuevo Registro</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header End -->
                                <!-- social -->
                                <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> 5TIDSMA | Desarrollado con <i class="fa fa-heart" aria-hidden="true"></i> Por <a href="#" target="_blank">Francisco Javier Floress Ledezma</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>