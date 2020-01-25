@extends("layouts.backendLayout")
<?php use App\Place;
$places = Place::all(); 
?>

@section("titulo")
Vista - {{$shoe['name']}}
@endsection

@section("mainBackend")
<h2>{{$shoe['name']}}</h2>
<a href="/backend/editarProducto/{{$shoe['id']}}" class="btn btn-sm btn-outline-primary mt-3 mb-3">Editar</a>

@if (isset($updateOK)&&$updateOK==1)
<p class="alert alert-success" style="width:40%">Se actualizó la información en la base de datos</p>
@endif

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <ul>

                <li><b>Precio: </b> <span style="color: red;">{{$shoe['price']}}</span></li>

                <li><b>Descripción:</b>
                    <p>{{$shoe['description_es']}}</p>
                </li>

                <li><b>Descripción - Inglés: </b>
                    <p>{{ $shoe['description_en'] ? $shoe['description_en'] : 'No posee'}}</p>
                </li>

                <li><b>Descripción - Portugués: </b>
                    <p>{{ $shoe['description_por'] ? $shoe['description_en'] : 'No posee'}}</p>
                </li>

                <li><b>Descripción - Alemán: </b>
                    <p>{{ $shoe['description_sw'] ? $shoe['description_en'] : 'No posee'}}</p>
                </li>

                <li><b>Descripción - Francés: </b>
                    <p>{{ $shoe['description_fr'] ? $shoe['description_en'] : 'No posee'}}</p>
                </li>

                <li><b>Taco: </b>{{$shoe['heels']}}</li>

                <li><b>Altura de taco: </b>{{$shoe['height_heels']}}</li>

                <li><b>Altura de plataforma: </b>{{$shoe['platform']}}</li>

                <li><b>Suela: </b>{{$shoe['sole']}}</li>

                <li><b>Capellada: </b>{{$shoe['chapped']}}</li>

                <li><b>Forro: </b>{{$shoe['cover']}}</li>

                <li><b>Visible: </b>{{ $shoe['hidden'] == 1 ? 'No':'Si'}}</li>

                <li><b>Alerta de stock: </b>{{$shoe['stock_control']}}</li>
            </ul>
        </div>
        <div class="col-12 col-md-6">
            <div class="card mb-3" style="width: 18rem;">
                <img src="/storage/{{$shoe['preview_img']}}" class="img-thumbnail" alt="Imagen de vista previa">
                <div class="card-body">
                    <p class="card-text">Foto de vista previa.</p>
                    <a href="/backend/editarProductPreview/{{$shoe['id']}}">Editar imagen</a>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="mb-4" id="shoeimg">
<h4>Imágenes</h4>
<div class="row">
    <div class="col-md-6 mb-3">
        <a href="/backend/subirImagenes/{{$shoe['id']}}" class="btn btn-sm btn-outline-primary mt-3 mb-3">Agregar</a>
        {{--dd($shoe_img)--}}
        <div class="container-fluid">
        <div class="row">
            @foreach ($shoe->shoe_img as $img)
                <div class="col-4 card m-3" style="padding:0!important;">
                    <img src="/storage/{{$img['img_path']}}" class="img-thumbnail" alt="Imagen de vista previa">
                    <div class="card-body">
                    <a href="/backend/shoeimg/delete/{{$img['id']}}/{{$shoe['id']}}" 
                        class="btn btn-sm btn-outline-danger">Eliminar imagen</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</div>


<hr class="mb-4" id="color">
<h4>Colores</h4>
<ul>
    @forelse ($shoe->color as $color)
        <li><b>{{$color->name}}</b> <div class="colorPreview" style="background:{{$color->color}}"></div></li>
    @empty
        <li>No posee colores.</li>
    @endforelse
</ul>

<form class="form-inline form-group" method="POST" action="/backend/guardarColor/{{$shoe->id}}">
    @csrf
    <h5>Agregar color:</h5>
    <input type="text" class="form-control ml-2 form-control-sm" name="name" placeholder="Nombre">
    <input type="color" name="color" class="ml-2 form-control-sm">
    <button type="submit" class="btn btn-sm btn-outline-primary ml-2">Guardar</button>
</form>


<hr class="mb-4" id="stock">

<h4>Stock</h4>
@if (count($shoe->color) > 0)
<table id="table" class="table-responsive table table-striped table-sm">
        <thead>
            <tr>
                <th>Talle</th>
                <th>Color</th>
                <th>Lugar</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shoe->stock as $stock)
                <tr>
                    <form action="/backend/borrarStock" method="post">
                    @csrf
                    <input type="hidden" name="shoe_id" value="{{$shoe->id}}">
                    <input type="hidden" name="id" value="{{$stock->id}}">
                    <td>{{$stock->size}}</td>
                    <td>{{$thisColor = App\Color::find($stock->color_id)->name}}</td>
                    <td>{{$thisPlace = App\Place::find($stock->place_id)->place}}</td>
                    <td>{{$stock->quantity}}</td>
                    <td>
                        <button type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
                        <a href="/backend/shopcar/add/{{$stock->id}}" class="btn btn-sm btn-outline-warning">Comprar</a>
                    </td>
                    </form>
                </tr>
            @endforeach
            <tr>
                <form action="/backend/guardarStock" method="post">
                @csrf
                <input type="hidden" name="shoe_id" value="{{$shoe->id}}">
                <td><input type="text" name="size" id=""></td>
                <td><select name="color_id" id="">
                    @foreach ($shoe->color as $color)
                        <option value="{{$color->id}}">{{$color->name}}</option>
                    @endforeach
                </select></td>
                <td><select name="place_id" id="">
                        @foreach ($places as $place)
                            <option value="{{$place->id}}">{{$place->place}}</option>
                        @endforeach
                    </select></td>
                <td><input type="text" name="quantity"></td>
                <td><button type="submit" class="btn btn-sm btn-outline-primary">Guardar</button></td>
            </form>
            </tr>
        </tbody>
    </table>
@else
    <p>Primero debe agregar un color para controlar el stock.</p>
@endif
@endsection