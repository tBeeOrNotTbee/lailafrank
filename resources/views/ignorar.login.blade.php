@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="row">
    <div class="d-none d-md-block col-12 mt-4 text-center">
        <img src="../img/logo_shop.png" class="" alt="">
    </div>
    <h1 class="d-inline d-md-none roboto-light text-uppercase mx-auto text-center mt-4">Acceso <br> clientes</h1>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="row mt-5 mb-5 d-flex justify-content-center">
    <div class="col-12 col-md-4">

        <form method="post" action="" class="w-75 w-md-100 mx-auto my-3">
            @CSRF
            <input type="email" class="input-line form-control @error('email') is-invalid @enderror noBk rounded-0 monserrat cero8em p-0" placeholder="CORREO ELECTRÓNICO" aria-describedby="basic-addon2" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="password" id="password" class="input-line form-control @error('password') is-invalid @enderror noBk rounded-0 monserrat cero8em p-0 mt-2" placeholder="CONTRASEÑA" name="password" required autocomplete="current-password" aria-describedby="basic-addon2">
        </form>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-3 mb-5">
            @if (Route::has('password.request'))
            <span class="mt-3 shop-link"><a href="{{ route('password.request') }}" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">{{ __('¿Olvidaste tu contraseña?') }}</a></span>
            @endif
        </div>

        <div class="d-flex justify-content-center mt-7">
            <button type="submit"><a href="shopMiCuenta.php" class="button-story m-0">Ingresar</a> </button>
        </div>

        <div class="d-flex justify-content-center mb-5">
            <span class="mt-3 shop-link"><a href="registro.php" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿No tenés cuenta? Registrate acá</a></span>
        </div>

    </div>
</div>
@endsection