@extends("layouts.backendLayout")

@section("titulo")
    Ventas Mes {{ $mes }}
@endsection

@section("mainBackend")
<h2 style="text-transform: capitalize;">Ventas <?=$_GET["mes"]?> </h2>
<table id="table" class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>ID de pedido</th>
            <th>Nombre y Apellido</th>
            <th>Modelo</th>
            <th>Fecha</th>
            <th>Color</th>
            <th>Talle</th>
            <th>Monto Producto</th>
            <th>Monto Pedido</th>
            <th>Mail</th>
            <th>Teléfono</th>
            <th>País</th>
            <th>Dirección de envio</th>
            <th>Código postal</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="/backend/pedido"></a> 1</td>
            <td><a href="/backend/editarUsuario">Matias Velázques</a></td>
            <td><a href="/backend/editarProductos">Modelo-5</a></td>
            <td>05/11/2019 14:30hs</td>
            <td>Negro</td>
            <td>33</td>
            <td>5000</td>
            <td>15000</td>
            <td>mail@gmail.com</td>
            <td>011- 15 556565</td>
            <td>Ninguna</td>
            <td>Rivadavia 2401 3ro A</td>
            <td>1428</td>
            <td>Argentina</td>
        </tr>
        <tr>
            <td>1</td>
            <td><a href="/backend/editarUsuario">Matias Velázques</a></td>
            <td><a href="/backend/editarProductos">Modelo-5</a></td>
            <td>05/11/2019 14:30hs</td>
            <td>Negro</td>
            <td>33</td>
            <td>5000</td>
            <td>15000</td>
            <td>mail@gmail.com</td>
            <td>011- 15 556565</td>
            <td>Ninguna</td>
            <td>Rivadavia 2401 3ro A</td>
            <td>1428</td>
            <td>Argentina</td>
        </tr>
        <tr>
            <td>1</td>
            <td><a href="/backend/editarUsuario">Matias Velázques</a></td>
            <td><a href="/backend/editarProductos">Modelo-5</a></td>
            <td>05/11/2019 14:30hs</td>
            <td>Negro</td>
            <td>33</td>
            <td>5000</td>
            <td>15000</td>
            <td>mail@gmail.com</td>
            <td>011- 15 556565</td>
            <td>Ninguna</td>
            <td>Rivadavia 2401 3ro A</td>
            <td>1428</td>
            <td>Argentina</td>
        </tr>
    </tbody>
</table>
@endsection