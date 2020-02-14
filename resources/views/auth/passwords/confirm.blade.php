@extends('layouts.app')
@section('title', 'Confirmar contraseña')
@section('content')
<div class="row text-center">
    <div class="col-12 mt-4 text-center">
        <img src="{{asset('/img/logo_shop.png')}}" class="d-none d-md-block mx-auto" alt="">
        <h1 class="roboto-light text-uppercase mx-auto text-center mt-4 unoem">Confirmar password</h1>
        <p class="monserrat cero7em d-inline">Confirme su contraseña para continuar</p>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="row mt-5 mb-5 d-flex justify-content-center">
    <div class="col-12 col-md-4">

        <form method="post" action="{{ route('password.confirm') }}" class="w-75 w-md-100 mx-auto my-3">
            @CSRF
            <input id="password" type="password" class="input-line form-control @error('password') is-invalid @enderror noBk rounded-0 monserrat cero8em p-0" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <div class="d-flex justify-content-end mt-3 mb-4">
            @if (Route::has('password.request'))
            <span class="mt-3 shop-link"><a href="{{ route('password.request') }}" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">{{ __('¿Olvidaste tu contraseña?') }}</a></span>
            @endif
        </div>

        <div class="d-flex justify-content-center mt-7">
            <button type="submit" class="button-story m-0btext-reset text-decoration-none">Ingresar</button>
        </div>
    </form>

        <div class="d-flex justify-content-center mb-5">
            <span class="mt-3 shop-link"><a href="/register" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿No tenés cuenta? Registrate acá</a></span>
        </div>

    </div>
</div>
@endsection


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 --}}