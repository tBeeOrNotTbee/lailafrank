@extends('layouts.shopLayout')
@section('title', 'Editar Cuenta')
@section('contentShop')
<div class="col-12 col-md-7">
    <div class="container-fluid">
        <h2 class="monserrat-bold shop-title cero8em">Editar información de la cuenta</h2>
        <p class="monserrat grey2 cero8em">Mantenga su información de contacto actualizada.</p>

        <div class="row">

            <div class="col-12 mb-4 h50 d-flex flex-column justify-content-between">
                {{-- {{dd($errors)}} --}}
                <form method="post" action="/shop/myaccount/edit" class="w50">
                    @csrf
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" name="name" value="{{Auth::user()->name}}" required>
                    {!! $errors->first('name' , '<div class="alert alert-danger"> :message </div>') !!}
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" name="surname" value="{{Auth::user()->surname}}" required>
                    {!! $errors->first('surname' , '<div class="alert alert-danger"> :message </div>') !!}
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" name="dni" value="{{Auth::user()->dni}}" required>
                    {!! $errors->first('dni' , '<div class="alert alert-danger"> :message </div>') !!}
                    <input type="email" class="input-line form-control noBk rounded-0 monserrat cero8em" name="email" value="{{Auth::user()->email}}" required>
                    {!! $errors->first('email' , '<div class="alert alert-danger"> :message </div>') !!}
                    
                    <div class="w-100 shop-links my-3">
                        <span class="mt-3"><i class="far fa-square"></i> <a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">CAMBIAR CONTRASEÑA</a></span>
                    </div>
                    
                    <div class="d-flex justify-content-between mx-0 px-0" style="width: 115%!important">
                        <span class="mt-3 shop-link"><a  class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
                        <button type="submit" class="button-story m-0">Guardar</button>
                    </div>
                </form>
                    
            </div>

        </div>

    </div>
</div>
@endsection