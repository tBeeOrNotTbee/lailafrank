<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/brook.css')}}">
    <link rel="stylesheet" href="{{asset('css/lailaStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/catalog.css')}}">
    <link rel="stylesheet" href="{{asset('css/smoothproducts.css')}}">
    
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


                <!-- CONTENIDO PRINCIPAL -->

                @yield('content')


                @include('layouts.partials.footer')
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
    <script src="{{asset('js/smoothproducts.min.js')}}"></script>

    <script type="text/javascript">
        /* wait for images to load */
        $(window).on("load", function() {
          $('.sp-wrap').smoothproducts();
        });
      </script>

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