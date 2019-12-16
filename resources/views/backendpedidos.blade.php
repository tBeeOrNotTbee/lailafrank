@extends("layouts.backendLayout")

@section("titulo")
    Pedidos
@endsection

@section("mainBackend")
<h2>Pedidos</h2>
<table id="table" class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>ID de pedido</th>
            <th>Nombre y Apellido</th>
            <th>Modelo</th>
            <th>Fecha</th>
            <th>Color</th>
            <th>Talle</th>
            <th>Observaciones</th>
            <th>Estado</th>
            <th>Dirección de envio</th>
            <th>Código postal</th>
            <th>País</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="index.php?action=pedido&pedidoId=1">1</a></td>
            <td><a href="index.php?action=usuario">B Matias Velázques</a></td>
            <td><a href="index.php?action=editarProducto">Modelo-5</a></td>
            <td>05/11/2019 14:30hs</td>
            <td>Negro</td>
            <td>33</td>
            <td>Ninguna</td>
            <td>En preparación</td>
            <td>Rivadavia 2401 3ro A</td>
            <td>1428</td>
            <td>Argentina</td>
        </tr></a>
        <tr>
            <td><a href="index.php?action=pedido&pedidoId=1">1</a></td>
            <td><a href="index.php?action=usuario">C Matias Velázques</a></td>
            <td><a href="index.php?action=editarProducto">Modelo-5</a></td>
            <td>05/11/2019 14:30hs</td>
            <td>Negro</td>
            <td>33</td>
            <td>Ninguna</td>
            <td>Despachado</td>
            <td>Rivadavia 2401 3ro A</td>
            <td>1428</td>
            <td>Argentina</td>
        </tr>
        <tr>
            <td><a href="index.php?action=pedido&pedidoId=1">1</a></td>
            <td><a href="index.php?action=usuario">A Matias Velázques</a></td>
            <td><a href="index.php?action=editarProducto">Modelo-5</a></td>
            <td>05/11/2019 14:30hs</td>
            <td>Negro</td>
            <td>33</td>
            <td>Ninguna</td>
            <td>En tránsito</td>
            <td>Rivadavia 2401 3ro A</td>
            <td>1428</td>
            <td>Argentina</td>
        </tr>
    </tbody>
    </div>
@endsection