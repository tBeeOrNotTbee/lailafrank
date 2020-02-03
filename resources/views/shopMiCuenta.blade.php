@extends('layouts.shopLayout')
@section('title', 'Mi Cuenta')
@section('content')
<div class="col-12 col-md-7">
    <div class="container-fluid">
        <h2 class="text-center monserrat-bold shop-title">Mi cuenta</h2>

        <div class="row">

            <div class="col-12 col-md-6 mb-4">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Información de contacto</h5>
                        <p class="card-text monserrat shop-card-text grey2 cero7em">Florencia Bonavera</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em">florenciabonavera@gmail.com</p>
                        <hr class="w100">
                        <div class="w-100 d-flex justify-content-between">
                            <a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em">> Cambiar contraseña</a>
                            <a href="shopEditarCuenta.php" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-4">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Newsletters</h5>
                        <p class="card-text monserrat shop-card-text grey2 cero8em">No esta suscripto al boletín</p>
                        <hr class="w100">
                        <div class="w-100 d-flex flex-row-reverse">
                            <a href="shopNewsletter.php" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-12 mb-4 col-md-6 mb-4">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de facturación</h5>
                        <p class="card-text monserrat shop-card-text grey2 cero8em">No ha establecido una dirección de facturación predeterminada todavía</p>
                        <hr class="w100">
                        <div class="w-100 d-flex flex-row-reverse">
                            <a href="shopMisDirecciones.php" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-4">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de envío predeterminada</h5>
                        <p class="card-text monserrat shop-card-text grey2 cero8em">No ha establecido una dirección de envío predeterminada todavía</p>
                        <hr class="w100">
                        <div class="w-100 d-flex flex-row-reverse">
                            <a href="shopMisDirecciones.php" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection