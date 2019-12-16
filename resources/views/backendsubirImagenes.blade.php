@extends("layouts.backendLayout")

@section("titulo")
    Cargar imágenes - {{$shoe['name']}}
@endsection

@section("mainBackend")
    <h2>{{$shoe['name']}}</h2> 
    <a href="/backend/verProducto/{{$shoe['id']}}" class="btn btn-sm btn-outline-primary mt-3 mb-3">volver</a>      

    <form action="/backend/cargaImgsProducts/{{$shoe['id']}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="producto-container">
        <button id="add-producto" class="btn btn-sm btn-outline-primary mt-3 mb-3"><strong>+</strong></button>
        <button id="delete-producto" class="btn btn-sm btn-outline-danger mt-3 mb-3"><strong>-</strong></button>
        <div class="producto-row-0">
            <div class="form-group col-md-5">
                <input type="file" name="shoe_img[]" class="form-control input-sm">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-xs">Cargar</button>
</form>
@endsection

@section("scripts")
<script>
//Agrega Nuevos Campos de Productos
var i = 1;
    $("#add-producto").click(function(e){
        i++;
        e.preventDefault();//eliminamos el evento por defecto
        $(".producto-row-0").clone().appendTo(".producto-container").attr("class","producto-row-"+(i));
    });

    $("#delete-producto").click(function(e){
        if(i>1){
            e.preventDefault();//eliminamos el evento por defecto
            $(".producto-row-"+i).remove();
            i--;
        }
    });
</script>
@endsection