@extends('layouts.shopLayout')
@section('title', 'Mis Favoritos')
@section('contentShop')
<div class="col-12 col-md-7 py-md-5">
    <div class="container-fluid">

        <h2 class="text-center monserrat-bold shop-title cero8em">Mis favoritos</h2>

        <div class="row">

            <div id="product1" class="col-6 col-md-4 card border-0 rounded-0">
                <div class="p-0 p-md-3">
                    <!-- THUMBNAIL CAROUSEL -->
                    <div class="shoe-img-preview">
                        <img src="../img/shoe_1.jpg" class="img-fluid" alt="">
                        <img src="../img/shoe_2.jpg" class="img-top img-fluid" alt="">
                    </div>
                </div>
                <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                    <i class="far fa-heart" style="margin-right: 0!important"></i>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                    <p class="card-text roboto black thumbnail-price">$10.000</p>
                    <div class="row d-flex justify-content-around">
                        <div class="show-color">
                            <div class="w100" style="background-color: blue"></div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-link text-uppercase cero7em mt-2 red">x Eliminar</button>
                </div>




            </div>

            <div id="product1" class="col-6 col-md-4 card border-0 rounded-0">
                <div class="p-0 p-md-3">
                    <!-- THUMBNAIL CAROUSEL -->
                    <div class="shoe-img-preview">
                        <img src="../img/shoe_1.jpg" class="img-fluid" alt="">
                        <img src="../img/shoe_2.jpg" class="img-top img-fluid" alt="">
                    </div>
                </div>
                <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                    <i class="far fa-heart" style="margin-right: 0!important"></i>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                    <p class="card-text roboto black thumbnail-price">$10.000</p>
                    <div class="row d-flex justify-content-around">
                        <div class="show-color">
                            <div class="w100" style="background-color: blue"></div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-link text-uppercase cero7em mt-2 red">x Eliminar</button>
                </div>
            </div>

        </div>

        <div class="w100 d-flex justify-content-between mt-5">
            <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
            <a href="#" class="button-story m-0">Compartir favoritos</a>
        </div>

    </div>
</div>
@endsection