<!-- FOOTER MENU RESPONSIVE -->
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

                    <ul class="list-group list-group-flush shop-links shop-bk">
                        <li class="list-group-item noBk"><a href="/info/cambios" class="grey {{Request::is('info/cambios') ? 'shop-link-active' : ''}}">CAMBIOS Y DEVOLUCIONES</a></li>
                        <li class="list-group-item noBk"><a href="/info/politica" class="grey {{Request::is('info/politica') ? 'shop-link-active' : ''}}">POLÍTICA DE GARANTÍA</a></li>
                        <li class="list-group-item noBk"><a href="/info/envio" class="grey {{Request::is('info/envio') ? 'shop-link-active' : ''}}">TIEMPO Y COSTO DE ENVÍO</a></li>
                        <li class="list-group-item noBk"><a href="/info/opciones" class="grey {{Request::is('info/opciones') ? 'shop-link-active' : ''}}">FORMAS DE PAGO</a></li>
                        <li class="list-group-item noBk"><a href="/info/cuidado" class="grey {{Request::is('info/cuidado') ? 'shop-link-active' : ''}}">CUIDADO DEL CALZADO</a></li>
                        {{-- <li class="list-group-item noBk"><a href="/info/faq" class="grey {{Request::is('info/faq') ? 'shop-link-active' : ''}}">¿NECESITAS AYUDA?</a></li> --}}
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER MENU DESKTOP -->

<div class="d-none d-md-block col-md-3 shop-bk">

    <ul class="list-group list-group-flush shop-links shop-links-desk">
        <li class="list-group-item border-0 p-1 noBk"><a href="/info/cambios" class="grey {{Request::is('info/cambios') ? 'shop-link-active' : ''}}">CAMBIOS Y DEVOLUCIONES</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="/info/politica" class="grey {{Request::is('info/politica') ? 'shop-link-active' : ''}}">POLÍTICA DE GARANTÍA</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="/info/envio" class="grey {{Request::is('info/envio') ? 'shop-link-active' : ''}}">TIEMPO Y COSTO DE ENVÍO</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="/info/opciones" class="grey {{Request::is('info/opciones') ? 'shop-link-active' : ''}}">FORMAS DE PAGO</a></li>
        <li class="list-group-item border-0 p-1 noBk"><a href="/info/cuidado" class="grey {{Request::is('info/cuidado') ? 'shop-link-active' : ''}}">CUIDADO DEL CALZADO</a></li>
        {{-- <li class="list-group-item border-0 p-1 noBk"><a href="/info/faq" class="grey {{Request::is('info/faq') ? 'shop-link-active' : ''}}">¿NECESITAS AYUDA?</a></li> --}}
    </ul>

</div>