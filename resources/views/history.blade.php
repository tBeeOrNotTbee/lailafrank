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
        <p id="history-P" class="monserrat history-fontcolor">LK nace en el año 2012 y se diferencia en el mercado por ser una marca con
            sello de autor. Esto quiere decir que trabajamos en cada diseño como piezas
            únicas, la confección es artesanal y con profundo respeto y cuidado del medio
            ambiente. Creamos calzados de diseños sofisticados conocidos como diseños de
            linea “Timeless”. <br> <br>
            LK reconoce a cada mujer como un ser único y especial y entiende que el
            calzado puede aportar personalidad y fuerza a su femineidad. Cada diseño forma
            parte de una colección limitada de producción única, ideal para las mujeres que
            valoran el estilo y el diseño como un arte incluso en su vestir diario.<br> <br>
            Durante nuestro recorrido, LK fue reconocida por el emblema <b class="black"> “Marca País” </b>
            (2015) brindado por el Ministerio de Turismo como representante de Calzado de
            Diseño frente al mundo; por el sello <b class="black">Buen Diseño</b> (2016) que le otorgó el
            Ministerio de Industria; y en 2017 la marca fue seleccionada por Fashion United
            como una de las diez marcas de calzado argentino seleccionadas por el público
            internacional por su originalidad en el diseño, su trabajo artesanal y la calidad de
            sus materiales.<br> <br>
            Comenzamos trabajando en la curva tradicional de calzado y desde el año 2019
            nos volcamos a las franjas del talle 31 a 35 y 41 a 45, con el objetivo de lograr
            que un calzado único, de diseño y confección artesanal sea inclusivo.<br> </p>
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