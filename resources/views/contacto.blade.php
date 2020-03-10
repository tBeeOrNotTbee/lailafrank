@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
<div class="row">
    <div class="col-12 mt-3">
        <h1 id="contacto-titulo" class="hastag smooth-stone text-center">Contactanos</h2>
    </div>
</div>

<div class="row px-md-3">

    <div class="col-12 col-md-4 text-center mt-3 d-flex flex-row align-items-center">
        <i class="fas fa-map-marker-alt contacto-color p-5 p-md-5 contacto-ico"></i>
        <div class="text-left pl-5">
            <h2 class="contacto-subtitulo unoem text-bold font-weight-bold ml-2">DOMICILIO</h2>
            <p class="grey cero8em p-0 m-0 ml-2">3 de Febrero 1930<br>Planta baja E</p>
        </div>
    </div>

    <div class="col-12 col-md-4 text-center mt-3 d-flex flex-row align-items-center">
        <i class="fas fa-phone-alt contacto-color p-5 p-md-5 contacto-ico"></i>
        <div class="text-left pl-5">
            <h2 class="contacto-subtitulo unoem text-bold font-weight-bold">TELÉFONO</h2>
            <p class="grey cero8em p-0 m-0">+5411 - 4788 2483</p>
        </div>
    </div>

    <div class="col-12 col-md-4 text-center mt-3 d-flex flex-row align-items-center">
        <i class="far fa-envelope contacto-color p-5 p-md-5 contacto-ico"></i>
        <div class="text-left pl-5">
            <h2 class="contacto-subtitulo unoem text-bold font-weight-bold">MAIL</h2>
            <p class="grey cero8em p-0 m-0">shoes@lailafrank.com</p>
        </div>
    </div>

</div>

<div class="row mx-auto mb-4 p-3">

    @isset($_GET['mail'])
    <div class="alert alert-success noBk rounded-0 mx-auto text-center" role="alert">
        <h4 class="alert-heading">Mensaje enviado!</h4>
        <hr>
        <p>Gracias por ponerte en contacto.</p>
    </div>
    @endisset

    <form class="form-row mx-auto col-lg-10" action="" method="post">
        @csrf
        <div class="form-row col-lg-12">
            <div class="form-group col-12 col-md-6">
                <input required type="text" class="form-control" name="name" id="inputNombre" placeholder="NOMBRE">
            </div>
            <div class="form-group col-12 col-md-6">
                <input required type="text" class="form-control" name="surname" id="inputSurname" placeholder="APELLIDO">
            </div>
        </div>
        <div class="form-row col-lg-12">
            <div class="form-group col-12 col-md-6">
                <input required type="email" class="form-control" name="email" id="inputEmail" placeholder="EMAIL">
            </div>
            <div class="form-group col-12 col-md-6">
                <input required type="tel" class="form-control" name="phone" id="inputTelefono" placeholder="TELEFONO">
            </div>
        </div>

        <div class="form-row col-md-12">
            <div class="form-group col-12 col-md-6">
                <label for="tema">Asunto</label>
                <input required name="about" class="form-control" type="text">
            </div>
            
        </div>

        <div class="form-row col-lg-12 p-2">
            <label for="exampleFormControlTextarea1">Mensaje</label>
            <textarea required name="description" class="form-control" id="areaMensaje" rows="10"></textarea>
        </div>
        <div class="form-row col-3 mx-auto mt-5">
            <button type="submit" class="button-story w100">ENVIAR</button>
        </div>
    </form>

</div>

<section class="row mt-7 insta-title d-flex align-items-center">
    <div class="d-none d-md-block col-md-4"><span class="roboto camel">@lailafrankshoes</span></div>
    <div class="col-12 col-md-4 d-flex justify-content-center">
        <h3 class="follow-us playfair-black-italic camel"><i class="fab fa-instagram insta-ico"></i>
            follow us!</h3>
    </div>
    <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-end">
        <span class="roboto camel">#ShoesForUnconventionalWomen</span>
    </div>
</section>
<div class="row">
    <div class="d-none d-md-block insta-feed"></div>
    <div class="d-block d-md-none insta-feed2"></div>
</div>

<div class="row justify-content-center" style="clear:both">
    <div class="col-12 newsletter">
        <img src="../img/logoLK.png" alt="Logo Laila Frank">
        <h2 class="newsletter-title roboto-condensed grey text-center">Suscribite <br class="d-block d-md-none"> al newsletter</h2>
        <div class="newsletter-input">
            <input type="text" class="input-line monserrat form-control" placeholder="Ingresá tu email" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="button-line roboto-light camel" type="button">Ok</button>
            </div>
        </div>
    </div>
</div>
@endsection