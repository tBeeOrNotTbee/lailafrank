@extends("layouts.backendLayout")

@section("titulo")
    Reporte
@endsection

@section("mainBackend")
<h2>Reporte de Ventas</h2>

<form action="#" method="POST" class="row">
    <div class="form-group row col-12 col-md-3 d-flex justify-content-left mr-3">

        <label for="example-date-input pr-2" class="col-form-label">Desde: </label>
        <input class="form-control inputDate form-control-sm" type="date" name="desde" id="date-input1">

    </div>
    <div class="form-group row col-12 col-md-3 d-flex justify-content-left mr-3">

        <label for="example-date-input pr-2" class="col-form-label">Hasta: </label>
        <input class="form-control inputDate form-control-sm" type="date" name="hasta" id="date-input2">

    </div>
    <div class="form-group row col-12 col-md-3 d-flex justify-content-left mr-3">

        <label for="example-date-input pr-2" class="col-form-label">Punto de venta: </label>
        <select class="form-control form-control-sm" id="exampleFormControlSelect1">
            <option value="3">Ambos</option>
            <option value="2">Showroom</option>
            <option value="1">Web</option>
        </select>

    </div>
</form>



<table id="table" class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Talle</th>
            <th>Cantidad vendida</th>
            <th>Precio unitario</th>
            <th>Total</th>
            <th>Punto de venta</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="index.php?action=pedido"></a>Modelo-5</td>
            <td>41</td>
            <td>15</td>
            <td>$10000</td>
            <td>$150000</td>
            <td>Showroom</td>
        </tr>
        <tr>
            <td><a href="index.php?action=pedido"></a>Modelo-5</td>
            <td>42</td>
            <td>15</td>
            <td>$10000</td>
            <td>$150000</td>
            <td>Showroom</td>
        </tr>
        <tr>
            <td><a href="index.php?action=pedido"></a>Modelo-6</td>
            <td>43</td>
            <td>15</td>
            <td>$10000</td>
            <td>$150000</td>
            <td>Web</td>
        </tr>
        <tr>
            <td><a href="index.php?action=pedido"></a>Modelo-6</td>
            <td>41</td>
            <td>15</td>
            <td>$10000</td>
            <td>$150000</td>
            <td>Showroom</td>
        </tr>
        <tr>
            <td><a href="index.php?action=pedido"></a>Modelo-6</td>
            <td>42</td>
            <td>15</td>
            <td>$10000</td>
            <td>$150000</td>
            <td>Showroom</td>
        </tr>
        <tr>
            <td><a href="index.php?action=pedido"></a>Modelo-5</td>
            <td>43</td>
            <td>15</td>
            <td>$10000</td>
            <td>$150000</td>
            <td>Web</td>
        </tr>
    </tbody>
</table>
@endsection