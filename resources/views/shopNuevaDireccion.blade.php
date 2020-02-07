@extends('layouts.shopLayout')
@section('title', 'Nueva Dirección')
@section('contentShop')
<div class="col-12 col-md-7">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 mb-4 h50 d-flex flex-column justify-content-between">
                <h2 class="monserrat grey2 text-uppercase font-weight-bolder cero8em">Datos de contacto</h2>
                <form method="post" action="/address/frontend/new/" class="col-9 col-md-6" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" name="name" value="{{old('name') ? old('name') : Auth::user()->name}}" required>
                    {!!$errors->first('name', '<div class="alert alert-danger">:message</div>')!!}
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" name="surname" value="{{old('surname') ? old('surname') : Auth::user()->surname}}" required>
                    {!!$errors->first('surname', '<div class="alert alert-danger">:message</div>')!!}
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Teléfono" name="cellphone" value="{{old('cellphone') ? old('cellphone') : Auth::user()->telephone}}" required>
                    {!!$errors->first('cellphone', '<div class="alert alert-danger">:message</div>')!!}

                    <h2 class="monserrat grey2 text-uppercase font-weight-bolder cero8em mt-5">Direccion</h2>
                    <div class="form-row mt-3">
                        <div class="col-12">
                            <select class="input-line form-control noBk rounded-0 monserrat cero8em custom-select custom-select-sm mb-3 countries w100" name="country" id="countryId">
                                <option value="">Elegir país</option>
                            </select>
                            <select class="input-line form-control noBk rounded-0 monserrat cero8em custom-select custom-select-sm mb-3 states w100" name="state" id="stateId">
                                <option value="">Elegir provincia</option>
                            </select>
                            <select class="input-line form-control noBk rounded-0 monserrat cero8em custom-select custom-select-sm mb-3 cities w100" name="city" id="cityId">
                                <option value="">Select ciudad</option>
                            </select>
                            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                            <script src="{{asset('js/geoData.js')}}"></script>
                        </div>
                    </div>
                
                    <div class="form-row">
                        <div class="col-12">
                            {!! $errors->first('post_code' , '<div class="alert alert-danger"> :message </div>') !!}
                            <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" name="post_code" value="{{old('post_code')}}" placeholder="Código postal">
                        </div>
                
                        <div class="col-12">
                            {!! $errors->first('street' , '<div class="alert alert-danger"> :message </div>') !!}
                            <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" name="street" value="{{old('street')}}" placeholder="Calle">
                        </div>
                
                        <div class="col-12">
                            {!! $errors->first('number' , '<div class="alert alert-danger"> :message </div>') !!}
                            <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" name="number" value="{{old('number')}}" placeholder="Número">
                        </div>
                
                        <div class="col-12">
                            {!! $errors->first('apartment' , '<div class="alert alert-danger"> :message </div>') !!}
                            <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" name="apartment" value="{{old('apartment')}}" placeholder="Departamento">
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-5" style="width: 115%">
                        <span class="mt-3 shop-link"><a href="/shop/myaccount/addresses" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
                        <button type="submit" class="button-story m-0">Guardar</button>
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>
@endsection