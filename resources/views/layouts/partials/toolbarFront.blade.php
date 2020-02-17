<!-- Start Toolbar -->
<div class="demo-option-container d-none d-md-flex">
    <!-- Start Toolbar -->
    <div class="brook__toolbar">
        <div class="inner">
            <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="#"
                aria-label="Login">
                <i class="fas fa-user camel"></i>
            </a>
            <a class="hint--bounce hint--left hint--black primary-color-hover-important" href="/shop/shopcar" aria-label="Shopcart">
                <i class="fas fa-shopping-bag camel"></i>
            </a>
            <a class="hint--bounce hint--left hint--black primary-color-hover-important" href="/shop/myaccount/favorites"
                aria-label="My favorites">
                <i class="fas fa-heart rosa"></i>
            </a>
        </div>
    </div>
    <!-- End Toolbar -->
    <!-- Start Quick Link -->
    <div class="demo-option-wrapper">
        <div class="demo-panel-header">

            <div class="d-none d-md-block col-12 mt-4 text-center">
                <img src="{{asset('img/logo_shop.png')}}" class="mx-auto my-3" alt="">
            </div>

            @guest
            <h1 class="d-inline d-md-none roboto-light text-uppercase mx-auto text-center mt-4">Acceso <br> clientes
            </h1>

            <form method="post" action="{{ route('login') }}" class="w-75 w-md-100 mx-auto my-3">
                @CSRF
                <input type="email"
                    class="input-line form-control @error('email') is-invalid @enderror noBk rounded-0 monserrat cero8em p-0"
                    placeholder="CORREO ELECTRÓNICO" aria-describedby="basic-addon2" id="email" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input type="password" id="password"
                    class="input-line form-control @error('password') is-invalid @enderror noBk rounded-0 monserrat cero8em p-0 mt-2"
                    placeholder="CONTRASEÑA" name="password" required autocomplete="current-password"
                    aria-describedby="basic-addon2">

                <div class="d-flex justify-content-end mt-3 mb-4">
                    <input class="mx-1" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="d-flex justify-content-end mt-3 mb-4">
                    @if (Route::has('password.request'))
                    <span class="mt-3 shop-link"><a href="{{ route('password.request') }}"
                            class="shop-card-text monserrat text-uppercase grey2 cero7em"
                            style="font-size: 0.8em">{{ __('¿Olvidaste tu contraseña?') }}</a></span>
                    @endif
                </div>

                <div class="d-flex justify-content-center mt-7">
                    <button type="submit" class="button-story m-0btext-reset text-decoration-none">Ingresar</button>
                </div>
            </form>

            <div class="d-flex justify-content-center mb-5">
                <span class="mt-3 shop-link"><a href="register"
                        class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿No tenés
                        cuenta? Registrate acá</a></span>
            </div>
            @else
            @include('layouts.partials.optionsLogged')
            @endguest
        </div>
    </div>
    <!-- End Quick Link -->
</div>
<!-- End Toolbar -->