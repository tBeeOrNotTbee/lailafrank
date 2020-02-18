@extends("layouts.backendLayout")

@section("titulo")
    Pedidos - {{$payment->id}}
@endsection

@section("mainBackend")
<div class="col-12 col-md-7 py-4">
    <h2 class="monserrat-bold shop-title cero8em text-center text-md-left">Mis compras</h2>
    <p class="monserrat grey2 cero8em text-center text-md-left">Datos de la compra/ Nro. {{$payment->id}}</p>

    <div class="shop-bk px-3 py-1">
        <table class="table greyBk cero7em shop-bk moserrat">
            <thead>
                <tr>
                    <th scope="col" class="border-0"></th>
                    <th scope="col" class="border-0">Producto</th>
                    <th scope="col" class="border-0">Precio</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($payment->shopcar->shoe as $shoe)
                <tr>
                    <td scope="row" class="p-0 shop-shoe-img"><img
                        src="/storage/{{$shoe->previewA()->img_path}}" class="col-12 img-fluid p-0 w100"></td>
                    <td class="align-middle">{{$shoe->name}}</td>
                    <td class="align-middle">${{$shoe->price}}</td>
                </tr>
                @empty
                    <p>Pedido sin productos</p>
                @endforelse
                
                <tr>
                    <td class="border-0" colspan="2">&nbsp;</td>
                    <th colspan="2" class="shop-bk2 border-0 shop-border pr-0 mr-0 w100 d-flex justify-content-between">
                        <span>TOTAL</span>
                        <span>${{$payment->total_amount}}</span>
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
                        <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de Envío</h5>
                        <p class="card-text monserrat shop-card-text grey2 cero7em my-0">{{$payment->address->cardLineOne()}}</p>
                        <p class="card-text monserrat shop-card-text grey2 cero7em mt-0 mb-3">{{$payment->address->cardLineTwo()}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>