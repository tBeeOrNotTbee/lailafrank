<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/brook.css">
    <link rel="stylesheet" href="../css/lailaStyle.css">
    <title>Laila Frank - @yield('title') </title>
</head>

<body>
    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        <!-- Header -->
        <header class="br_header-sidebar">
            <div class="side-header-inner">
                <div class="header-wrap nav d-flex align-items-center justify-content-between align-content-md-around">
                    <div class="header-top order-2 order-md-1">
                        <div class="branding">
                            <a href="../index.php" class="logo-res">
                                <img src="../img/logo.png" class="img-fluid" alt="logo">
                            </a>
                        </div>
                        <!-- Start MEnu -->
                        <div id="popop-open-menu" class="popop-open-menu hamberger-trigger">
                            <div class="menu-icon">
                                <i></i>
                            </div>
                        </div>
                        <!-- End Menu -->
                    </div>
                    <div class="header-center align-items-end order-3 order-md-3 d-none d-md-flex">
                        <div class="header-social-neworks">
                            <div class="inner">
                                <!-- REDES SOCIALES -->
                                <a href="#"><i class="fab fa-instagram grey"></i></a>
                                <a href="#"><i class="fab fa-facebook-f grey"></i></a>
                                <a href="#"><i class="fab fa-twitter grey"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom order-1 order-md-2">
                        <!-- <div class="popup-search-wrap pr_lg--30 pr_md--30 pr_sm--30">
                     <a class="btn-search-click" href="#">
                         <i class="fa fa-search"></i>
                     </a>
                 </div> -->
                        <!-- Start Hamberger -->
                        <div class="manu-hamber popup-mobile-click d-block d-xl-none gray-version d-block d-xl-none">
                            <div>
                                <i></i>
                            </div>
                        </div>
                        <!-- End Hamberger -->
                    </div>
                    <div class="tool-bar-res d-md-none order-4">
                        <div class="inner">
                            <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="login.php" aria-label="Login">
                                <i class="fas fa-user camel"></i>
                            </a>
                            <a class="hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Shopcar">
                                <i class="fas fa-shopping-bag camel"></i>
                            </a>
                            <a class="hint--bounce hint--left hint--black primary-color-hover-important" href="shopMisFavoritos.php" aria-label="My favourites">
                                <i class="fas fa-heart rosa"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--// Header -->

        <!-- Start Hamberger Menu -->
        <!-- MENU DESKTOP VERSION -->
        <div class="open-hamberger-wrapper d-none d-lg-block">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <a href="../index.php" class="logo-res my-3">
                            <img src="../img/logo_blanco.png" class="img-fluid" alt="logo">
                        </a>

                        <a class="roboto-condensed white newsletter-title" href="historia.php">
                            <h4 class="py-3 mb-2 mt-5">HISTORIA</h4>
                        </a>

                        <a class="roboto-condensed white newsletter-title py-3 my-3" href="catalog.php">
                            <h4 class="py-3 my-2">CATALOGO</h4>
                        </a>

                        <a class="roboto-condensed white newsletter-title py-3 my-3" href="contacto.php">
                            <h4 class="py-3 my-2">CONTACTO</h4>
                        </a>

                        <a class="roboto-condensed white newsletter-title" href="#">
                            <h4 class="py-3 mb-2 mt-2">
                                <a href="#"><i class="fab fa-instagram white"></i></a>
                                <a href="#"><i class="fab fa-facebook-f white mx-3"></i></a>
                                <a href="#"><i class="fab fa-twitter white"></i></a>
                            </h4>
                        </a>
                    </div>
                    <div class="page-close light-version"></div>
                </div>
            </div>




        </div>
        <!-- End Hamberger Menu -->

        <!-- MOBILE MENU -->
        <!-- Start Popup Menu -->
        <div class="popup-mobile-manu popup-mobile-visiable">
            <div class="inner">
                <div class="mobileheader">
                    <div class="logo">
                        <a href="#" class="logo-res">
                            <img src="../img/logo.png" style="width: auto!important;" alt="Logo">
                        </a>
                    </div>
                    <a class="mobile-close" href="#"></a>
                </div>
                <div class="menu-content text-center">
                    <a class="roboto-condensed white newsletter-title" href="historia.php">
                        <h5 class="py-3 mb-2 mt-5">HISTORIA</h5>
                    </a>

                    <a class="roboto-condensed white newsletter-title py-3 my-3" href="catalog.php">
                        <h5 class="py-3 my-2">CATALOGO</h5>
                    </a>

                    <a class="roboto-condensed white newsletter-title py-3 my-3" href="contacto.php">
                        <h5 class="py-3 my-2">CONTACTO</h5>
                    </a>

                    <a class="roboto-condensed white newsletter-title" href="#">
                        <h6 class="py-3 mb-2 mt-2">
                            <a href="#"><i class="fab fa-instagram white"></i></a>
                            <a href="#"><i class="fab fa-facebook-f white mx-3"></i></a>
                            <a href="#"><i class="fab fa-twitter white"></i></a>
                        </h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Popup Menu -->
        <!-- Start Toolbar -->
        <div class="demo-option-container d-none d-md-flex">
            <!-- Start Toolbar -->
            <div class="brook__toolbar">
                <div class="inner">
                    <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Login">
                        <i class="fas fa-user camel"></i>
                    </a>
                    <a class="hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Shopcart">
                        <i class="fas fa-shopping-bag camel"></i>
                    </a>
                    <a class="hint--bounce hint--left hint--black primary-color-hover-important" href="shopMisFavoritos.php" aria-label="My favorites">
                        <i class="fas fa-heart rosa"></i>
                    </a>
                </div>
            </div>
            <!-- End Toolbar -->
            <!-- Start Quick Link -->
            <div class="demo-option-wrapper">
                <div class="demo-panel-header">

                    <div class="d-none d-md-block col-12 mt-4 text-center">
                        <img src="../img/logo_shop.png" class="" alt="">
                    </div>
                    <h1 class="d-inline d-md-none roboto-light text-uppercase mx-auto text-center mt-4">Acceso <br> clientes</h1>

                    <form method="post" action="" class="w-75 w-md-100 mx-auto my-3">
                        <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em p-0" placeholder="CORREO ELECTRÓNICO" aria-describedby="basic-addon2">
                        <input type="password" class="input-line form-control noBk rounded-0 monserrat cero8em p-0 mt-2" placeholder="CONTRASEÑA" aria-describedby="basic-addon2">
                    </form>

                    <div class="d-flex justify-content-end mt-3 mb-5">
                        <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿Olvidaste tu contraseña?</a></span>
                    </div>

                    <div class="d-flex justify-content-center mt-7">
                        <a href="shopMiCuenta.php" class="button-story m-0">Ingresar</a>
                    </div>

                    <div class="d-flex justify-content-center mb-5">
                        <span class="mt-3 shop-link"><a href="registro.php" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿No tenés cuenta? Registrate acá</a></span>
                    </div>

                </div>
                <div class="demo-quick-option-list">


                </div>
            </div>
            <!-- End Quick Link -->
        </div>
        <!-- End Toolbar -->

        <!-- MAIN CONTENT -->
        <main class="page-content ml--100 ml_lg--0 ml_md--0 ml_sm--0">
            <!-- Contenido Principal -->
            <div class="container-fluid">
                <div class="row">
                    <div class="d-none d-md-block col-12 m-4 text-center">
                        <img src="../img/logo_shop.png" class="" alt="">
                    </div>
                </div>


                <!-- CONTENIDO PRINCIPAL -->
                <div class="row">
                    <!-- SHOP MENU RESPONSIVE -->
                    <div class="col-12 mt-4 mb-3 d-block d-md-none">
                        <div id="accordion">
                            <div class="card border-0">
                                <div class="card-header noPad border-0 noBk w100 text-center" id="headingThree">
                                    <h5 class="mb-0 w100 d-flex justify-content-center">
                                        <button class="shop-menu-btn collapsed w80 monserrat d-flex justify-content-end" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span class="col-6 text-center">MENÚ</span> <i class="fas fa-sort-down col-4 d-flex justify-content-end"></i>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">

                                        <ul class="list-group list-group-flush shop-links">
                                            <li class="list-group-item shop-bk"><a href="shopMiCuenta.php" class="grey shop-link-active">Mi cuenta</a></li>
                                            <li class="list-group-item shop-bk"><a href="shopEditarCuenta.php" class="grey">Editar cuenta</a></li>
                                            <li class="list-group-item shop-bk"><a href="shopMisDirecciones.php" class="grey">Mis direcciones</a></li>
                                            <li class="list-group-item shop-bk"><a href="shopCompras.php" class="grey">Mis compras</a></li>
                                            <li class="list-group-item shop-bk"><a href="shopMisFavoritos.php" class="grey">Mis favoritos</a></li>
                                            <li class="list-group-item shop-bk"><a href="shopNewsletter.php" class="grey">Newsletter</a></li>
                                            <li class="list-group-item shop-bk"><a href="../index.php" class="grey">Cerrar sesion</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SHOP MENU DESKTOP -->

                    <div class="d-none d-md-block col-md-3 shop-bk">

                        <ul class="list-group list-group-flush shop-links shop-links-desk">
                            <li class="list-group-item border-0 p-1 noBk"><a href="shopMiCuenta.php" class="grey shop-link-active">Mi cuenta</a></li>
                            <li class="list-group-item border-0 p-1 noBk"><a href="shopEditarCuenta.php" class="grey">Editar cuenta</a></li>
                            <li class="list-group-item border-0 p-1 noBk"><a href="shopMisDirecciones.php" class="grey">Mis direcciones</a></li>
                            <li class="list-group-item border-0 p-1 noBk"><a href="shopCompras.php" class="grey">Mis compras</a></li>
                            <li class="list-group-item border-0 p-1 noBk"><a href="shopMisFavoritos.php" class="grey">Mis favoritos</a></li>
                            <li class="list-group-item border-0 p-1 noBk"><a href="shopNewsletter.php" class="grey">Newsletter</a></li>
                            <li class="list-group-item border-0 p-1 noBk"><a href="../index.php" class="grey">Cerrar sesion</a></li>
                        </ul>

                    </div>

                    @yield('content')
                </div>



                <ul id="footer-links" class="list-group list-group-flush text-center list-group-horizontal-md justify-content-center pl-md-5 pr-md-5">
                    <a href="footercambios.php" class="footer-link roboto-light mt-2 rosa">Cambios & devoluciones</a>
                    <a href="footerpolitica.php" class="footer-link roboto-light mt-2 rosa">Política de garantía</a>
                    <a href="footerenvio.php" class="footer-link roboto-light mt-2 rosa">Tiempo & costo de envío</a>
                    <a href="footeropciones.php" class="footer-link roboto-light mt-2 rosa">Formas de pago</a>
                    <a href="footercuidado.php" class="footer-link roboto-light mt-2 rosa">Cuidados del calzado</a>
                    <a href="#" class="footer-link roboto-light mt-2 rosa">¿Necesitas ayuda?</a>
                </ul>

                <footer class="row footer-info d-flex justify-content-center align-items-center">
                    <div class="col-12 col-md-2 text-center mt-5">
                        <i class="fas fa-map-marker-alt"></i>
                        <h2>Showroom</h2>
                        <p>3 de Febrero 1930<br>Planta baja E</p>
                    </div>
                    <div class="col-12 col-md-2 text-center mt-3">
                        <i class="fas fa-phone-alt"></i>
                        <h2>Teléfono</h2>
                        <p>+5411 - 4788 2483</p>
                    </div>
                    <div class="col-12 col-md-2 text-center mt-3">
                        <i class="far fa-envelope"></i>
                        <h2>Mail</h2>
                        <p>shoes@lailafrank.com</p>
                    </div>
                </footer>
            </div>
        </main>
    </div>


    <!-- <script src="js/modernizr-3.6.0.min.js"></script> -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/home.js"></script>
    <script src="../js/jquery.instagramFeed.min.js"></script>

    <script type="text/javascript">
        (function($) {
            $(window).on('load', function() {
                $.instagramFeed({
                    'username': 'lailafrankshoes',
                    'container': ".insta-feed",
                    'display_profile': false,
                    'display_biography': false,
                    'display_gallery': true,
                    'get_raw_json': false,
                    'callback': null,
                    'styling': true,
                    'items': 6,
                    'items_per_row': 6,
                    'margin': 0
                });
            });
        })(jQuery);
    </script>
</body>

</html>