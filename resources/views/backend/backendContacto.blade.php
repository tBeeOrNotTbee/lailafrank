@extends("layouts.backendLayout")
@section("titulo")
    Mensajes de clientes
@endsection

@section("mainBackend")
<h2>Mensajes de clientes</h2>


<table id="table" class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Asunto</th>
            <th>Mensaje</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact['name']}}</td>
                <td>{{$contact['surname']}}</td>
                <td>{{$contact['email']}}</td>
                <td>{{$contact['phone']}}</td>
                <td>{{$contact['about']}}</td>
                <td>{{$contact['description']}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection