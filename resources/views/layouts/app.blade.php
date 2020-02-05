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
    <title>@yield('title')</title>
</head>

<body>
    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        @include('layouts.partials.navFront')
        @include('layouts.partials.toolbarFront')

        <!-- MAIN CONTENT -->
        <main class="page-content ml--100 ml_lg--0 ml_md--0 ml_sm--0">
            <!-- Contenido Principal -->
            <div class="container-fluid">
                @yield('advert')


                <!-- CONTENIDO PRINCIPAL -->

                @yield('content')




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
                        <p>3 de Febrero 1930<br>plata baja E</p>
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
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
    <script src="{{asset('js/jquery.instagramFeed.min.js')}}"></script>

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