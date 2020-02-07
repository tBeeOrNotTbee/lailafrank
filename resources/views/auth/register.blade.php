@extends('layouts.app')

@section('content')
<div class="container mb-5 mt-5">
    <div class="d-flex justify-content-center">

        <div class="col-md-4">
            <div class="text-center">

                <div class="d-none d-md-block col-12 mb-4">
                    <img src="../img/logo_shop.png" alt="">
                </div>

                <div class="mb-2 monserrat font-weight-bold cero8em"> Creá tu cuenta</div>

                <div class="mb-2">
                    <a class="btn btn-outline-dark rounded-0 pl-5 pr-5 cero7em" type="button" name="button" href="/login"> <i class="far fa-envelope"></i> INGRESÁ CON TU EMAIL</a>
                </div>

                <div class="card p-4 align-center">
                    <form action="/shopMiCuenta">
                        <!-- Action va a shopMicuenta, VER -->
                        @CSRF
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder=" Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" id="surname" name="surname" class="form-control" placeholder="Apellido">

                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="DNI">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder=" Contraseña">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">

                        </div>

                        <button type="submit" class="btn button-story rounded-0">{{ __('Ingresar') }}</button>

                        <div class="w100 d-flex justify-content-end">
                            <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- VIEJO REGISTER
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->