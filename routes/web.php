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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/backend', function(){
    return view('backendhome');
});

Route::get('/','HomeController@index');

//RUTAS BACKEND
Route::get('/backend/pedidos', 'BackendController@pedidos')->middleware('auth', 'role:admin');
Route::get('/backend/stock', 'BackendController@stock')->middleware('auth', 'role:admin');
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
Route::api('/carrito/api/{user_id}', 'ShopcartController@apiCarrito');