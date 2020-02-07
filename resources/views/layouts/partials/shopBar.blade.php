<!-- SHOP MENU RESPONSIVE -->
<div class="col-12 mt-4 mb-3 d-block d-md-none">
    <div id="accordion">
        <div class="card border-0">
            <div class="card-header noPad border-0 noBk w100 text-center" id="headingThree">
                <h5 class="mb-0 w100 d-flex justify-content-center">
                    <button class="shop-menu-btn collapsed w80 monserrat d-flex justify-content-end" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="col-6 text-center">MENÚ</span> <i class="fas fa-sort-down col-4 d-flex justify-content-end"></i>
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">

                    <ul class="list-group list-group-flush shop-links">
                        <li class="list-group-item shop-bk"><a href="shopMiCuenta.php" class="grey shop-link-active">Mi cuenta</a></li>
                        <li class="list-group-item shop-bk"><a href="shopEditarCuenta.php" class="grey">Editar cuenta</a></li>
                        <li class="list-group-item shop-bk"><a href="shopMisDirecciones.php" class="grey">Mis direcciones</a></li>
                        <li class="list-group-item shop-bk"><a href="shopCompras.php" class="grey">Mis compras</a></li>
                        <li class="list-group-item shop-bk"><a href="shopMisFavoritos.php" class="grey">Mis favoritos</a></li>
                        <li class="list-group-item shop-bk"><a href="shopNewsletter.php" class="grey">Newsletter</a></li>
                    <li class="list-group-item shop-bk"><a href="{{route('/logout')}}" class="grey">Cerrar sesion</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- SHOP MENU DESKTOP -->

<div class="d-none d-md-block col-md-3 shop-bk">

    <ul class="list-group list-group-flush shop-links shop-links-desk">
        <li class="list-group-item border-0 p-1 noBk"><a href="shopMiCuenta.php" class="grey shop-link-active">Mi cuenta</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="shopEditarCuenta.php" class="grey">Editar cuenta</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="shopMisDirecciones.php" class="grey">Mis direcciones</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="shopCompras.php" class="grey">Mis compras</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="shopMisFavoritos.php" class="grey">Mis favoritos</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="shopNewsletter.php" class="grey">Newsletter</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="../index.php" class="grey">Cerrar sesion</a></li>
    </ul>

</div>