@extends("layouts.backendLayout")

@section("titulo")
    Stock
@endsection

@section("mainBackend")
<h2>Stock</h2>
<table id="table" class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>ID de prodcuto</th>
            <th>Nombre</th>
            <th>Talla</th>
            <th>Pedidos</th>
            <th>Stock depósito</th>
            <th>Stock showroom</th>
            <th>Stock total</th>
            <th>Favoritos</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td><a href="backend/editarProductos/producto_id">Modelo-5</a></td>
            <td>Modelo-5</td>
            <td>33</td>
            <td>6</td>
            <td>6</td>
            <td>12</td>
            <td>15</td>
        </tr>
        <tr>
            <td>1</td>
            <td><a href="backend/editarProductos/producto_id">Modelo-5</a></td>
            <td>Modelo-5</td>
            <td>33</td>
            <td>6</td>
            <td>6</td>
            <td>12</td>
            <td>15</td>
        </tr>
        <tr>
            <td>1</td>
            <td><a href="backend/editarProductos/producto_id">Modelo-5</a></td>
            <td>Modelo-5</td>
            <td>33</td>
            <td>6</td>
            <td>6</td>
            <td>12</td>
            <td>15</td>
        </tr>
    </tbody>
</table>
@endsection