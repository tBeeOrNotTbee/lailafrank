@extends('layouts.shopLayout')
@section('title', 'Mis Direcciones')
@section('content')
<div class="col-12 col-md-7">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-md-6 mb-4">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de facturación</h5>
                        <p class="card-text monserrat shop-card-text grey2 cero7em my-0">Florencia Bonavera</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em my-0">ARCHIRA 4896, PISO 1, OF 5.</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em my-0">Ciudad Autónoma Buenos Aires, 1431</p>
                        <pv class="w-100 d-flex justify-content-end">
                            <a href="shopEditarDireccion.php" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="card shop-bk border-0 h100x">
                <div class="card-body d-flex flex-column justify-content-around">
                    <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de envío predeterminada</h5>
                    <p class="card-text monserrat shop-card-text grey2 cero7em my-0">Florencia Bonavera</p>
                    <p class="card-text monserrat shop-card-text grey2 cero7em my-0">ARCHIRA 4896, PISO 1, OF 5.</p>
                    <p class="card-text monserrat shop-card-text grey2 cero7em my-0">Ciudad Autónoma Buenos Aires, 1431</p>
                    <p class="card-text monserrat shop-card-text grey2 cero7em my-0">Argentina</p>
                    <p class="card-text monserrat shop-card-text grey2 cero7em my-0">T: 1550135428</p>
                    <hr class="w100">
                    <div class="w-100 d-flex justify-content-end">
                        <a href="shopEditarDireccion.php" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 d-flex justify-content-end">
            <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> EDITAR DIRECCIONES</a></span>
        </div>
    </div>
    @endsection