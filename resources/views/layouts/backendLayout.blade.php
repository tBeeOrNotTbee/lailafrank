<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('titulo')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/back.css') }}">
    <link rel="stylesheet" href="{{ asset('css/catalog.css')}}">
</head>

<body>
    <!--=============================================-->
    <!--======              NAV                ======-->
    <nav id="backnav" class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a href="/" class="logo-res">
            <img src="{{asset('img/logo.svg')}}" class="img-fluid m-3" style="max-height: 50px" alt="logo">
        </a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <!--=============================================-->

    <div class="container-fluid">
        <div class="row">

            <!--=============================================-->
            <!--======              ASIDE              ======-->
            <aside class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item {{ Request::is('backend/pedidos') ? 'active' : '' }}" style="margin-top: 5em;">
                            <a class="nav-link" href="/backend/pedidos">
                                Pedidos 
                            </a>
                        </li>
                        <li class="nav-item">
                            <div id="accordion">
                                <a id="headingOne" class="nav-link {{ Request::is('backend/stock') ? 'active' : '' }}" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne" style="cursor:pointer!important;">
                                    Stock 
                                </a>

                                <div id="collapseOne" class="collapse {{isset($stockM) ? 'show' : ''}}"
                                    aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <a class="nav-link {{ Request::is('backend/stock/1') ? 'active' : '' }}" href="/backend/stock/1">
                                            Depósito
                                        </a>
                                        <a class="nav-link {{ Request::is('backend/stock/2') ? 'active' : '' }}" href="/backend/stock/2">
                                            Showroom
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::path() == 'backend/productos' ? 'active' : ''}}" href="/backend/productos">
                                Productos 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('backend/ventas') ? 'active' : '' }}" href="/backend/ventas">
                                Ventas 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('backend/reporte') ? 'active' : '' }}" href="/backend/reporte">
                                Reporte de ventas 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('backend/misGustos') ? 'active' : '' }}" href="/backend/misGustos">
                                Mis Gustos 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('backend/usuarios') ? 'active' : '' }}" href="/backend/usuarios">
                                Usuarios 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('backend/discount') ? 'active' : '' }}" href="/backend/discount">
                                Cupones de descuento 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('backend/shopcar/list/') ? 'active' : '' }}" href="/backend/shopcar/list/">
                                Carrito de compras 
                            </a>
                        </li>
                </div>
            </aside>
            <!--=============================================-->


            <!--=============================================-->
            <!--======         MAIN SECTION            ======-->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                @yield("mainBackend")
            </main>
            <!--=============================================-->

        </div>
    </div>

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/holder.min.js') }}"></script>
    @yield("scripts")

    <script>
        $(document).ready(function () {
            $('#table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ],
                "language": {
                    "decimal": "",
                    "emptyTable": "No hay información disponible para esta tabla",
                    "info": "Mostrando _START_ de _END_ de _TOTAL_ entradas",
                    "infoEmpty": "Mostrando 0 de 0 de 0 entradas",
                    "infoFiltered": "(filtered from _MAX_ total entries)",
                    "infoPostFix": "",
                    "thousands": ".",
                    "lengthMenu": "Mostrar _MENU_ entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "No se encontraron registros",
                    "paginate": {
                        "first": "Primera",
                        "last": "Última",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "aria": {
                        "sortAscending": ": activar para  ordenar de forma ascendente",
                        "sortDescending": ": activar para ordenar de forma descendiente"
                    }
                }
            });
        });
    </script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>