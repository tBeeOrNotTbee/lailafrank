@extends('layouts.shopLayout')
@section('title', 'Editar Cuenta')
@section('content')
<div class="col-12 col-md-7">
    <div class="container-fluid">
        <h2 class="monserrat-bold shop-title cero8em">Editar información de la cuenta</h2>
        <p class="monserrat grey2 cero8em">Mantenga su información de contacto actualizada.</p>

        <div class="row">

            <div class="col-12 mb-4 h50 d-flex flex-column justify-content-between">

                <form method="post" action="" class="w50">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Florencia" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Bonavera" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="DNI 25024532" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </form>

                <div class="w-100 d-flex flex-column shop-links">
                    <span class="mt-3"><i class="far fa-square"></i> <a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">CAMBIAR CORREO ELECTRONICO</a></span>
                    <span class="mt-3"><i class="far fa-square"></i> <a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">CAMBIAR CONTRASEÑA</a></span>
                </div>

                <div class="w50 d-flex justify-content-between">
                    <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
                    <a href="#" class="button-story m-0">Guardar</a>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection