@extends('layouts.app')
@section('title', 'Mail')
@section('content')
<div class="row mb-md-5 justify-content-center justify-content-md-start">
    <div class="col-12 text-center roboto-condensed grey newsletter-title py-3 my-3 justify-content-center">
        <h1>TIEMPOS Y COSTOS DE ENVÍO</h1>
    </div>
    @include('layouts.partials.navfooter')
    <div class="col-10 col-md-7 py-4">
        <p class="monserrat grey cero7em"><b class="black">Todas las opciones de envío dentro de Argentina son sin cargo. </b> <br><br>
            Los envíos al exterior superiores a IMPORTE PRETENDIDO U$D (dólares estadounidenses) son sin cargo.
            En caso de haber solicitado un pedido por una compra inferior a ese importe, deberás comunicarte al ….TEL O escribirnos al …..MAIL de lunes a viernes de HORARIO DE ATENCION para que se te cotice el envío y los cargos aduaneros</p> <br><br>
        <p class="monserrat grey cero7em"> <b class="black">Detallamos debajo, opciones de envío:</b> </p>
        <div class="col-12 table-responsive cero7em">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ENVIOS NACIONALES</th>
                        <th scope="col">TIEMPOS DE ENTREGA</th>
                        <th scope="col">COSTOS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Envío simple a domicilio en Capital Federal</th>
                        <td>5 a 7 días hábiles</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <th scope="row">Envío simple a domicilio en Prov. de Bs. As.</th>
                        <td>5 a 7 días hábiles</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <th scope="row">Envío simple a domicilio interior del país</th>
                        <td>5 a 7 días hábiles</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <th scope="row">Envío Express a CABA</th>
                        <td>...</td>
                        <td>A confirmar</td>
                    </tr>
                    <tr>
                        <th scope="row">Retiro en Tienda en CABA*</th>
                        <td></td>
                        <td>$ 0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 cero7em table-responsive">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ENVIOS INTERNACIONALES</th>
                        <th scope="col">TIEMPOS DE ENTREGA</th>
                        <th scope="col">COSTOS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="monserrat" scope="row">Países limítrofes</th>
                        <td class="monserrat">24 a 48 hs</td>
                        <td class="monserrat">$ 0</td>
                    </tr>
                    <tr>
                        <th scope="row">EEUU y Canadá</th>
                        <td>24 a 48 hs</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <th scope="row">Resto de América</th>
                        <td>48 a 72 hs</td>
                        <td>$ 0 </td>
                    </tr>
                    <tr>
                        <th scope="row">Europa</th>
                        <td>72 a 96 hs</td>
                        <td>$ 0 </td>
                    </tr>
                    <tr>
                        <th scope="row">Asia y Resto del mundo</th>
                        <td>96 a 120 hs</td>
                        <td>$ 0 </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection