@extends("layouts.backendLayout")

@section("titulo")
Editar imágen - {{$shoe['name']}}
@endsection

@section("mainBackend")
<h2>{{$shoe['name']}}</h2>
<a href="/backend/verProducto/{{$shoe['id']}}" class="btn btn-sm btn-outline-primary mt-3 mb-3">volver</a>
        <h2>Imagenes para catalogo</h2>

        <div class="container">
            <div class="row">
                <?php $previewA = $shoe->previewA();?>
                @isset ($previewA)
                <div class="col-4 card m-3" style="padding:0!important;">
                    <img src="/storage/{{$previewA->img_path}}" class="img-thumbnail" alt="Imagen de vista previa A">
                    <div class="card-body">
                        <a href="/backend/shoeimg/delete/{{$previewA->id}}/{{$shoe['id']}}"
                            class="btn btn-sm btn-outline-danger">Eliminar imagen</a>
                    </div>
                </div>
                @else
                <div class="col-4 card m-3" style="padding:0!important;">
                    <div class="card-body">
                        <p class="text-center">Preview A</p>
                        <form class="w-100 text-center p-4" action="/backend/editarProductPreview/{{$shoe->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="previewA" id="" class="my-3" required><br>
                            <button type="submit" class="btn btn-primary">Cargar</button>        
                        </form>
                    </div>
                </div>
                @endisset

                <?php $previewB = $shoe->previewB();?>
                @isset ($previewB)
                <div class="col-4 card m-3" style="padding:0!important;">
                    <img src="/storage/{{$previewB->img_path}}" class="img-thumbnail" alt="Imagen de vista previa A">
                    <div class="card-body">
                        <a href="/backend/shoeimg/delete/{{$previewB->id}}/{{$shoe['id']}}"
                            class="btn btn-sm btn-outline-danger">Eliminar imagen</a>
                    </div>
                </div>
                @else
                <div class="col-4 card m-3" style="padding:0!important;">
                    <div class="card-body">
                        <p class="text-center">Preview B</p>
                        <form class="w-100 text-center p-4" action="/backend/editarProductPreview/{{$shoe->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="previewB" id="" class="my-3" required><br>
                            <button type="submit" class="btn btn-primary">Cargar</button>        
                        </form>
                    </div>
                </div>
                @endisset

                <?php $previewLarge = $shoe->previewLarge(); ?>
                @isset ($previewLarge)
                <div class="col-4 card m-3" style="padding:0!important;">
                    <img src="/storage/{{$previewLarge->img_path}}" class="img-thumbnail" alt="Imagen de vista previa A">
                    <div class="card-body">
                        <a href="/backend/shoeimg/delete/{{$previewLarge->id}}/{{$shoe['id']}}"
                            class="btn btn-sm btn-outline-danger">Eliminar imagen</a>
                    </div>
                </div>
                @else
                <div class="col-4 card m-3" style="padding:0!important;">
                    <div class="card-body">
                        <p class="text-center">Preview Large</p>
                        <form class="w-100 text-center p-4" action="/backend/editarProductPreview/{{$shoe->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="previewLarge" id="" class="my-3" required><br>
                            <button type="submit" class="btn btn-primary">Cargar</button>        
                        </form>
                    </div>
                </div>
                @endisset

                
            </div>
        </div>
        
            <div class="m-3">
                <a href="/backend/verProducto/{{$shoe->id}}" class="btn btn-danger btn-xs">Volver</a>
            </div>
    </div>
</form>
@endsection