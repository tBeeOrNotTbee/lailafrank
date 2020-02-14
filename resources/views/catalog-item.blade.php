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

                <h3 id="modelo" class="col text-nowrap monserrat-bold grey2 catalog-item-title">{{$shoe->name}}</h3>
                <h3 id="precio" class="col monserrat grey2 my-3 catalog-item-title">${{$shoe->price}}</h3>
                <p class="grey monserrat ml-3 text-center text-md-left"><span class="black"> Capellada:</span>
                {{$shoe->chapped}}. <span class="black">Forro:</span> {{$shoe->cover}}
                <span class="black">Altura de taco:</span> {{$shoe->height_heels}}cm
                Cómoda plantilla de armado
                <span class="black">Suela:</span> {{$shoe->sole}}</p>

            </div>

        </div>
        <div class="row mt-3">

            <div class="col-12">
                <h5 class="monserrat grey2 my-3 catalog-item-title2 text-center text-md-left">COLORES DISPONIBLES</h5>
                <div class="row d-flex justify-content-center justify-content-md-start">
                    @forelse ($shoe->color as $color)
                    <div class="show-color ml-3">
                        <div class="w100" style="background:{{$color->color}}"></div>
                    </div>
                    @empty
                        
                    @endforelse
                </div>

            </div>
        </div>

        <!-- Grilla de talles -->
        <div class="row my-4">

            <form id="sizeform" class="col-12 pr-3 px-3 text-center" enctype="multipart/form-data">
                <h2 class="my-2 monserrat grey2 catalog-item-title2 text-center text-md-left">SELECCIONA TALLE</h2>
                @csrf
                <input type="hidden" name="shoeId" value="{{$shoe->id}}">

                <select name="size" id="size" class="cero8em input-line2 monserrat custom-select w-50" required>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>

                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>

                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                </select>

                    <p id="nostock" class="d-none">Disculpe las molestias. En este momento no disponemos de stock en ese talle.
                        Comuníquese con nosotros para conocer opciones de pedidos especiales
                    </p>

                    <div class="d-none" id="added" role="alert">
                        Agregado al carrito! <br>
                        Click <a href="/shop/shopcar">aquí</a> para continuar el proceso de compra.
                    </div>

                <div class="d-none row my-4 d-md-flex flex-column flex-md-row justify-content-center justify-content-md-between px-3">
                    <a id="botonTalles" class="monserrat grey2 cero7em" data-toggle="modal"
                        data-target="#tallesModal">GUÍA DE TALLES</a>
                    <a onclick="addToCar()" class="button-story cero7em" href="#">AGREGAR AL CARRITO <i class="fas fa-shopping-bag"></i> 
                        <div class="d-none" id="spinner" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </a>
                </div>
                <div class="d-md-none row my-4 mx-auto mt-5 w-75 d-flex flex-column justify-content-center">
                    <a id="botonTalles" class="monserrat grey2 cero7em text-center" data-toggle="modal"
                        data-target="#tallesModal">GUÍA DE TALLES</a>
                    <a onclick="addToCar()" class="button-story text-center cero7em mt-3" href="#">AGREGAR AL CARRITO <i class="fas fa-shopping-bag"></i></a>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-12 my-4 ">
                <p class="monserrat grey2 cero8em text-center text-md-left"> Envíos y devoluciones <b>SIN CARGO</b> </p>
            </div>
        </div>

    </div>

</div>

@endsection