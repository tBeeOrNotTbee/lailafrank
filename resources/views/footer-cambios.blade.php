@extends('layouts.app')
@section('title', 'Cambios y devoluciones')
@section('content')
<div class="row mb-md-5 justify-content-center justify-content-md-start">
    <div class="col-12 text-center roboto-condensed grey newsletter-title py-3 my-3 justify-content-center">
        <h1>CAMBIOS Y DEVOLUCIONES</h1>
    </div>

    @include('layouts.partials.navfooter')

    <div class="col-10 col-md-7 py-5">
        <p class="grey monserrat cero7em">
            El cambio de un producto adquirido a través de la página web debe gestionarse dentro de los <b> 15 días calendario siguiente a la fecha de la compra.</b> Los gastos de envío y manejo del producto serán asumidos por <b>Laila Frank</b> <br> <br>
            Para efectuar el cambio es indispensable que el producto se encuentre en perfecto estado y no presentar indicios de uso, deberá entregarse con sus respectivas etiquetas y empaques. <br> <br>
            Dicho producto se puede cambiar por talle o por otro producto o podrá quedar el dinero asignado a favor en su cuenta. En el caso en el que ninguno de nuestros calzados llegara a satisfacer sus necesidades, se podrá optar por el reintegro del dinero. <br><br>
            <b>Los productos en oferta, rebaja o saldo no tienen cambio. </b>
        </p>
    </div>

</div>
@endsection