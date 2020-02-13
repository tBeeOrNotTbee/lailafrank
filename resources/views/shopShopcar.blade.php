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
                    <div class="row d-flex justify-content-center">
                        @forelse ($product->shoe->color as $color)
                        <div class="show-color ml-3">
                            <div class="w100" style="background:{{$color->color}}"></div>
                        </div>
                        @empty  
                        @endforelse
                    </div>
                    <a href="/shopcar/remove/{{$shopcar->id}}/{{$product->id}}" class="btn btn-link text-uppercase cero7em mt-2 red" onclick="return confirm('Desea remover el producto?')">x Quitar</a>
                </div>
            </div>
            @empty
            @endforelse

        </div>
        
        <form method="post" class="monserrat cero8em mb-3" id="discountForm">
            @csrf
            <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em w-25" placeholder="Cupón de descuento" name="discount" value="{{old('discount') ? old('discount') : ""}}" >
               {{--  {!!$errors->first('discount', '<div class="alert alert-danger">:message</div>')!!} --}}
            <button onclick="checkDiscount()" class="noBk border rounded-0 shop-card-text monserrat text-uppercase grey2 cero7em p-3 mx-2">> Comprobar</button>
        </form>
        <p id="dValid" class="d-none"> Descuento habilitado! </p>
        <p id="dInvalid" class="d-none"> Código incorrecto o cupón no válido </p>
        
        <form id="shopcarForm" action="/shop/shopcar/checkout/" method="post" class="monserrat mt-5 cero8em">
            @csrf
                        
            <h3 class="monserrat unoem">Dirección de envio</h3>
            
            <a href="/shop/myaccount/addresses/new" class="btn unoem btn-link">Nueva dirección</a>
        
            <div class="form-check monserrat unoem">
            <input class="form-check-input" type="radio" name="address_id" id="exampleRadios2" value="showroom">
                <label class="form-check-label" for="exampleRadios2">
                    Retiro en sucursal (Sin costo)
                </label>
            </div>

            @foreach ($addresses as $address)
            <div class="form-check monserrat unoem">
                <input class="form-check-input" type="radio" name="address_id" id="exampleRadios1" value="{{$address->id}}">
                <label class="form-check-label" for="exampleRadios1">
                <p>{{$address->country}} - {{$address->state}} - {{$address->city}} - {{$address->street}} - {{$address->number}}</p>
                </label>
            </div>
            @endforeach
            <div class="w100 d-flex justify-content-between mt-5">
                <span class="mt-3 shop-link"><a href="/shop/myaccount" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
                <button type="submit" class="button-story m-0 cero7em">Proceder con la compra</button>
            </div>
            <input type="hidden" name="discount_type" value="$">
            <input type="hidden" name="discount_quantity" value="0">
        </form>

        
        @else
        <h2 class="monserrat mt-5 mb-4 cero8em">¡Tu carrito está vacío!</h2>
        @endif
    </div>
</div>
@endsection