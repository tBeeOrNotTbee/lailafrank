@extends('layouts.shopLayout')
@section('title', 'Detalle de Compra')
@section('contentShop')
<div class="col-12 col-md-7 py-4">
    <h2 class="monserrat-bold shop-title cero8em text-center text-md-left">Mis compras</h2>
    <p class="monserrat grey2 cero8em text-center text-md-left">Datos de la compra/ Nro. 5800284197</p>

    <div class="shop-bk px-3 py-1">
        <table class="table greyBk cero7em shop-bk moserrat">
            <thead>
                <tr>
                    <th scope="col" class="border-0"></th>
                    <th scope="col" class="border-0">Producto</th>
                    <th scope="col" class="border-0">Cant</th>
                    <th scope="col" class="border-0">Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" class="p-0 shop-shoe-img"><img src="../img/shoe_1.jpg" class="col-12 img-fluid p-0 w100" alt=""></td>
                    <td class="align-middle">Zapato TANGO</td>
                    <td class="align-middle">1</td>
                    <td class="align-middle">$2680.00</td>
                </tr>
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
                        <span>$2680.00</span>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-md-between">

            <div class="col-10 col-md-6 mb-4 mx-auto p-md-0">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de facturación</h5>
                        <p class="card-text monserrat shop-card-text grey2 cero7em my-0">ARCHIRA 4896, PISO 1, OF 5.</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0 mb-3">Ciudad Autónoma Buenos Aires, 1431</p>
                    </div>
                </div>
            </div>


            <div class="col-10 col-md-6 mb-4 mx-auto">
                <div class="card shop-bk border-0 h100x">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de envío predeterminada</h5>
                        <p class="card-text monserrat shop-card-text grey2 cero7em my-0">ARCHIRA 4896, PISO 1, OF 5.</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0 mb-3">Ciudad Autónoma Buenos Aires, 1431</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection