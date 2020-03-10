@extends("layouts.backendLayout")

@section('css')
<link rel="stylesheet" href="{{ asset('css/lailastyle.css')}}">
@endsection

@section("titulo")
    Pedido - {{$payment->id}}
@endsection

@section("mainBackend")
<div class="container-fluid">
    <div class="row">
        

<div class="col-12 col-md-7 py-4">
    <h2 class="monserrat-bold shop-title unoem text-center text-md-left">Datos de la compra/ Nro. {{$payment->id}}</h2>

    <div class="shop-bk px-3 py-1">
        <table class="table greyBk unoem shop-bk moserrat">
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
                        <h5 class="card-title monserrat shop-card-title grey2 unoem">Dirección de Envío</h5>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>Nombre:</b> {{$payment->address->name}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>Apellido:</b> {{$payment->address->surname}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>E-Mail:</b> {{$payment->shopcar->user->email}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>Calle:</b> {{$payment->address->street}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>Número:</b> {{$payment->address->number}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>Piso:</b> {{$payment->address->floor}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>Departamento:</b> {{$payment->address->apartment}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>Ciudad:</b> {{$payment->address->city}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>Estado/Provincia:</b> {{$payment->address->state}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>Código postal:</b> {{$payment->address->post_code}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>País:</b> {{$payment->address->country}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>Teléfono:</b> {{$payment->address->telephone}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem mt-0"><b>Detalles:</b> {{$payment->address->details}}</p>
                    </div>
                </div>
            </div>

            <div class="col-10 col-md-6 mb-4 mx-auto p-md-0">
                <div class="card shop-bk border-0 h100x">
                    <form class="card-body d-flex flex-column justify-content-between" method="POST" action="/backend/pedido/update">
                        @csrf
                        <h5 class="card-title monserrat shop-card-title grey2 unoem">Estado</h5>
                        <input type="hidden" name="payment_id" value="{{$payment->id}}">
                        <p class="card-text monserrat shop-card-text grey2 unoem"><b>Estado actual:</b> {{$payment->state}}</p>
                        <p class="card-text monserrat shop-card-text grey2 unoem"><b>Cambiar estado:</b></p>
                        <select name="state">
                            <option value="acreditado" {{$payment->state == 'acreditado' ? 'selected' : ''}}>Acreditado</option>
                            <option value="pendiente" {{$payment->state == 'pendiente' ? 'selected' : ''}}>Pendiente</option>
                            <option value="rechazado" {{$payment->state == 'rechazado' ? 'selected' : ''}}>Rechazado</option>
                            <option value="despachado" {{$payment->state == 'despachado' ? 'selected' : ''}}>Despachado</option>
                            <option value="enviado" {{$payment->state == 'enviado' ? 'selected' : ''}}>Enviado</option>
                        </select>
                        <select name="shipping_method">
                            <option value="oca" {{$payment->state == 'oca' ? 'selected' : ''}}>Oca</option>
                            <option value="dhl" {{$payment->state == 'dhl' ? 'selected' : ''}}>DHL</option>
                        </select>
                        <p class="card-text monserrat shop-card-text grey2 unoem mb-0">Tracking ID</p>
                        <input type="text" name="tracking_id" id="" placeholder="tracking_id" value="{{$payment->tracking_id}}">
                        <button type="submit">Actualizar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</div>
</div>
@endsection