@extends('layouts.shopLayout')
@section('title', 'Shopcar')
@section('contentShop')
<div class="col-12 col-md-7 py-md-5">
    <div class="container-fluid">

        <h2 class="text-center monserrat-bold shop-title cero8em">Shopcar</h2>

        @if(!isset($vacio))
        <div class="row">


            @forelse ($shopcar->stock as $product)
            <div id="product1" class="col-6 col-md-4 card border-0 rounded-0">
                <div class="p-0 p-md-3">
                    <!-- THUMBNAIL CAROUSEL -->
                    <div class="shoe-img-preview">
                        <?php $previews = $product->shoe->previewSmall(); ?>
                        <img src="/storage/{{$previews[0]->img_path}}" class="img-fluid">
                        <img src="/storage/{{$previews[1]->img_path}}" class="img-top img-fluid">
                    </div>
                </div>

                <div class="card-body text-center">
                    <a href="/catalog/shoe/{{$product->shoe->id}}" class="card-title roboto-light black thumbnail-title">{{$product->shoe->name}}</a>
                    <p class="card-text roboto black thumbnail-price">{{$product->shoe->price}}</p>
                    <p class="card-text roboto black thumbnail-price">Talle: {{$product->size}}</p>
                    <div class="row d-flex justify-content-around">
                        <div class="show-color">
                            <div class="w100" style="background-color: blue"></div>
                        </div>
                    </div>
                    <a href="/shopcar/remove/{{$shopcar->id}}/{{$product->id}}" class="btn btn-link text-uppercase cero7em mt-2 red">x Quitar</a>
                </div>
            </div>
            @empty
            <h5 class="monserrat cero7em p-4 m-4">No ha escogido un producto aún.</h5>
            @endforelse
            <div class="w100 d-flex justify-content-between mt-5">
                <span class="mt-3 shop-link"><a href="/shop/myaccount" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
                <a href="/shop/shopcar/checkout" class="button-story m-0 cero7em">Proceder con la compra</a>
            </div>

        </div>
        @else
        <h5 class="monserrat cero7em p-4 m-4">No ha escogido un producto aún.</h5>
        @endif

            <h2 class="monserrat mt-5 mb-4 cero8em">¡Tu carrito está vacío!</h2>
        @endif
    </div>
</div>
@endsection