@extends('layouts.shopLayout')
@section('title', 'Compras')
@section('contentShop')
<div class="col-12 col-md-7 py-4 py-md-5">
    <h2 class="monserrat-bold shop-title cero8em text-center text-md-left">Mis compras</h2>
    <p class="monserrat grey2 cero8em text-center text-md-left">Si tenés dudas, comunicate con nosotros vía email a compras@lailafrank.com,
        ó por teléfono a (011) 49179488</p>
    
    @if (count($payments_orders) >= 1)
    <table class="table greyBk cero7em shop-bk moserrat">
        <thead>
            <tr>
                <th scope="col" class="border-0">Pedido #</th>
                <th scope="col" class="border-0">Fecha</th>
                <th scope="col" class="border-0 d-none d-md-block">Enviar a</th>
                <th scope="col" class="border-0">Total del Pedido</th>
                <th scope="col" class="border-0 d-none d-md-block">Estado</th>
                <th scope="col" class="border-0"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($payments_orders as $payment)
            <tr>
                <th scope="row">{{$payment->id}}</th>
                <td>{{$payment->created_at}}</td>
                <td class=" d-none d-md-block">{{$payment->address->name}}</td>
                <td>${{$payment->total_amount }}</td>
                <td class="text-italic d-none d-md-block">{{$payment->state}}</td>
                <td><span class="mt-3 shop-link"><a href="/shop/myaccount/purchased/{{$payment->id}}" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> ver</a></span></td>
            </tr>
            @empty
                <p class="monserrat cero7em">No posee compras</p>
            @endforelse
        </tbody>
    </table>        
    @else
        <p class="monserrat cero7em">No posee compras</p>
    @endif
</div>
@endsection