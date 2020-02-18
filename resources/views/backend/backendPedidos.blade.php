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
            <th>Observaciones</th>
            <th>Estado</th>
            <th>Dirección de envio</th>
            <th>Código postal</th>
            <th>País</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($payments as $payment)
        <tr>
            <td><a href="/backend/pedido/{{$payment->id}}">{{$payment->id}}</a></td>
            <td>{{$payment->user->fullname()}}</td>
            <td>{{$payment->created_at}}</td>
            <td>{{$payment->state}}</td>
            <td>{{$payment->address->cardLineOne()}}</td>
            <td>{{$payment->address->post_code}}</td>
            <td>{{$payment->address->country}}</td>
        </tr>
        @empty
            
        @endforelse
    </tbody>
    </div>
</table>
@endsection