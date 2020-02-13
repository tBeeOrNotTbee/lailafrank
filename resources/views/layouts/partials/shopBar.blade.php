<!-- SHOP MENU RESPONSIVE -->
<div class="col-12 mt-4 mb-5 d-block d-md-none">
    <div id="accordion">
        <div class="card border-0">
            <div class="card-header noPad border-0 noBk w100 text-center" id="headingThree">
                <h5 class="mb-0 w100 d-flex justify-content-center">
                    <button class="shop-menu-btn collapsed w80 monserrat d-flex justify-content-end"
                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        <span class="col-6 text-center">MENÚ</span> <i
                            class="fas fa-sort-down col-4 d-flex justify-content-end"></i>
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">

                    <ul class="list-group list-group-flush shop-links">
                        <li class="list-group-item border-0 p-1 noBk"><a href="/shop/shopcar" class="grey {{Request::is('shop/shopcar') ? 'shop-link-active' : ''}}">Shopcar</a></li>
                        <li class="list-group-item shop-bk"><a href="/shop/myaccount" class="grey {{Request::is('shop/myaccount') ? 'shop-link-active' : ''}}">Mi
                                cuenta</a></li>
                        <li class="list-group-item shop-bk"><a href="/shop/myaccount/edit" class="grey {{Request::is('shop/myaccount/edit') ? 'shop-link-active' : ''}}">Editar
                                cuenta</a></li>
                        <li class="list-group-item shop-bk"><a href="/shop/myaccount/addresses" class="grey {{Request::is('shop/myaccount/addresses') ? 'shop-link-active' : ''}}">Mis
                                direcciones</a></li>
                        <li class="list-group-item shop-bk"><a href="/shop/myaccount/purchases" class="grey {{Request::is('shop/myaccount/purchases') ? 'shop-link-active' : ''}}">Mis compras</a></li>
                        <li class="list-group-item shop-bk"><a href="/shop/myaccount/favorites" class="grey {{Request::is('shop/myaccount/favorites') ? 'shop-link-active' : ''}}">Mis
                                favoritos</a></li>
                        <li class="list-group-item shop-bk"><a href="/shop/myaccount/newsletter" class="grey {{Request::is('shop/myaccount/newsletter') ? 'shop-link-active' : ''}}">Newsletter</a>
                        </li>
                        <li class="list-group-item shop-bk"><a class="grey" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Cerrar
                                sesion</a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>  
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- SHOP MENU DESKTOP -->

<div class="d-none d-md-block col-md-3 shop-bk">

    <ul class="list-group list-group-flush shop-links shop-links-desk">
        <li class="list-group-item border-0 p-1 noBk"><a href="/shop/shopcar" class="grey {{Request::is('shop/shopcar') ? 'shop-link-active' : ''}}">Shopcar</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="/shop/myaccount" class="grey {{Request::is('shop/myaccount') ? 'shop-link-active' : ''}}">Mi cuenta</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="/shop/myaccount/edit" class="grey {{Request::is('shop/myaccount/edit') ? 'shop-link-active' : ''}}">Editar cuenta</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="/shop/myaccount/addresses" class="grey {{Request::is('shop/myaccount/addresses') ? 'shop-link-active' : ''}}">Mis direcciones</a>
        </li>
        <li class="list-group-item border-0 p-1 noBk"><a href="/shop/myaccount/purchases" class="grey {{Request::is('shop/myaccount/purchases') ? 'shop-link-active' : ''}}">Mis compras</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="/shop/myaccount/favorites" class="grey {{Request::is('shop/myaccount/favorites') ? 'shop-link-active' : ''}}">Mis favoritos</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="/shop/myaccount/newsletter" class="grey {{Request::is('shop/myaccount/newsletter') ? 'shop-link-active' : ''}}">Newsletter</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a class="grey" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar sesion</a></li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ul>

</div>