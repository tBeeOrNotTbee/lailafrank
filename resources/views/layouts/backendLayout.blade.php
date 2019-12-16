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
</head>

<body>
    <!--=============================================-->
    <!--======              NAV                ======-->
    <nav id="backnav" class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Zapatería</a>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Salir</a>
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
                            <li class="nav-item" style="margin-top: 5em;">
                                <a class="nav-link" href="/backend/pedidos">
                                    Pedidos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/backend/stock">
                                    Stock
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown-menu">
                                <span class="dropdown-item-text">Productos2</span>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                                <a class="nav-link" href="/backend/productos">
                                    Productos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/backend/ventas">
                                    Ventas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/backend/reporte">
                                    Reporte de ventas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/backend/misGustos">
                                    Mis Gustos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/backend/usuarios">
                                    Usuarios
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
        $(document).ready(function() {
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
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
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