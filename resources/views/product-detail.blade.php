@extends('layouts.app')
@section('title', 'Product Detail')
@section('content')
<!-- NAVBAR FULLSCREEN -->
<!-- <div id="nav" class="container-fluid noPad contenedorAside h-100">
            <div class="row">
                <div class="col-xs-10 col-md-8 alto fondoCrema">
                    <div class="container">
                        <div class="row d-flex justify-content-end">
                            <div class="col-2 p-3 d-flex justify-content-end">
                                <div class="wrapper">
                                    <a class="close-button" onclick="closeNav()">
                                        <div class="in">
                                            <div class="close-button-block"></div>
                                            <div class="close-button-block"></div>
                                        </div>
                                        <div class="out">
                                            <div class="close-button-block"></div>
                                            <div class="close-button-block"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="backnav" class="col-sx-2 col-md-4 h100 noPad" href="javascript:void(0)" onclick="closeNav()"></div>
            </div>
        </div> -->


<div class="row">

    <div class="offset-1 col-11 main-content noPad">
        <div class="container-fluid">
            <!-- Contenido Principal -->
            <!-- ACÁ IBA UN ADVERT -->

            <div class="row">
                <div class="col-7">
                    <div class="sp-loading">
                        <div class="spinner-border text-secondary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div class="sp-wrap gallery">
                        <a href="../img/shoe_1.jpg"><img src="../img/shoe_1.jpg" alt=""></a>
                        <a href="../img/shoe_2.jpg"><img src="../img/shoe_2.jpg" alt=""></a>
                    </div>
                </div>


                <div class="col-5">

                </div>
            </div>


            <?php require_once('../partials/footer.php'); ?>
        </div>
    </div>
</div>
@endsection