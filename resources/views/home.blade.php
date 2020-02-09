@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="row">
    <div class="col-12 noPad">
        <div class="carousel slide" data-ride="carousel" interval="0">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100 carusel-img c1"></div>
                </div>
                <!-- <div class="carousel-item">
                    <div class="d-block w-100 carusel-img c2"></div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 carusel-img c3"></div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="row mt-7">
    <div class=" col-12 text-center">
        <h2 class="hastag smooth-stone">#shoesforunconventionalwomen</h2>
        <p class="monserrat mt-2 grey slogan">Creemos que las mujeres merecen tener el calzado que <br>
            desean cuando lo desean, no importa que talla sean.</p>
    </div>
</div>

<!-- CATALOGO -->
<!-- CATALOGO DESKTOP -->

<div class="d-none d-md-flex row-catalog mt-7">
    <div class="catalog-img-large bk-cover" style="background-image: url(../img/catalog/sandals_desktop.png);">
        <a href="catalog.php" class="catalog-text roboto">
            <span class="inside">sandals</span>
        </a>
    </div>
    <div class="col d-flex flex-colum catalog-colum" style=" height: 605px; flex-direction: column; justify-content: space-between;">
        <div class="catalog-img-box bk-cover" style="background-image: url(../img/catalog/stilettos_desktop.png);">
            <a href="catalog.php" class="catalog-text roboto">
                <span class="inside">stilettos</span>
            </a>
        </div>
        <div class="catalog-img-box bk-cover" style="background-image: url(../img/catalog/flats_desktop.png);">
            <a href="catalog.php" class="catalog-text roboto">
                <span class="inside">flats</span>
            </a>
        </div>
    </div>
</div>

<div class="d-none d-md-flex row-catalog">
    <div class="catalog-img-box-40 bk-cover" style="background-image: url(../img/catalog/tango_desktop.png);">
        <a href="catalog.php" class="catalog-text roboto">
            <span class="inside">tango</span>
        </a>
    </div>
    <div class="catalog-img-box-55 bk-cover" style="background-image: url(../img/catalog/boots_desktop.png);">
        <a href="catalog.php" class="catalog-text roboto">
            <span class="inside">boots</span>
        </a>
    </div>
</div>

<!-- CATALOGO MOBILE -->

<div class="row mt-7 d-md-none">
    <div class="col-12 mt-3">
        <a href="catalog.php"><img class="img-fluid" src="../img/catalog/sandals_mobile.png" alt="sandals"></a>
    </div>
    <div class="col-12 mt-3">
        <a href="catalog.php"><img class="img-fluid" src="../img/catalog/stilettos_mobile.png" alt="stilettos"></a>
    </div>
    <div class="col-12 mt-3">
        <a href="catalog.php"><img class="img-fluid" src="../img/catalog/flats_mobile.png" alt="flats"></a>
    </div>
    <div class="col-12 mt-3">
        <a href="catalog.php"><img class="img-fluid" src="../img/catalog/tango_mobile.png" alt="tango"></a>
    </div>
    <div class="col-12 mt-3">
        <a href="catalog.php"><img class="img-fluid" src="../img/catalog/boots_mobile.png" alt="boots"></a>
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
        <p class="monserrat grey">Todos los integrantes de este equipo compartimos el
            deseo de
            hacerles realidad el sueño a esas mujeres que no pueden adquirir en forma
            espontánea el calzado que desean. <br><br>
            Trabajamos para incorporar a esas mujeres a la moda, a que puedan decidir,
            darles alternativas, ponderarlas.</p>
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
        <img src="../img/logoLK.png" alt="Logo Laila Frank">
        <h2 class="newsletter-title roboto-condensed grey text-center">Suscribite <br class="d-block d-md-none"> al newsletter</h2>
        <div class="newsletter-input">
            <form id="newsletterForm" action="/backend/newsletter" method="post">
                @csrf
                <input class="input-line" name="email" type="email" class="form-control" placeholder="Ingresá tu email" aria-label="Recipient's email" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="button-line roboto-light camel"  type="submit">Ok</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection