@extends('layouts.backendLayout')

@section('titulo')
Newsletter
@endsection

@section('mainBackend')
<h2>Newsletter</h2>
<table id="table" class="table-responsive table table-striped table-sm">
    <thead>

        <tr>
            <th>E-mail</th>
            <th>¿Es usuario?</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($newsletterlist as $newsletterSub)
        <tr>
            <td>{{$newsletterSub['email']}}</td>
            <td>@if (in_array($newsletterSub['user_id'], $users_id))
                Sí
                @else
                No
                @endif
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection