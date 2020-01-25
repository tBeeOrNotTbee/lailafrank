@extends('layouts.backendLayout')

@section('titulo')
Nueva dirección
@endsection

@section('mainBackend')
<h2>Nueva dirección</h2>

<form class="form-group" method="POST" action="/address/backend/new/">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    @csrf
    <div class="form-row">
        <div class="col-4">
            <label>Nombre</label>
            {!! $errors->first('name' , '<div class="alert alert-danger"> :message </div>') !!}
            <input type="text" class="form-control form-control-sm" name="name" value="{{old('name')}}" required>
            <small id="emailHelp" class="form-text text-muted">De la persona que recibe el pedido.</small>
        </div>
        <div class="col-4">
            <label>Apellido</label>
            {!! $errors->first('surname' , '<div class="alert alert-danger"> :message </div>') !!}
            <input type="text" class="form-control form-control-sm" name="surname" value="{{old('surname')}}" required>
        </div>
    </div>

    <div class="form-row mt-3">
        <div class="col-4">
            <select class="custom-select custom-select-sm mb-3 countries" name="country" id="countryId">
                <option value="">Elegir país</option>
            </select>
            <select class="custom-select custom-select-sm mb-3 states" name="state" id="stateId">
                <option value="">Elegir provincia</option>
            </select>
            <select class="custom-select custom-select-sm mb-3 cities" name="city" id="cityId">
                <option value="">Select ciudad</option>
            </select>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="{{asset('js/geoData.js')}}"></script>
        </div>
    </div>

    <div class="form-row">
        <div class="col-4">
            <label>Código postal</label>
            {!! $errors->first('post_code' , '<div class="alert alert-danger"> :message </div>') !!}
            <input type="text" class="form-control form-control-sm" name="post_code" value="{{old('post_code')}}">
        </div>

        <div class="col-4">
            <label>Calle</label>
            {!! $errors->first('street' , '<div class="alert alert-danger"> :message </div>') !!}
            <input type="text" class="form-control form-control-sm" name="street" value="{{old('street')}}">
        </div>

        <div class="col-4">
            <label>Número</label>
            {!! $errors->first('number' , '<div class="alert alert-danger"> :message </div>') !!}
            <input type="text" class="form-control form-control-sm" name="number" value="{{old('number')}}">
        </div>

        <div class="col-4">
            <label>Departamento</label>
            {!! $errors->first('apartment' , '<div class="alert alert-danger"> :message </div>') !!}
            <input type="text" class="form-control form-control-sm" name="apartment" value="{{old('apartment')}}">
        </div>
    </div>

    <div class="form-row">
        <div class="col-4">
            <label>Teléfono</label>
            {!! $errors->first('cellphone' , '<div class="alert alert-danger"> :message </div>') !!}
            <input type="text" class="form-control form-control-sm" name="cellphone" value="{{old('cellphone')}}">
            <small class="form-text text-muted">Dependiendo el servicio del correro puede recibir alertas sms.</small>
        </div>
    </div>

    <a class="btn btn-primary btn-sm mt-3" href="/backend/shopcar/list/">Volver atras</a>
    <button type="submit" class="btn btn-success btn-sm mt-3">Guardar</button>
</form>


@endsection