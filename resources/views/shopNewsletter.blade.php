@extends('layouts.shopLayout')
@section('title', 'Newsletter')
@section('contentShop')
<div class="col-12 col-md-7 py-md-5">
    <div class="container-fluid">

        <?php /* dd($email_list) */ ?>
        @if (in_array(Auth::user()->email, $email_list))
        <div class="row">
            <div class="col-6">
                <h2 class="text-center monserrat-bold shop-title cero8em">Ya estás en nuestro Newsletter!</h2>
            </div>
        </div>

        @else
        <h2 class="text-center monserrat-bold shop-title cero8em">Opciones de suscripción</h2> <br>
        <h2 class="monserrat-bold shop-title cero8em">No tenés suscripción a nuestro Newsletter</h2>

        <div class="row">
            <div class="col-12">
                <div class="w-100 d-flex flex-column shop-links">
                    <span class="mt-3"><i class="far fa-square"></i> <a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">SUSCRIPCION GENERAL</a></span>
                </div>
            </div>

            <div class="w50 d-flex justify-content-between mt-7">
                <div class="col-12 newsletter">
                    <h2 class="newsletter-title roboto-condensed grey text-center">Suscribite <br class="d-block d-md-none"> al newsletter</h2>
                    <div class="newsletter-input">
                        <form id="newsletterForm" action="/backend/newsletter" method="post">
                            @csrf
                            <input class="input-line" name="email" type="email" class="form-control" value="{{ Auth::user()->email }}">
                            <div class="input-group-append">
                                <button class="button-story m-3" type="submit">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <a href="#" class="button-story m-0">Guardar</a> -->
                <div class="d-block col-12 mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></div>
            </div>
        </div>
        <!-- <div class="row justify-content-center" style="clear:both">
            <div class="col-12 newsletter">

                <h2 class="newsletter-title roboto-condensed grey text-center">Suscribite <br class="d-block d-md-none"> al newsletter</h2>
                <div class="newsletter-input">
                    <form id="newsletterForm" action="/backend/newsletter" method="post">
                        @csrf
                        <input class="input-line" name="email" type="email" class="form-control" placeholder="Ingresá tu email" aria-label="Recipient's email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="button-line roboto-light camel" type="submit">Ok</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
        @endif



    </div>
</div>
@endsection