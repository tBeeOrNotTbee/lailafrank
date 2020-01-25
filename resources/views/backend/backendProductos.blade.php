@extends("layouts.backendLayout")

@section("titulo")
    Productos
@endsection

@section("mainBackend")
<h2>Productos</h2>

<div class="d-flex justify-content-start flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2 justify-content-end">
            <a class="btn btn-sm btn-outline-primary btn-xs" href="/backend/nuevoProducto">Nuevo</a>
        </div>
    </div>
</div>

<table id="table" class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>ID de producto</th>
            <th>Nombre</th>
            <th>Material de capellada</th>
            <th>Material de forro</th>
            <th>Taco forma</th>
            <th>Taco altura</th>
            <th>Suela</th>
            <th>Visible</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shoes as $shoe)
            <tr>
                <td>{{$shoe['id']}}</td>
                <td><a href="/backend/verProducto/{{$shoe['id']}}">{{$shoe['name']}}</a></td>
                <td>{{$shoe['chapped']}}</td>
                <td>{{$shoe['cover']}}</td>
                <td>{{$shoe['heels']}}</td>
                <td>{{$shoe['height_heels']}}</td>
                <td>{{$shoe['sole']}}</td>
                <td>{{ $shoe['hidden'] == 1 ? 'No':'Si'}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection