@extends("layouts.backendLayout")

@section("titulo")
Stock // {{$place->place}}
@endsection

@section("mainBackend")
<h2>Stock // {{$place->place}}</h2>
<table id="table" class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>ID de producto</th>
            <th>Nombre</th>
            <th>Talla</th>
            <th>Color</th>
            <th>Pedidos</th>
            <th>Stock</th>
            <th>Favoritos</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($stocks as $stock)
        <tr>
            <td>{{$stock->shoe_id}}</td>
            <td><a href="backend/editarProductos/{{$stock->shoe_id}}">{{$stock->shoe->name}}</a></td>
            <td>{{$stock->size}}</td>
            <td>{{$stock->color->name}}</td>
            <td> - - </td>{{-- TODO --}}
            <td>{{$stock->quantity}}</td>
            <td> - - </td>{{-- TODO --}}
        </tr>
        @empty

        @endforelse

    </tbody>
</table>
@endsection