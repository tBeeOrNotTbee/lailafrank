@extends('layouts.shopLayout')
@section('title', 'Mi Cuenta')
@section('contentShop')
<div class="col-12 col-md-7">
    <div class="container-fluid">
        <h2 class="text-center monserrat-bold shop-title">Mi cuenta</h2>

        <div class="row">

            <div class="col-12 col-md-6 mb-4">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Información de contacto</h5>
                        <p class="card-text monserrat shop-card-text grey2 cero7em">{{Auth::user()->fullName()}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em">{{Auth::user()->email}}</p>
                        <hr class="w100">
                        <div class="w-100 d-flex justify-content-between">
                            <a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em">> Cambiar contraseña</a>
                            <a href="/shop/myaccount/edit" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-4">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Newsletters</h5>
                        @if (in_array(Auth::user()->email, $email_list))
                            <p class="card-text monserrat shop-card-text grey2 cero8em">Estás en nuestra lista</p>
                        @else
                            <p class="card-text monserrat shop-card-text grey2 cero8em">No esta suscripto al boletín</p>
                        @endif
                            <hr class="w100">
                            <div class="w-100 d-flex flex-row-reverse">
                                <a href="/shop/myaccount/newsletter" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                            </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-12 col-md-6 mb-4">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de envío</h5>

                        @forelse (Auth::user()->address as $address)
                        <p class="card-text monserrat shop-card-text grey2 cero7em my-0">{{$address->fullName()}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em my-0">{{$address->cardLineOne()}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em my-0">{{$address->cardLineTwo()}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em my-0">{{$address->cardLineThree()}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em my-0">T: {{$address->cellphone}}//{{$address->telephone ?? ''}}</p>

                        <div class="w-100 d-flex flex-row-reverse">
                            <a href="/shop/myaccount/addresses/edit/{{$address->id}}" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                        </div>
                        @break
                        @empty
                        <p class="card-text monserrat shop-card-text grey2 cero8em">No ha establecido una dirección de envío predeterminada todavía</p>
                        <hr class="w100">
                        <div class="w-100 d-flex flex-row-reverse">
                            <a href="/shop/myaccount/addresses/new" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Nueva</a>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection