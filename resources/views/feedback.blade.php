@extends('layouts.app')
@section('title', 'Feedback')
@section('content')
<div class="row">
    <div class="col-12 mt-4 text-center">
        <img src="{{asset('/img/logo_shop.png')}}" class="" alt="">
    </div>
    <h1 class="d-inline roboto-light text-uppercase mx-auto text-center mt-5 unoem">Encuenta de satisfacción</h1>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="row mt-5 mb-5 d-flex justify-content-center">
    <div class="col-9 col-md-4 noPad overflow-hidden">

        <form method="post" action="/feedback" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="discount_id" value="1">

            <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em w-100" name="fullName" value="{{old('fullName') ? old('fullName') : Auth::user()->fullName()}}" required>
            {!!$errors->first('fullName', '<div class="alert alert-danger">:message</div>')!!}
            <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="E-mail" name="mail" value="{{old('mail') ? old('mail') : Auth::user()->email}}" required>
            {!!$errors->first('mail', '<div class="alert alert-danger">:message</div>')!!}
            <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Teléfono" name="cellphone" value="{{old('cellphone') ? old('cellphone') : Auth::user()->telephone}}" required>
            {!!$errors->first('cellphone', '<div class="alert alert-danger">:message</div>')!!}
        
            <div class="form-row">
                <div class="col-12">
                    <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" name="model" value="{{old('model')}}" placeholder="Modelo adquirido" required>
                    {!! $errors->first('model' , '<div class="alert alert-danger"> :message </div>') !!}
                </div>
        
                <div class="col-12 mt-2">
                    <textarea type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" name="suggestion" value="{{old('suggestion')}}" placeholder="Sugerencias"></textarea>
                    {!! $errors->first('suggestion' , '<div class="alert alert-danger"> :message </div>') !!}
                </div>
            </div>
            
            <div class="d-flex justify-content-end mt-5" style="width: 100%">
                <button type="submit" class="button-story m-0">Guardar</button>
            </div>
        </form>

    </div>
</div>
@endsection