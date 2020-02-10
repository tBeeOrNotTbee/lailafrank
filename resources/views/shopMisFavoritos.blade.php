@extends('layouts.shopLayout')
@section('title', 'Mis Favoritos')
@section('contentShop')
<div class="col-12 col-md-7 py-md-5">
    <div class="container-fluid">

        <h2 class="text-center monserrat-bold shop-title cero8em">Mis favoritos</h2>

        <div class="row">

            @forelse (Auth::user()->favorites as $favorite)     
            <div id="product1" class="col-6 col-md-4 card border-0 rounded-0">
                <div class="p-0 p-md-3">
                    <!-- THUMBNAIL CAROUSEL -->
                    <div class="shoe-img-preview">
                        <?php $previews=$favorite->previewSmall();?>
                        <img src="/storage/{{$previews[0]->img_path}}" class="img-fluid">
                        <img src="/storage/{{$previews[1]->img_path}}" class="img-top img-fluid">
                    </div>
                </div>
                
                <div class="card-body text-center">
                    <h5 class="card-title roboto-light black thumbnail-title">{{$favorite->name}}</h5>
                    <p class="card-text roboto black thumbnail-price">{{$favorite->price}}</p>
                    <div class="row d-flex justify-content-around">
                        <div class="show-color">
                            <div class="w100" style="background-color: blue"></div>
                        </div>
                    </div>
                <a href="/favorites/change2/{{$favorite->id}}" class="btn btn-link text-uppercase cero7em mt-2 red">x Eliminar</a>
                </div>
            </div>
            @empty
                <h5 class="monserrat cero7em">No ha seleccionado favoritos todavía.</h5>
            @endforelse

        </div>

        <div class="w100 d-flex justify-content-between mt-5">
            <span class="mt-3 shop-link"><a href="/shop/myaccount" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
            <a href="#" class="button-story m-0">Compartir favoritos</a>
        </div>

    </div>
</div>
@endsection