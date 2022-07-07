<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Legion Gym | Web Site</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="icon" href="../assets/img/Logorojo.png" type="image/png" />

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
                            <a href="../index.php"><img style="height: 45px; width: 95px;" src="../assets/img/logo/logolegion.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="../index.php">Inicio</a></li>
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

    <body>
        <section class="team-area fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <br>
                            <br>
                            <br>
                            <h2>Listado de Socios</h2>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <div class="container">
            <header class="text-center">
                <h3 style="font-size: 28px; color:red">Socios Inscritos</h3>
                <table class="table">
                    <tr>
                        <td><strong style="font-size: 28px; color:aliceblue">Nombre del Socio</strong></td>
                        <td><strong style="font-size: 28px; color:aliceblue">Precio de Membresia</strong></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                    ?>
                        <tr>
                            <td style="font-size: 20px; color:aliceblue"><?php echo $datos[$i]["nombre"]; ?></td>
                            <td style="font-size: 20px; color:aliceblue">$ <?php echo $datos[$i]["precio"]; ?>.00</td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <a style="font-size: 28px; color:aliceblue" href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
            </header>
            <div class="col-lg-12 text-center">
                <hr />

            </div>
        </div>
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
                                        <a href="index.html"><img src="../assets/img/logo/logolegion.png" alt=""></a>
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
                                                            <li><a href="../index.php">Nuevo Registro</a></li>
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
    </body>

</html>