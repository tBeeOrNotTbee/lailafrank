@section('toolbarFront')
<!-- Start Toolbar -->
<div class="demo-option-container d-none d-md-flex">
    <!-- Start Toolbar -->
    <div class="brook__toolbar">
        <div class="inner">
            <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Login">
                <i class="fas fa-user camel"></i>
            </a>
            <a class="hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Shopcart">
                <i class="fas fa-shopping-bag camel"></i>
            </a>
            <a class="hint--bounce hint--left hint--black primary-color-hover-important" href="shopMisFavoritos.php" aria-label="My favorites">
                <i class="fas fa-heart rosa"></i>
            </a>
        </div>
    </div>
    <!-- End Toolbar -->
    <!-- Start Quick Link -->
    <div class="demo-option-wrapper">
        <div class="demo-panel-header">

            <div class="d-none d-md-block col-12 mt-4 text-center">
                <img src="../img/logo_shop.png" class="" alt="">
            </div>
            <h1 class="d-inline d-md-none roboto-light text-uppercase mx-auto text-center mt-4">Acceso <br> clientes</h1>

            <form method="post" action="" class="w-75 w-md-100 mx-auto my-3">
                <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em p-0" placeholder="CORREO ELECTRÓNICO" aria-describedby="basic-addon2">
                <input type="password" class="input-line form-control noBk rounded-0 monserrat cero8em p-0 mt-2" placeholder="CONTRASEÑA" aria-describedby="basic-addon2">
            </form>

            <div class="d-flex justify-content-end mt-3 mb-5">
                <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿Olvidaste tu contraseña?</a></span>
            </div>

            <div class="d-flex justify-content-center mt-7">
                <a href="shopMiCuenta.php" class="button-story m-0">Ingresar</a>
            </div>

            <div class="d-flex justify-content-center mb-5">
                <span class="mt-3 shop-link"><a href="registro.php" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿No tenés cuenta? Registrate acá</a></span>
            </div>

        </div>
        <div class="demo-quick-option-list">


        </div>
    </div>
    <!-- End Quick Link -->
</div>
<!-- End Toolbar -->
@endsection


