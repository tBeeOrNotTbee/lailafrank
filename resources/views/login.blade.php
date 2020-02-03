@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="row">
    <div class="d-none d-md-block col-12 mt-4 text-center">
        <img src="../img/logo_shop.png" class="" alt="">
    </div>
    <h1 class="d-inline d-md-none roboto-light text-uppercase mx-auto text-center mt-4">Acceso <br> clientes</h1>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="row mt-5 mb-5 d-flex justify-content-center">
    <div class="col-12 col-md-4">

        <form method="post" action="" class="w-75 w-md-100 mx-auto my-3">
            @CSRF
            <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em p-0" placeholder="CORREO ELECTRÓNICO" aria-describedby="basic-addon2">
            <input type="password" class="input-line form-control noBk rounded-0 monserrat cero8em p-0 mt-2" placeholder="CONTRASEÑA" aria-describedby="basic-addon2">
        </form>

        <div class="d-flex justify-content-end mt-3 mb-5">
            <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿Olvidaste tu contraseña?</a></span>
        </div>

        <div class="d-flex justify-content-center mt-7">
            <a href="shopMiCuenta.php" class="button-story m-0">Ingresar</a>
        </div>

        <div class="d-flex justify-content-center mb-5">
            <span class="mt-3 shop-link"><a href="registro.php" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿No tenés cuenta? Registrate acá</a></span>
        </div>

    </div>
</div>
@endsection