@extends('layouts.app')
@section('Title', 'History')
@section('content')

<div class="row mb-5">
    <div class="col-12 noPad">
        <img class="w100 img-fluid" src="../img/history_page.png" alt="">
    </div>
</div>
<div class="row justify-content-center">
    <h1 id="historiaTitulo" class="col-12 col-md-8 smooth-stone grey w100 text-center my-3">
        #nuestrahistoria
    </h1>
</div>
<div class="row history mb-5 w100 d-flex justify-content-center">
    <h2 id="sloganHistoria" class="monserrat-bold text-center"><span>Amor por lo que hacemos.</span></h2>
</div>
<section class="row d-flex justify-content-center">
    <div class="col-12 col-md-10">
        <p id="history-P" class="monserrat history-fontcolor"><b class="black"> LAILA FRANK</b> nace en el año 2012, concebida como marca con sello de autor:
            Brindando calzados de diseños sofisticados conocidos como diseños de linea “Timeless”, con procedimientos de confección artesanal respetando las políticas de cuidado del medio ambiente

            Los calzados LK identifican a una mujer como un ser único y especial y pretenden ser una extensión de su femineidad. Es por eso que de cada diseño que se realiza se presenta una colección limitada, acompañando de esta forma a una mujer con personalidad que valora que el diseño la acompañe en su vestir diario <br><br>

            LK en el año 2015 obtuvo el emblema de <b class="black"> “Marca País” </b>, brindado por el Ministerio de Turismo como representante de Calzado de diseño frente al mundo

            En el año 2016 Obtuvo el <b class="black">Sello del Buen diseño</b> que le otorgo el Ministerio de Industria

            En el año 2017 fue seleccionada por <b>“Fashion United”</b> como una de las diez marcas de calzado Argentino seleccionadas por el público internacional por su originalidad en el diseño, su trabajo artesanal y la calidad de sus materiales <br><br>

            En el transcurso de estos años LK trabajo dentro de la curva tradicional de calzado y a partir del año 2019 se volcó a la fabricación de calzados en la curva que abarca calzados desde el talle 31 a 35 y 41 a 45 manteniendo su estilo de diseño y confección que hasta el momento la represento <br>
        </p>
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
            <input type="text" class="input-line monserrat form-control" placeholder="Ingresá tu email" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="button-line roboto-light camel" type="button">Ok</button>
            </div>
        </div>
    </div>
</div>


@endsection