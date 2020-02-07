@extends('layouts.app')
@section('title', 'Payments')
@section('content')
<div class="row mb-md-5">
    <div class="col-12 text-center roboto-condensed grey newsletter-title py-3 my-3 justify-content-center">
        <h1>OPCIONES DE PAGO</h1>
    </div>
    @include('layouts.partials.navfooter')
    <div class="col-12 col-md-7 py-4 cero7em">
        <p class="monserrat grey"> <b class="black">Tarjetas de crédito:</b> <br><br>

            Visa: 1 cuota sin interés <br>
            MasterCard: 1 cuota sin interés <br>
            Otras: 1 cuota sin interés <br><br>

            <i>Las cuotas ofrecidas aplican solo a las compras realizadas en Argentina </i> <br><br>

            <b class="black">Lunes a Domingos:</b><br>
            Visa: 1, 3, 6 y 12 cuotas sin interés *<br>
            MasterCard: 1, 3, 6 y 12 cuotas sin interés *<br>
            American Express: 1, 3, 6 y 12 cuotas sin interés *<br><br>

            *En el marco de los planes Ahora 3, Ahora 6 y Ahora 12 <br><br>

            <b class="black">Transferencias bancarias: </b><br>
            Si efectúa un pago mediante una transferencia bancaria, deberé enviar el comprobante a: pagos@lailafrank.com <br><br>

            <b class="black">Clientes del exterior de Argentina: </b><br>
            Tarjetas de crédito que no estén emitidas en la República Argentina solo podrán realizar el pago en 1 cuota sin interés <br>
            PayPal <br>
        </p>
    </div>
    <div class="col-12 d-md-none">
        <div class="row justify-content-center" style="clear:both">
            <div class="col-12 newsletter">
                <img src="../img/logoLK.png" alt="Logo Laila Frank">
                <h2 class="newsletter-title roboto-condensed grey text-center">Suscribite <br class="d-block d-md-none"> al newsletter</h2>
                <div class="newsletter-input">
                    <input class="input-line" type="text" class="form-control" placeholder="Ingresá tu email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="button-line roboto-light camel" type="button">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection