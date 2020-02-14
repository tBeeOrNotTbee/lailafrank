@extends("layouts.backendLayout")

@section("titulo")
Cupones de descuento
@endsection

@section("mainBackend")
<h2>Cupones de descuento</h2>

<script>
    function onoff(id) {
        var checkBox = document.getElementById("check"+id);
        let activity

        if (checkBox.checked == true) {
            /* ACA ENVIA PARA ACTIVAR */
            activity = 'on';
        } else {
            /* ACA ENVIA PARA DESACTIVAR */
            activity = 'off';
        }

        let url = '/backend/discount/onoff/'+id+'/'+activity;

        fetch(url, {
            method: "GET"
        }).then((response)=>{
            return response.json()
        }).then((response)=>{
            console.log(response)
        })
    }
</script>

<table id="table" class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>Número</th>
            <th>Tipo</th>
            <th>Monto</th>
            <th>Activo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if (count($contacts) > 0)
        @foreach ($contacts as $discount)
        <tr>
            <form action="/backend/discount/destroy/" method="post">
                @csrf
            <input type="hidden" name="id" value="{{$discount->id}}">
                <td>{{$discount->number}}</td>
                <td>{{$discount->type}}</td>
                <td>{{$discount->amount}}</td>
                <td><input type="checkbox" id="check{{$discount->id}}" name="active" value="1" onclick="onoff({{$discount->id}})"
                        {{($discount->active == 1) ? 'checked' : '1'}}></td>
                <td>
                    <button type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
                </td>
            </form>
        </tr>
        @endforeach
        @else
        <p>No hay cupones de descuento creados.</p>
        @endif
        <tr>
            <form action="/backend/discount/create" method="post">
                @csrf
                <td><input type="text" name="number" id="" required></td>
                <td><select name="type" id="" required>
                        <option value="%">%</option>
                        <option value="$">$</option>
                    </select></td>
                <td><input type="text" name="amount" id="" required></td>
                <td class="text-center aling-self-center"><input type="checkbox" id="active" name="active"
                    value="1" {{old('active') ? 'checked' : ''}}></td>
                <td><button type="submit" class="btn btn-sm btn-outline-primary">Guardar</button></td>
            </form>
        </tr>
    </tbody>
</table>

@endsection