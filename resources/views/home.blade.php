@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="row">
    <div class="col-12 noPad">
        <div class="carousel slide" id="carousel" data-ride="carousel" data-interval="96000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100">
                        <video id="video" type="video/mp4" class="" src="{{asset('/img/carousel/lailaFrankIntro.mp4')}}" autoplay="autoplay" muted >Tu navegador no puede reproducir el video </video>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 carusel-img c1"></div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 carusel-img c1"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-7">
    <div class=" col-12 text-center">
        <h2 class="hastag smooth-stone">#unconventionalwomen</h2>
        <p class="monserrat mt-4 grey slogan">Creemos que las mujeres merecen tener el calzado que <br>
            desean cuando lo desean, no importa que talla sean, ni cómo lo lleven.</p>
    </div>
</div>

<!-- CATALOGO -->
<!-- CATALOGO DESKTOP -->

<div class="d-none d-md-flex row-catalog mt-7">
    <div class="catalog-img-large bk-cover" style="background-image: url({{asset('/img/catalog/sandals_desktop.png')}});">
        <a href="/catalog" class="catalog-text roboto">
            <span class="inside">sandals</span>
        </a>
    </div>
    <div class="col d-flex flex-colum catalog-colum" style=" height: 605px; flex-direction: column; justify-content: space-between;">
        <div class="catalog-img-box bk-cover" style="background-image: url({{asset('/img/catalog/stilettos_desktop.png')}});">
            <a href="/catalog" class="catalog-text roboto">
                <span class="inside">stilettos</span>
            </a>
        </div>
        <div class="catalog-img-box bk-cover" style="background-image: url({{asset('/img/catalog/flats_desktop.png')}});">
            <a href="/catalog" class="catalog-text roboto">
                <span class="inside">flats</span>
            </a>
        </div>
    </div>
</div>

<div class="d-none d-md-flex row-catalog">
    <div class="catalog-img-box-40 bk-cover" style="background-image: url({{asset('/img/catalog/tango_desktop.png')}});">
        <a href="/catalog" class="catalog-text roboto">
            <span class="inside">tango</span>
        </a>
    </div>
    <div class="catalog-img-box-55 bk-cover" style="background-image: url({{asset('/img/catalog/boots_desktop.png')}});">
        <a href="/catalog" class="catalog-text roboto">
            <span class="inside">boots</span>
        </a>
    </div>
</div>

<!-- CATALOGO MOBILE -->

<div class="row mt-7 d-md-none justify-content-center">
    <div class="col-12 mt-3 text-center">
        <a href="/catalog"><img class="img-fluid" src="{{asset('/img/catalog/sandals_mobile.png')}}" alt="sandals"></a>
    </div>
    <div class="col-12 mt-3 text-center">
        <a href="/catalog"><img class="img-fluid" src="{{asset('/img/catalog/stilettos_mobile.png')}}" alt="stilettos"></a>
    </div>
    <div class="col-12 mt-3 text-center">
        <a href="/catalog"><img class="img-fluid" src="{{asset('/img/catalog/flats_mobile.png')}}" alt="flats"></a>
    </div>
    <div class="col-12 mt-3 text-center">
        <a href="/catalog"><img class="img-fluid" src="{{asset('/img/catalog/tango_mobile.png')}}" alt="tango"></a>
    </div>
    <div class="col-12 mt-3 text-center">
        <a href="/catalog"><img class="img-fluid" src="{{asset('/img/catalog/boots_mobile.png')}}" alt="boots"></a>
    </div>
</div>
<!-- CATALOGO -->


<section class="row mt-7 history">
    <div class="col-12 col-md-6 p-0 h80 bk-cover" style="background-image: url(../img/history.png);">
    </div>
    <div class="col-12 col-md-6 mt-5 mt-md-0 h80 story-text">
        <h3 class="smooth-stone grey w100 text-center text-md-left mt-md-3">Historia</h3>
        <h2 class="monserrat-bold">Estamos motivadas<br>
            por el <span>deseo y un ideal</span>.</h2>
        <p class="monserrat grey col-12 col-md-7 noPad">Todo nuestro equipo sueña con cada mujer, compartimos ese 
            deseo de hacer accesible e inclusivo un calzado de diseño, zapatos únicos, sofisticados y de
            fabricación artesanal <br><br>
            Trabajamos para incorporar a esas mujeres que son exluídas por sus talles al
            circuito de la moda. Queremos brindar darles alternativas, que puedan elegir por
            deseo y no por descarte. Ponderar su decisición.</p>
        <a href="history" class="button-story mx-auto ml-md-0">ver historia</a>
    </div>
</section>


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
        <img src="{{asset('img/logoLK.svg')}}" style="width: 2.5em" alt="Logo Laila Frank">
        <h2 class="newsletter-title roboto-condensed grey text-center">Suscribite <br class="d-block d-md-none"> al newsletter</h2>
            <form id="newsletterForm d-flex flex-row align-bottom col-12" action="/backend/newsletter" method="post">
                @csrf
                <input name="email" type="email" class="input-line monserrat form-control m-0 cero8em py-0 noBK" style="width: 60%!important" placeholder="Ingresá tu email" required>
                <button class="button-line roboto-light camel m-0 cero8em h-100 py-0 noBK" type="submit">Ok</button>
            </form>
    </div>
</div>


@endsection