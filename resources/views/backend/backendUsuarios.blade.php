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
        <tr>
            <td>1</td>
            <td><a href="/backend/editarUsuario/id">Marcelo Velazquez</a></td>
            <td>mv@mail.com</td>
            <td>Cliente</td>
        </tr>
        <tr>
            <td>2</td>
            <td><a href="/backend/editarUsuario/id">Marcelo Velazquez</a></td>
            <td>mv@mail.com</td> 
            <td>Cliente</td>
        </tr>
        <tr>
            <td>3</td>
            <td><a href="/backend/editarUsuario/id">Marcelo Velazquez</a></td>
            <td>mv@mail.com</td>
            <td>Empleado</td>
        </tr>
    </tbody>
</table>
@endsection