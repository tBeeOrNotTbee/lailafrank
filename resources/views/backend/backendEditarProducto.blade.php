@extends("layouts.backendLayout")

@section("titulo")
Editar Producto
@endsection

@section("mainBackend")
<h2>Editar zapato</h2>
<div class="container">
    <div class="row">
        <div class="col-md-8 order-md-1">
            <form class="needs-validation" method="POST" action="/backend/updateProducto">
                {{csrf_field()}}
                <input type="hidden" value="{{$shoe['id']}}" name="id">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
                            value="{{$shoe['name']}}" required>
                        <div class="invalid-feedback">
                            Nombre es requerido.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="descripcion">Descripción - Español</label>
                    <textarea type="text" class="form-control" id="descripcion" placeholder="..." name="description_es"
                        required>{{$shoe['description_es']}}</textarea>
                    <div class="invalid-feedback">
                        Por favor ingresar descripción.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="descripcionIngles">Descripción - Inglés</label>
                    <textarea type="text" class="form-control" id="descripcionIngles" placeholder="..."
                        name="description_en">
                        {{ $shoe['description_en'] ? $shoe['description_en'] : ''}}
                    </textarea>
                    <div class="invalid-feedback">
                        Por favor ingresar descripción.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="descripcionPortugues">Descripción - Portugués</label>
                    <textarea type="text" class="form-control" id="descripcionPortugues" placeholder="..."
                        name="description_por">
                        {{ $shoe['description_por'] ? $shoe['description_por'] : ''}}
                    </textarea>
                    <div class="invalid-feedback">
                        Por favor ingresar descripción.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="descripcionPortugues">Descripción - Alemán</label>
                    <textarea type="text" class="form-control" id="descripcionAleman" placeholder="..."
                        name="description_sw">
                        {{ $shoe['description_sw'] ? $shoe['description_sw'] : ''}}
                    </textarea>
                    <div class="invalid-feedback">
                        Por favor ingresar descripción.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="descripcionPortugues">Descripción - Francés</label>
                    <textarea type="text" class="form-control" id="descripcionFrances" placeholder="..."
                        name="description_fr">
                        {{ $shoe['description_fr'] ? $shoe['description_fr'] : ''}}
                    </textarea>
                    <div class="invalid-feedback">
                        Por favor ingresar descripción.
                    </div>
                </div>

                <hr class="mb-4">
                <h4>Precio</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="price">Pesos</label>
                        <input type="text" class="form-control" id="price" name="price"
                            placeholder="En pesos argentinos" value="{{ $shoe['price']}}" required>

                        <div class="invalid-feedback">El precio es requerido.</div>
                        {!! $errors->first('price','<div class="alert alert-danger">:message</div>')!!}
                    </div>
                </div>

                <hr class="mb-4">
                <h4>Datos</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="capellada">Material Capellada</label>
                        <input type="text" class="form-control" id="capellada" placeholder="Capellada" name="chapped"
                            value="{{$shoe['chapped']}}" required>

                        <div class="invalid-feedback">El material de la capellada es requerido.</div>
                        {!! $errors->first('chpped','<div class="alert alert-danger">:message</div>')!!}
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="forro">Material del forro</label>
                        <input type="text" class="form-control" id="forro" placeholder="forro" name="cover"
                            value="{{$shoe['cover']}}" required>

                        <div class="invalid-feedback">El material del forro es requerido.</div>
                        {!! $errors->first('cover','<div class="alert alert-danger">:message</div>')!!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="taco">Forma del taco</label>
                        <input type="text" class="form-control" id="taco" placeholder="taco" name="heels"
                            value="{{$shoe['heels']}}" required>

                        <div class="invalid-feedback">El tipo de taco.</div>
                        {!! $errors->first('heels','<div class="alert alert-danger">:message</div>')!!}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="alturaTaco">Altura del taco</label>
                        <input type="text" class="form-control" id="alturaTaco" placeholder="Altura taco"
                            name="height_heels" value="{{$shoe['height_heels']}}" required>

                        <div class="invalid-feedback">La altura del taco es requerida.</div>
                        {!! $errors->first('height_heels','<div class="alert alert-danger">:message</div>')!!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="alturaPlataforma">Altura de la plataforma</label>
                        <input type="text" class="form-control" id="alturaPlataforma" placeholder="Altura plataforma"
                            name="height_platform" value="{{$shoe['height_platform']}}" required>

                        <div class="invalid-feedback">La altura de la plataforma es requerida.</div>
                        {!! $errors->first('height_platform','<div class="alert alert-danger">:message</div>')!!}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="suela">Suela</label>
                        <input type="text" class="form-control" id="suela" placeholder="Suela" name="sole"
                            value="{{$shoe['sole']}}" required>

                        <div class="invalid-feedback">La suela es requerida.</div>
                        {!! $errors->first('sole','<div class="alert alert-danger">:message</div>')!!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="suela">categoría</label>
                        <select type="text" class="form-control" id="category_id" name="category_id" required>
                            @foreach (App\Shoe_category::all() as $category)
                                <option value="{{$category->id}}" 
                                    {{isset($shoe->category->id) && $shoe->category->id == $category->id ? 'selected' : ''}}
                                    >{{$category->name}}</option>
                            @endforeach
                        </select>

                        <div class="invalid-feedback">La categoría es requerida.</div>
                        {!! $errors->first('sole','<div class="alert alert-danger">:message</div>')!!}
                    </div>
                </div>


                <hr class="mb-4">
                <h4>Opciones</h4>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="stockCOntroll">Cantidad en stock para lanzar alerta</label>
                        <input type="text" class="form-control" id="stockControll" name="stock_control"
                            value="{{$shoe['stock_control']}}">

                        <div class="invalid-feedback">la cantidad de alerta es necesaria requerida.</div>
                        {!! $errors->first('stock_control','<div class="alert alert-danger">:message</div>')!!}
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <input type="checkbox" class="custom-control-input" id="hidden" name="hidden"
                                value="{{isset($shoe['hidden']) ? $shoe['hidden'] : '1'}}" {{($shoe['hidden'] == 1) ? 'checked' : '1'}}>

                            <label class="custom-control-label" for="hidden">Oculto</label>
                            {!! $errors->first('hidden','<div class="alert alert-danger">:message</div>')!!}
                        </div>
                        <div>
                            <input type="checkbox" class="custom-control-input" id="offer" name="offer"
                                value="{{isset($shoe['offer']) ? $shoe['offer'] : '1'}}" {{($shoe['offer'] == 1) ? 'checked' : '1'}}>

                            <label class="custom-control-label" for="offer">En oferta</label>
                            {!! $errors->first('offer','<div class="alert alert-danger">:message</div>')!!}
                        </div>
                    </div>
                </div>

                <hr class="mb-4">
                <div class="m-3">
                    <a href="/backend/verProducto/{{$shoe['id']}}" class="btn btn-danger btn-xs">Cancelar</a>
                    <button class="btn btn-primary btn-xs" type="submit">Guardar</button>
                </div>




            </form>
        </div>
    </div>
</div>
@endsection