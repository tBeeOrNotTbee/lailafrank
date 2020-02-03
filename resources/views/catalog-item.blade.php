@extends('layouts.app')
@section('title', 'Catalog Item')
@section('content')

<div class="row mt-7 pb-3 mb-3">

    <div class="col-10 col-md-7 mx-auto mx-md-0 mb-5 d-none d-md-flex">
        <div class="sp-loading">
            <div class="spinner-border text-secondary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="sp-wrap gallery m-0">
            <a href="../img/shoe_1.jpg"><img class="w100" src="../img/shoe_1.jpg" alt=""></a>
            <a href="../img/shoe_2.jpg"><img class="w100" src="../img/shoe_2.jpg" alt=""></a>
        </div>
    </div>

    <div class="d-md-none col-10 col-md-7 mx-auto mx-md-0 mb-5 d-flex">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../img/shoe_1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/shoe_2.jpg" alt="Second slide">
                </div>
            </div>
        </div>
    </div>

    <br class="d-md-none">

    <div class="col-10 col-md-4 mx-auto mx-md-0">
        <div class="row">
            <div class="col-12 ml-0 mt-4 mt-md-0 pl-0 pr-3 cero7em">

                <h3 id="modelo" class="col text-nowrap monserrat-bold grey2 catalog-item-title">MODELO FELICIANA</h2>
                    <h3 id="precio" class="col monserrat grey2 my-3 catalog-item-title">$8000</h3>
                    <p class="grey monserrat ml-3 text-center text-md-left"><span class="black"> Capellada:</span> Cabretilla color nude con detalles en cobre rosado con agarre de cordón al tono.
                        <span class="black">Forro:</span> De piel muy suave color rosado
                        <span class="black">Altura de taco:</span> 4.5cm
                        Cómoda plantilla de armado
                        <span class="black">Suela:</span> En cuero pintada al tono</p>

            </div>

        </div>
        <!-- Grilla de talles -->
        <div class="row">

            <div id="grilla" class="col-12 pr-3 px-3">
                <h2 class="my-2 monserrat grey2 catalog-item-title2 text-center text-md-left">SELECCIONA TALLE</h2>
                <div class=" row mt-3 justify-content-around px-3">
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">31</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">32</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">33</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">34</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">35</h5>
                </div>
                <div class="row justify-content-around px-3">
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">36</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">37</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">38</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">39</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">40</h5>

                </div>
                <div class="row justify-content-around px-3">
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">41</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">42</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">43</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">44</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">45</h5>

                </div>

            </div>

        </div>
        <div class="row mt-3">

            <div class="col-12">
                <h5 class="monserrat grey2 my-3 catalog-item-title2 text-center text-md-left">COLORES DISPONIBLES</h5>
                <div class="row d-flex justify-content-center justify-content-md-start">
                    <div class="show-color ml-3">
                        <div class="w100" style="background-color: grey"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-none row my-3 d-md-flex flex-column flex-md-row justify-content-center justify-content-md-between px-3">
            <!-- AGREGAR ICONOS todo-->
            <a id="botonTalles" class="monserrat grey2 cero7em" data-toggle="modal" data-target="#tallesModal">GUÍA DE TALLES</a>
            <a class="button-story" href="#">COMPRAR <i class="fas fa-shopping-bag"></i></a>
        </div>
        <div class="d-md-none row my-3 mx-auto mt-5 w-75 d-flex flex-column justify-content-center">
            <!-- AGREGAR ICONOS todo-->
            <a id="botonTalles" class="monserrat grey2 cero7em text-center" data-toggle="modal" data-target="#tallesModal">GUÍA DE TALLES</a>
            <a class="button-story mt-3 text-center" href="#">COMPRAR <i class="fas fa-shopping-bag"></i></a>
        </div>
        <div class="row">
            <div class="col-12 my-4 ">
                <p class="monserrat grey2 cero8em text-center text-md-left"> Envíos y devoluciones <b>SIN CARGO</b> </p>
            </div>
        </div>

    </div>

</div>

@endsection