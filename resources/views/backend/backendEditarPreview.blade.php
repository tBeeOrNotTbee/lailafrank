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
        <input type="file" name="preview_img">
        <button type="submit" class="btn btn-primary btn-xs">Cargar</button>
    </form>
@endsection