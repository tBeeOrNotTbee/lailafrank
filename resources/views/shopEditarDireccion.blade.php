@extends('layouts.shopLayout')
@section('title', 'Editar Dirección')
@section('contentShop')
<div class="col-12 col-md-7">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 mb-4 h50 d-flex flex-column justify-content-between">
                <h2 class="monserrat grey2 text-uppercase font-weight-bolder cero8em">Datos de contacto</h2>
                <form method="post" action="" class="w50">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Florencia" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Bonavera" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="DNI 25024532" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="TELEFONO" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </form>

                <h2 class="monserrat grey2 text-uppercase font-weight-bolder cero8em mt-5">Direccion</h2>

                <form method="post" action="" class="w50">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Florencia" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Bonavera" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="DNI 25024532" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="TELEFONO" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </form>


                <div class="w50 d-flex justify-content-between mt-5">
                    <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
                    <a href="#" class="button-story m-0">Guardar</a>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection