@extends('layouts.app')
@section('title', 'Feedback')
@section('content')
<div class="row">
    <div class="col-12 mt-4 text-center">
        <img src="{{asset('/img/logo_shop.png')}}" class="" alt="">
    </div>
    <h1 class="d-inline roboto-light text-uppercase mx-auto text-center mt-5 unoem">Encuenta de satisfacción</h1>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="row mt-5 mb-5 d-flex justify-content-center">
    <div class="col-9 col-md-4 noPad overflow-hidden">

        <h3 class="monserrat text-center mt-5 mb-3">¡Gracias por responder nuestra encuesta!</h3>
        <p class="monserrat unoem text-center mb-5">Te enviaremos por mail un regalo exclusivo para vos.</p>

    </div>
</div>
@endsection