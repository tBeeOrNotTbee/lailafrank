@extends("layouts.backendLayout")

@section("titulo")
Editar imágen - {{$shoe['name']}}
@endsection

@section("mainBackend")
<h2>{{$shoe['name']}}</h2>
<a href="/backend/verProducto/{{$shoe['id']}}" class="btn btn-sm btn-outline-primary mt-3 mb-3">volver</a>

<div class="card mb-3" style="width: 18rem;">
    <img src="/storage/{{$shoe['preview_img']}}" class="img-thumbnail" alt="Imagen de vista previa">
    <div class="card-body">
        <p class="card-text">Foto actual.</p>
    </div>
</div>

<form action="/backend/editarProductPreview/{{$shoe['id']}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6 mb-3">
        <script>
            function habilitar() {
                var checkBox = document.getElementById("previewLargeCheck");

                if (checkBox.checked == true) {
                    document.getElementById("previewLarge").disabled = false;
                    document.getElementById("previewA").disabled = true;
                    document.getElementById("previewB").disabled = true;
                } else {
                    document.getElementById("previewLarge").disabled = true;
                    document.getElementById("previewA").disabled = false;
                    document.getElementById("previewB").disabled = false;
                }
            }
        </script>

        <label>Imagenes para catalogo</label><br>
        <label for="previewA">Imagen A</label>
        <input id="previewA" type="file" name="previewA" class="form-control mb-3" value="{{ old('previewA')}}">
        <label for="previewB">Imagen B</label>
        <input id="previewB" type="file" name="previewB" class="form-control mb-3" value="{{ old('previewB')}}">

        <div class="col-md-6 mb-3">
            <input id="previewLargeCheck" type="checkbox" class="custom-control-input" name="previewLargeCheck"
                value="{{old('previewLargeCheck') ? old('previewLargeCheck') : '1'}}" onclick="habilitar()">
            <label class="custom-control-label" for="previewLargeCheck">Imagen larga</label>
            {!! $errors->first('previewLarge','<div class="alert alert-danger">:message</div>')!!}
        </div>
        {!! $errors->first('preview_img','<div class="alert alert-danger">:message</div>')!!}


        <input id="previewLarge" type="file" name="previewLarge" value="{{ old('previewLarge')}}"
            class="form-control mb-3" disabled>

            <div class="m-3">
                <a href="/backend/verProducto/{{$shoe->id}}" class="btn btn-danger btn-xs">Cancelar</a>
                <button class="btn btn-primary btn-xs" type="submit">Guardar</button>
            </div>
    </div>
</form>
@endsection