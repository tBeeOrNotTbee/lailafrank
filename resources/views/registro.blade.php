@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container mb-5 mt-5">
    <div class="d-flex justify-content-center">

        <div class="col-md-4">
            <div class="text-center">

                <div class="d-none d-md-block col-12 mb-4">
                    <img src="../img/logo_shop.png" alt="">
                </div>

                <div class="mb-2 monserrat font-weight-bold cero8em"> Creá tu cuenta</div>

                <div class="mb-2">
                    <a class="btn btn-outline-dark rounded-0 pl-5 pr-5 cero7em" type="button" name="button" href="login.php"> <i class="far fa-envelope"></i> INGRESÁ CON TU EMAIL</a>
                </div>

                <div class="card p-4 align-center">
                    <form action="shopMiCuenta.php">
                        @CSRF
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Nombre">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Apellido">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="DNI">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Contraseña">
                        </div>

                        <button type="submit" class="btn button-story rounded-0">Ingresar</button>

                        <div class="w100 d-flex justify-content-end">
                            <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection