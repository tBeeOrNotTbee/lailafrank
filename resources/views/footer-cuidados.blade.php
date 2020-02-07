@extends('layouts.app')
@section('title', 'Tips')
@section('content')
<div class="row mb-md-5">
    <div class="col-12 text-center roboto-condensed grey newsletter-title py-3 my-3 justify-content-center">
        <h1>CUIDADO DEL CALZADO</h1>
    </div>
    @include('layouts.partials.navfooter')
    <div class="col-12 col-md-7 py-4 cero7em">
        <h4 class="monserrat black ">TIP 1</h4>
        <p class="monserrat grey mb-4">Si tus zapatos son nuevos úsalos poco a poco para que cojan la forma del pie y no te hagan rozaduras. No es recomendable usar el mismo par de zapatos todos los días, es necesario que respire, se airee y recupere la forma.</p>
        <h4 class="monserrat black">TIP 2</h4>
        <p class="monserrat grey mb-4">En ocasiones hasta que el zapato se hace a la forma del pie pueden hacerte rozaduras. Un buen truco es mojar pañuelos con alcohol rebajado con agua previamente y meterlos dentro dejándolos toda una noche. Esto ablanda la piel y evita que rocen. ¡Pero hay que hacerlo con mucho cuidado! No excederse con la cantidad de producto a colocar.</p>
        <h4 class="monserrat black">TIP 3</h4>
        <p class="monserrat grey mb-4">Guardar el calzado de la manera correcta también ayuda a su cuidado. No pongas unos encima de otros o los dejes expuestos al sol continuamente porque el sol se comerá el color y resecará el material</p>
        <h4 class="monserrat black">TIP 4</h4>
        <p class="monserrat grey mb-4">Si ha llovido y se han mojado debemos meterlos dentro de bolas de papel de seda para que absorban la humedad y evitar que se deformen.</p>
        <h4 class="monserrat black">TIP 5</h4>
        <p class="monserrat grey mb-4">Cuando estás haciendo cambio de armario, guardado la ropa de verano y sacando la de invierno o viceversa, siempre que vayas a dejar guardados tus zapatos por un tiempo dales antes una capa de crema para calzado. De esta forma el color perdurará más y tendrán un aspecto de calzado nuevo.
        </p>
        <h4 class="monserrat black">TIP 6</h4>
        <p class="monserrat grey mb-4">Seguro que tienes zapatos para ocasiones especiales como, bodas, reuniones de trabajo, bautismos, etc. Coloca dentro de estos, papel de seda o una horma para que la forma se mantenga.</p>
        <h4 class="monserrat black">TIP 7</h4>
        <p class="monserrat grey mb-4">En el caso de ser zapatos de gamuza (material difícil de limpiar), puedes evitar que se manche y estropee rápido aplicando tres capas de impermeabilizante varias horas antes de usarlo para que así de tiempo a que absorba bien.</p>
        <h4 class="monserrat black">TIP 8</h4>
        <p class="monserrat grey mb-4">Si por el contrario son de cuero usa una crema o pomada del mismo tono, y frotarlos con un trapo para sacarles brillo.</p>
        <h4 class="monserrat black">TIP 9</h4>
        <p class="monserrat grey mb-4">Si el calzado es de cuero engrasado, un material típico en algunas botas de montaña o botines de invierno. Deberás usar un cepillo y grasa especial para pieles para limpiarlos.</p>
        <h4 class="monserrat black">TIP 10</h4>
        <p class="monserrat grey mb-4">El tejido y las telas como por ejemplo el satén, tiene que lavarse con agua fría y jabón neutro, evitando el lavar ropas. Es preferible que el zapato no se moje entero y así no encoja.</p>
        <h4 class="monserrat black">TIP 11</h4>
        <p class="monserrat grey mb-4">No uses cremas en gamuza o nobuk, estropean el acabado aterciopelado. Este tipo de tejido debe limpiarse con un spray especial.</p>
        <h4 class="monserrat black">TIP 12</h4>
        <p class="monserrat grey mb-4">Si son de charol cuando llegues a casa límpialos con un algodón y limpia cristales. Esto les realza el brillo.</p>
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