@extends('layouts.app')
@section('title', 'Reestablecer contraseña')
@section('content')
    <div class="row">
        <div class="d-none d-md-block col-12 my-4 text-center">
            <img src="{{asset('/img/logo_shop.png')}}" class="" alt="">
        </div>
        <h1 class="d-inline roboto-light text-uppercase mx-auto text-center my-4 unoem">Reestablecer contraseña</h1>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="row mt-5 mb-5 d-flex justify-content-center">
        <div class="col-12 col-md-4">

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="post" action="{{ route('password.email') }}" class="w-75 w-md-100 mx-auto my-3">
                @CSRF

                <input id="email" type="email" class="input-line form-control @error('email') is-invalid @enderror noBk rounded-0 monserrat cero8em p-0"
                    name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="d-flex justify-content-center mt-7">
                    <button type="submit" class="button-story m-0btext-reset text-decoration-none">Ingresar</button>
                </div>
            </form>

            <div class="d-flex justify-content-center mb-5">
                <span class="mt-3 shop-link"><a href="/register" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿No tenés cuenta? Registrate acá</a></span>
            </div>

        </div>
    </div>
<!-- 


    ////////////////////////////////////////////////////////////
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reestablecer contraseña</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->