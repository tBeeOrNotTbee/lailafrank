@extends('layouts.app')
@section('title', 'Policy')
@section('content')
<div class="row mb-5">
    <div class="col-12 text-center roboto-condensed grey newsletter-title py-3 my-3 justify-content-center">
        <h1>POLÍTICA DE GARANTÍA</h1>
    </div>
    <?php require_once('../partials/navfooter.php'); ?>
    <div class="col-12 col-md-7 py-4 cero7em">
        <p class="grey monserrat p-2">
            <b class="black">Los productos adquiridos en la página web cuentan con 7 días de garantía. </b> <br><br>
            La garantía será resuelta dentro de los 15 días hábiles siguientes a la recepción del producto en la dirección indicada al cliente. <br>
            El producto debe ser entregado en perfectas condiciones de limpieza. <br>
            Los gastos generados por envío y manejo del producto serán asumidos por Laila Frank. <br>
            Los productos recibidos por garantía serán reparados. Únicamente en los casos en que el defecto que presente el producto no pueda ser corregido, se procederá a realizar la respectiva reposición. <br><br>
            <b class="black">No se considera como garantía:</b> <br><br>

            <p class="grey monserrat ml-5 ">El Desgaste o ruptura de materiales ocasionado por el uso inadecuado del producto como tropiezos, rasgones, quemaduras, roces o fricción del producto contra superficies duras y similares. <br><br>
                El desgaste normal de las suelas y la decoloración normal debido al lavado.<br>
                Las variaciones de tono, textura y vetas que son características normales del proceso de producción y acabados del producto.<br><br>
                Arrugas y quiebres ocasionados por flexión del empeine.<br>
                Manchas y decoloración causadas por procedimientos de limpieza inadecuados o producidos por el uso de líquidos corrosivos y/o productos de limpieza diferentes a los sugeridos.<br><br>
                Productos que hayan sido manipulados por terceros.<br>
            </p>
        </p>
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