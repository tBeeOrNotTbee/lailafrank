@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
<div class="row mb-md-5">
    <div class="col-12 text-center roboto-condensed grey newsletter-title py-3 my-3 justify-content-center">
        <h1>Preguntas frecuentes</h1>
    </div>
    <?php require_once('../partials/navfooter.php'); ?>
    <div class="col-12 col-md-7 py-4">
        <div class="accordion" id="accordionExample">
            <div class="card cero7em border-0">
                <div class="card-header p-0 noBk rounded-0 border-0" id="headingOne">
                    <h2 class="mb-1">
                        <button class="shop-menu-btn collapsed w100 monserrat d-flex justify-content-between py-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <span class="text-left">¿Cómo me registro?</span> <i class="fas fa-sort-down col-4 d-flex justify-content-end"></i>
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body pl-5 ">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>

            <div class="card cero7em border-0">
                <div class="card-header p-0 noBk rounded-0 border-0" id="headingTwo">
                    <h2 class="mb-1">
                        <button class="shop-menu-btn collapsed w100 monserrat d-flex justify-content-between py-3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="text-left">¿Qué es un código promocional?</span> <i class="fas fa-sort-down col-4 d-flex justify-content-end"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body pl-5 ">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>

            <div class="card cero7em border-0">
                <div class="card-header p-0 noBk rounded-0 border-0" id="headingThree">
                    <h2 class="mb-1">
                        <button class="shop-menu-btn collapsed w100 monserrat d-flex justify-content-between py-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span class="text-left">Consultas generales</span> <i class="fas fa-sort-down col-4 d-flex justify-content-end"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body pl-5 ">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>

            <div class="card cero7em border-0">
                <div class="card-header p-0 noBk rounded-0 border-0" id="headingFour">
                    <h2 class="mb-1">
                        <button class="shop-menu-btn collapsed w100 monserrat d-flex justify-content-between py-3" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <span class="text-left">Talles de los productos</span> <i class="fas fa-sort-down col-4 d-flex justify-content-end"></i>
                        </button>
                    </h2>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body pl-5 ">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
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