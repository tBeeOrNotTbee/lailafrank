@extends('layouts.shopLayout')
@section('title', 'Mis Direcciones')
@section('contentShop')
<div class="col-12 col-md-7">
    <div class="container-fluid">
        <div class="row d-flex flex-column">


            @forelse (Auth::user()->address as $address)
                <div class="col-12 col-md-6 mb-4">
                    <div class="card shop-bk border-0 h100x">
                        <div class="card-body d-flex flex-column justify-content-around">
                            <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de envío</h5>
                            <p class="card-text monserrat shop-card-text grey2 cero7em my-0">{{$address->cardLineOne()}}</p>
                            <p class="card-text monserrat shop-card-text grey2 cero7em my-0">{{$address->cardLineTwo()}}</p>
                            <p class="card-text monserrat shop-card-text grey2 cero7em my-0">{{$address->cardLineThree()}}</p></p>
                            <p class="card-text monserrat shop-card-text grey2 cero7em my-0">T: {{$address->telephone}}//{{$address->cellphone}}</p>
                            <div class="w-100 d-flex justify-content-end">
                                <a href="shopEditarDireccion.php" class="shop-card-text monserrat text-uppercase grey2 cero7em">
                                    <i class="fas fa-pencil-alt"></i> Editar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No posee direciones para mostrar.</p>
            @endforelse

        </div>

        <div class="w-100 d-flex justify-content-end">
            <span class="mt-3 shop-link"><a href="/shop/myaccount/addresses/new" class="shop-card-text monserrat text-uppercase grey2 cero7em"
                    style="font-size: 0.8em">> NUEVA DIRECCIÓN</a></span>
        </div>
    </div>
</div>
@endsection