<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FavoritesController;

Auth::routes();

////// RUTAS FRONTEND /////
Route::get('/',function(){return view('home');});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/history', function(){return view('history');});
Route::get('/contact', function(){return view('contacto');});
Route::post('/contact', 'BackendController@create_contact');
Route::get('/catalog', 'HomeController@catalog');
Route::get('/catalog/shoe/{shoeId}', 'HomeController@productDetail');
///feedback

///RUTAS DE REDIRECCION TRAS COMPRAS
Route::get('/backend/mp/success','MercadoPagoController@success')->name('mp.success');
Route::get('/backend/mp/fail', 'MercadoPagoController@fail')->name('mp.fail');
Route::get('/backend/mp/pending', 'MercadoPagoController@pending')->name('mp.pending');

////// RUTAS ESTATICAS FOOTER /////
Route::get('/info/cambios', function(){return view('footer-cambios');});
Route::get('/info/politica', function(){return view('footer-politica');});
Route::get('/info/envio', function(){return view('footer-envios');});
Route::get('/info/opciones', function(){return view('footer-opciones');});
Route::get('/info/cuidado', function(){return view('footer-cuidados');});
Route::get('/info/faq', function(){return view('footer-faq');});

////// RUTAS SHOP /////
Route::get('/shop/myaccount', 'ProfileController@showAccount')->middleware('auth');
Route::get('/shop/myaccount/edit', 'ProfileController@editAccount')->middleware('auth');
Route::post('/shop/myaccount/edit', 'ProfileController@updateAccount')->middleware('auth');
Route::get('/shop/myaccount/addresses', 'ProfileController@addresses')->middleware('auth');
Route::get('/shop/myaccount/addresses/new', 'ProfileController@addressnew')->middleware('auth');
Route::get('/shop/myaccount/purchases', 'ProfileController@purchases')->middleware('auth');
Route::get('/shop/myaccount/favorites', 'ProfileController@favorites')->middleware('auth');
Route::get('/shop/myaccount/newsletter', 'ProfileController@newsletter')->middleware('auth');
Route::get('/favorites/change/{shoeId}', 'FavoritesController@changeState');
Route::get('/favorites/change2/{shoeId}', 'FavoritesController@changeState2');
Route::post('/shop/shopcar/add', 'ShopcarController@add2');
Route::get('/shop/shopcar', 'ProfileController@shopcar')->middleware('auth');
Route::post('/shop/shopcar/checkout', 'ShopcarController@forcheckout')->middleware('auth');
Route::post('/shop/discount', 'DiscountController@check')->middleware('auth');
Route::get('/shop/discount/{discount}', 'DiscountController@check2')->middleware('auth');
Route::post('/shop/confirm', 'ShopcarController@mercadopago')->middleware("auth");
Route::get('/feedback', function(){return view('feedback');})->middleware("auth");
Route::post('/feedback', 'FeedbackController@store')->middleware("auth");

////// RUTAS BACKTEND /////
Route::get('/backend', function(){
    return view('backend.backendHome');
})->middleware('auth', 'role:admin');

Route::get('/backend/pedidos', 'BackendController@pedidos')->middleware('auth', 'role:admin');
Route::get('/backend/stock/{place_id}', 'StockController@show')->middleware('auth', 'role:admin');
Route::get('/backend/productos', 'BackendController@productos')->middleware('auth', 'role:admin');
Route::get('/backend/ventas', 'BackendController@ventas')->middleware('auth', 'role:admin');
Route::get('/backend/reporte', 'BackendController@reporte')->middleware('auth', 'role:admin');
Route::get('/backend/misGustos', 'BackendController@misGustos')->middleware('auth', 'role:admin');
Route::get('/backend/usuarios', 'BackendController@usuarios')->middleware('auth', 'role:admin');

Route::get('/backend/ventaMes/{mes}', 'BackendController@ventaMes');
Route::get('/backend/editarProducto/{id}', 'BackendController@editarProducto')->middleware('auth', 'role:admin');
Route::get('/backend/editarUsuario/{id}', 'BackendController@editarUsuario')->middleware('auth', 'role:admin');
Route::get('/backend/nuevoProducto', 'BackendController@nuevoProducto')->middleware('auth', 'role:admin');
Route::get('/backend/verProducto/{id}', 'BackendController@verProducto')->middleware('auth', 'role:admin');

Route::post('/backend/grabarProducto', 'ShoeController@store')->middleware('auth', 'role:admin');
Route::post('/backend/updateProducto', 'ShoeController@actualizar')->middleware('auth', 'role:admin');

Route::get('/backend/editarProductPreview/{id}', 'BackendController@editarPreview')->middleware('auth', 'role:admin');
Route::post('/backend/editarProductPreview/{id}', 'ShoeController@editarProductPreview')->middleware('auth', 'role:admin');

Route::get('/backend/subirImagenes/{id}', 'BackendController@subirImagenes')->middleware('auth', 'role:admin');
Route::post('/backend/cargaImgsProducts/{id}', 'ShoeController@cargaImgsProducts')->middleware('auth', 'role:admin');
Route::get('/backend/shoeimg/delete/{idimg}/{idShoe}', 'Shoe_imgController@eliminar')->middleware('auth', 'role:admin');
Route::post('/backend/guardarColor/{id}', 'ShoeController@guardarColor')->middleware('auth', 'role:admin');

Route::post('/backend/guardarStock', 'StockController@guardarStock')->middleware('auth', 'role:admin');
Route::post('/backend/borrarStock', 'StockController@borrarStock')->middleware('auth', 'role:admin');
Route::post('/backend/borrarColor/{shoe_id}/{id}', 'BackendController@borrarcolor')->middleware('auth', 'role:admin');

Route::get('/backend/shopcar/add/{stock_id}', 'ShopcarController@add')->middleware('auth');
Route::get('/backend/shopcar/list/', 'ShopcarController@list')->middleware('auth', 'role:admin');
Route::get('/shopcar/remove/{shopcar_id}/{stock_id}', 'ShopcarController@removeStock')->middleware('auth');
Route::get('/backend/address/new/', 'AddressController@newBackendAddress')->middleware('auth', 'role:admin');
Route::post('/address/{from}/new/', 'AddressController@newAddress')->middleware('auth');

Route::get('/backend/discount', 'BackendController@discounts')->middleware('auth');
Route::post('/backend/discount/create', 'DiscountController@create')->middleware('auth');
Route::post('/backend/discount/destroy/', 'DiscountController@destroy')->middleware('auth');
Route::get('/backend/discount/onoff/{discountId}/{active}', 'DiscountController@onoff')->middleware('auth');
//Route::api('/carrito/api/{user_id}', 'ShopcartController@apiCarrito');
Route::post('/backend/newsletter', 'NewsletterController@add');
Route::get('backend/newsletter', 'NewsletterController@index');
Route::delete('backend/newsletter', 'NewsletterController@destroy');

Route::get('backend/contact', 'BackendController@show_contacts');


//STOCK
Route::get('/shop/stock/finalcheck/{idShopcar}', 'StockController@finalCheck')->middleware('auth');