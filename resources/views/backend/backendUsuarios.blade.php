@extends("layouts.backendLayout")

@section("titulo")
    Usuarios
@endsection

@section("mainBackend")
<h2>Usuarios</h2>
<table id="table" class="table-responsive table table-striped table-sm">
    <thead>
        <tr>
            <th>ID de usuario</th>
            <th>Nombre y Apellido</th>
            <th>Mail</th>
            <th>Tipo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
        <td>{{$user->id}}</td>
        <td><a href="/backend/editarUsuario/{{$user->id}}">{{$user->fullname()}}</a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->hasRole('admin') ? 'Administrador' : 'Cliente'}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection