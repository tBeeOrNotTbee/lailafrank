@extends('layouts.backendLayout')

@section('titulo')
Carrito de compras
@endsection

@section('mainBackend')
<h2>Carrito</h2>

@if (!isset($vacio))
<table class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>ID de producto</th>
            <th>Modelo</th>
            <th>Talle</th>
            <th>Color</th>
            <th>Precio</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shopcar->stock as $product)
        <tr>
            <td>{{$product->shoe_id}}</td>
            <td><a href="index.php?action=usuario">{{$product->shoe->name}}</a></td>
            <td>{{$product->size}}</td>
            <td>{{$product->color->name}}</td>
            <td>$ {{$product->shoe->price}}</td>
            <td><a class="btn btn-link btn-sm" type="button"
                    href="/shopcar/remove/{{$shopcar->id}}/{{$product->pivot->id}}">Quitar</a></td>
        </tr>
        @endforeach
        <tr class="table-success">
            <td></td>
            <td></td>
            <td></td>
            <td><b>Total</b></td>
            <td>$ </td>
            <td></td>
        </tr>
    </tbody>
</table>

<hr>

<h3>Dirección de envio</h3>

<a href="/backend/address/new/" class="btn btn-link">Nueva dirección</a>

<form action="/shopcar/shippingMethod/add/" method="post">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="shipping_address" id="exampleRadios2" value="">
        <label class="form-check-label" for="exampleRadios2">
            Retiro en sucursal (Sin costo)
        </label>
    </div>

    @foreach ($addresses as $address)
    <div class="form-check">
        <input class="form-check-input" type="radio" name="shipping_address" id="exampleRadios1" value="{{$address->id}}">
        <label class="form-check-label" for="exampleRadios1">
        <p>{{$address->country}} - {{$address->state}} - {{$address->city}} - {{$address->street}} - {{$address->number}}</p>
        </label>
    </div>
    @endforeach
</form>

<script src="{{asset('js/oca.js')}}"></script>
@else
<h4>No hay productos cargados.</h4>
@endif

@endsection