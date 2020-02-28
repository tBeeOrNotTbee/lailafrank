@extends('layouts.app')
@section('title', $shoe->name)
@section('content')

<div class="row mt-7 pb-3 mb-3">

    <div class="col-10 col-md-7 mx-auto mx-md-0 mb-5 d-none d-md-flex">
        <div class="sp-loading">
            <div class="spinner-border text-secondary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="sp-wrap gallery m-0">
            @forelse ($imgs as $img)
                <a href="/storage/{{$img->img_path}}"><img class="w100" src="/storage/{{$img->img_path}}"></a>
            @empty
                <P>No hay imagenes para mostrar</P>
            @endforelse
        </div>
    </div>

    <div class="d-md-none col-10 col-md-7 mx-auto mx-md-0 mb-5 d-flex">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                @forelse ($imgs as $img)
                    <div class="carousel-item  @if ($loop->first)
                        active
                    @endif ">
                    <a href="/storage/{{$img->img_path}}"><img class="w100" src="/storage/{{$img->img_path}}"></a>
                    </div>
                @empty
                    <P>No hay imagenes para mostrar</P>
                @endforelse
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
                    <a id="botonTalles" href="#" class="monserrat grey2 cero7em text-center" data-toggle="modal" style="cursor: pointer!important"
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
  <!-- Modal -->
  <div class="modal fade" id="tallesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded-0" id="modal-dialog" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body monserrat">
          <a  href="{{url('img/guia_talles_desk.png')}}"><img src="{{url('img/guia_talles_desk.png')}}" alt="" class="w-100 img-fluid mb-3"></a>
          <h2 class="monserrat-bold cero8em text-center mb-3">Elige según el talle que comúnmente usas, pero ten en cuenta lo mencionado debajo:</h2>
          <p class="cero8em">Los calzados realizados con materiales nobles como el cuero o la cabretilla ceden con el uso.</p>
            <p class="cero8em">En cuanto a materiales como el charol, es un material más duro que el anterior, así que si sos un medio punto en un talle, conviene selecciones el talle más alto que calces.</p>
            <p class="cero8em">El calzado stiletto, en punta, suele ser de talle acotado en la misma, para lo cual es bueno puedas optar si sos un medio punto por el talle más alto, para que tu pie se sienta más cómodo.</p>
            <p class="cero8em">No es lo más recomendable, seleccionar el calzado anteriormente mencionado, en lo que se denomina dedo griego (que sería que el segundo dedo del pie es más largo que el primero) dado que el mismo rozara con la punta indefectiblemente al esta estar en ángulo, para comodidad del mismo, seleccionar calzado de punta más bien redonda.</p>
            <p class="cero8em">Si tienes un pie angosto y necesitas algo que te contenga bien el mismo para no descalzarlo sería bueno selecciones calzado que tenga tiras o cordones que crucen el empeine.</p>
            <p class="cero8em">Si tu pie es ancho y con un empeine alto, te conviene seleccionar un calzado de horma más bien ancha para que el pie quede contenido pero cómodo.</p>
            <p class="cero8em">Si tienes un tobillo ancho, podes optar por calzado sin tira de talón o que la misma sea bien angosta, para estilizarlo.</p>
            <p class="cero8em">Si utilizas platillas ortopédicas en el calzado, es recomendable para tu comodidad, adquirir el talle siguiente al que calzas usualmente, así las mismas pueden ingresar con facilidad como así también tu pie y el mismo podrá estar cómodo.</p>
            <p class="cero8em">Si usualmente soles tener la ubicación del dedo gordo, más arriba que lo normal, no selecciones calzados con punteras de charol, dado que el mismo es más rígido y va a incomodarte, puede ser que selecciones algo abierto en la punta o bien si es cerrado que sea con cuero o cabretilla que son materiales más blandos.</p>
          
        </div>
      </div>
    </div>
  </div>
@endsection