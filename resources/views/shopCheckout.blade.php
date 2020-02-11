@extends('layouts.shopLayout')
@section('title', 'Checkout')
@section('contentShop')
<form action="/shop/confirm" class="col-12 col-md-7 py-4">
    <h2 class="monserrat-bold shop-title cero8em text-center text-md-left">Mis compras</h2>
    <p class="monserrat grey2 cero8em text-center text-md-left">Datos de la compra/ Nro. 5800284197</p>

    <div class="shop-bk px-3 py-1">
        <table class="table greyBk cero7em shop-bk moserrat">
            <thead>
                <tr>
                    <th scope="col" class="border-0"></th>
                    <th scope="col" class="border-0">Producto</th>
                    <th scope="col" class="border-0">Talle</th>
                    <th scope="col" class="border-0">Precio</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($stocks as $product)
                    
                
                <tr>
                    <td scope="row" class="p-0 shop-shoe-img"><img src="/storage/{{$product->shoe->previewA()->img_path}}" class="col-12 img-fluid p-0 w100" alt=""></td>
                    <td class="align-middle">Zapato {{$product->shoe->name}}</td>
                    <td class="align-middle">{{$product->size}}</td>
                    <td class="align-middle">${{$product->shoe->price}}</td>
                </tr>

                @empty
                    
                @endforelse
                <tr>
                    <td colspan="2"></td>
                    <th class="py-1">Subtotal</th>
                    <td class="py-1">$2680.00</td>
                </tr>
                <tr class="mt-0 border-bottom mb-2">
                    <td class="border-0" colspan="2"></td>
                    <th class="border-0 py-1">Costo de envío</th>
                    <td class="border-0 py-1">$00</td>
                </tr>
                <tr>
                    <td class="border-0" colspan="2">&nbsp;</td>
                    <th colspan="2" class="shop-bk2 border-0 shop-border pr-0 mr-0 w100 d-flex justify-content-between">
                        <span>TOTAL</span>
                        <span>${{$total}}</span>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-md-between">

            
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
    </div>
    <button class="" type="submit">Confirmar</button>
</form>
@endsection