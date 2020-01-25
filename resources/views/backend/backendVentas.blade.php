@extends("layouts.backendLayout")

@section("titulo")
    Ventas
@endsection

@section("mainBackend")
<h2>Ventas</h2>
<table id="table" class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>Mes</th>
            <th>Pares vendidos</th>
            <th>Pedidos</th>
            <th>Monto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="backend/ventasMes/nromes">Noviembre</a></td>
            <td>60</td>
            <td>56</td>
            <td>$10000</td>
        </tr>
        <tr>
            <td><a href="backend/ventasMes/nromes">Diciembre</a></td>
            <td>60</td>
            <td>56</td>
            <td>$10000</td>
        </tr>
        <tr>
            <td><a href="backend/ventasMes/nromes">Enero</a></td>
            <td>60</td>
            <td>56</td>
            <td>$10000</td>
        </tr>

    </tbody>
</table>
@endsection