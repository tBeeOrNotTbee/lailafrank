@extends('layouts.shopLayout')
@section('title', 'Detalle de Compra')
@section('contentShop')
<div class="col-12 col-md-7 py-4">
    <h2 class="monserrat-bold shop-title cero8em text-center text-md-left">Datos de la compra/ Nro. {{$payment->id}}</h2>
    @isset($success)
        <div class="alert alert-success noBk rounded-0" role="alert">
        <h4 class="alert-heading">Felicitaciones!</h4>
        <hr>
        <p>Hemos registrado tu compra con éxito!</p>
      </div>
    @endisset

    @isset($pending)
        <div class="alert alert-warning noBk rounded-0" role="alert">
        <h4 class="alert-heading">Información del pago</h4>
        <hr>
        <p>La acreditación está pendiente, cuando se confirme el pedido será despachado</p>
      </div>
    @endisset

    <div class="shop-bk px-3 py-1">
        <table class="table greyBk cero7em shop-bk moserrat">
            <thead>
                <tr>
                    <th scope="col" class="border-0"></th>
                    <th scope="col" class="border-0">Producto</th>
                    <th scope="col" class="border-0">Precio</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($payment->shopcar->stock as $shoe)
                <tr>
                    <td scope="row" class="p-0 shop-shoe-img">
                        {{-- <img src="/storage/{{$shoe->shoe->previewA()->img_path}}" class="col-12 img-fluid p-0 w100"> --}}
                        <img src="/public/{{$shoe->shoe->previewA()->img_path}}" class="col-12 img-fluid p-0 w100">
                    </td>
                    <td class="align-middle">{{$shoe->shoe->name}}</td>
                    <td class="align-middle">${{$shoe->shoe->price}}</td>
                </tr>
                @empty
                    <p>Pedido sin productos</p>
                @endforelse
                
                <tr>
                    <td class="border-0" colspan="2">&nbsp;</td>
                    <th colspan="2" class="shop-bk2 border-0 shop-border pr-0 mr-0 w100 d-flex justify-content-between">
                        <span>TOTAL</span>
                        <span>${{$payment->total_amount}}</span>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-md-between">

            <div class="col-10 col-md-6 mb-4 mx-auto p-md-0">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de Envío</h5>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>Nombre:</b> {{$payment->address->name}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>Apellido:</b> {{$payment->address->surname}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>E-Mail:</b> {{$payment->shopcar->user->email}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>Calle:</b> {{$payment->address->street}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>Número:</b> {{$payment->address->number}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>Piso:</b> {{$payment->address->floor}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>Departamento:</b> {{$payment->address->apartment}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>Ciudad:</b> {{$payment->address->city}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>Estado/Provincia:</b> {{$payment->address->state}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>Código postal:</b> {{$payment->address->post_code}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>País:</b> {{$payment->address->country}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>Teléfono:</b> {{$payment->address->telephone}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0"><b>Detalles:</b> {{$payment->address->details}}</p>
                    </div>
                </div>
            </div>

            <div class="col-10 col-md-6 mb-4 mx-auto p-md-0">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Información</h5>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-1"><b>Estado:</b> {{$payment->state}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-1"><b>Correo:</b> {{$payment->shipping_method}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-1"><b>Tracking id:</b> {{$payment->tracking_id}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection