@extends("layouts.backendLayout")

@section("titulo")
    Mis Gustos
@endsection

@section("mainBackend")
<h2>Resultados de "Mis gustos"</h2>
<table id="table" class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Opcion</th>
            <th>Porcentaje</th>
            <th>Votos</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Taco</td>
            <td>Aguja</td>
            <td>10%</td>
            <td>8</td>
        </tr>
        <tr>
            <td>Taco</td>
            <td>Cono</td>
            <td>10%</td>
            <td>9</td>
        </tr>
        <tr>
            <td>Tela</td>
            <td>Gamuza</td>
            <td>10%</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Tela</td>
            <td>Cuero</td>
            <td>10%</td>
            <td>8</td>
        </tr>

    </tbody>
</table>
@endsection