<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

#feria
Route::get('/feria','FeriaController@index');
Route::get('/feria/{id}','FeriaController@show');
Route::post('/feria/create','FeriaController@store');
Route::put('/feria/update/{id}','FeriaController@update');
Route::delete('/feria/delete/{id}','FeriaController@destroy');

#feriante
Route::get('/feriante','FerianteController@index');
Route::get('/feriante/{id}','FerianteController@show');
Route::post('/feriante/create','FerianteController@store');
Route::put('/feriante/update/{id}','FerianteController@update');
Route::delete('/feriante/delete/{id}','FerianteController@destroy');

#regiones
Route::get('/regiones','RegionController@index');
Route::get('/regiones/{id}','RegionController@show');
Route::post('/regiones/create','RegionController@store');
Route::put('/regiones/update/{id}','RegionController@update');
Route::delete('/regiones/delete/{id}','RegionController@destroy');

#comuna
Route::get('/comuna','ComunaController@index');
Route::get('/comuna/{id}','ComunaController@show');
Route::post('/comuna/create','ComunaController@store');
Route::put('/comuna/update/{id}','ComunaController@update');
Route::delete('/comuna/delete/{id}','ComunaController@destroy');

#feria_puestosDeVenta
Route::get('/feria_puestosDeVenta','Feria_PuestoDeVenta@index');
Route::get('/feria_puestosDeVenta/{id}','Feria_PuestoDeVenta@show');
Route::post('/feria_puestosDeVenta/create','Feria_PuestoDeVenta@store');
Route::put('/feria_puestosDeVenta/update/{id}','Feria_PuestoDeVenta@update');
Route::delete('/feria_puestosDeVenta/delete/{id}','Feria_PuestoDeVenta@destroy');

#puestosDeVenta
Route::get('/puestosDeVenta','PuestoVentaController@index');
Route::get('/puestosDeVenta/{id}','PuestoVentaController@show');
Route::post('/puestosDeVenta/create','PuestoVentaController@store');
Route::put('/puestosDeVenta/update/{id}','PuestoVentaController@update');
Route::delete('/puestosDeVenta/delete/{id}','PuestoVentaController@destroy');

#categoria
Route::get('/categoria','CategoriaController@index');
Route::get('/categoria/{id}','CategoriaController@show');
Route::post('/categoria/create','CategoriaController@store');
Route::put('/categoria/update/{id}','CategoriaController@update');
Route::delete('/categoria/delete/{id}','CategoriaController@destroy');

#producto
Route::get('/producto','ProductoController@index');
Route::get('/producto/{id}','ProductoController@show');
Route::post('/producto/create','ProductoController@store');
Route::put('/producto/update/{id}','ProductoController@update');
Route::delete('/producto/delete/{id}','ProductoController@destroy');

#cliente
Route::get('/cliente','ClienteController@index');
Route::get('/cliente/{id}','ClienteController@show');
Route::post('/cliente/create','ClienteController@store');
Route::put('/cliente/update/{id}','ClienteController@update');
Route::delete('/cliente/delete/{id}','ClienteController@destroy');

#comprobante
Route::get('/comprobante','ComprobanteController@index');
Route::get('/comprobante/{id}','ComprobanteController@show');
Route::post('/comprobante/create','ComprobanteController@store');
Route::put('/comprobante/update/{id}','ComprobanteController@update');
Route::delete('/comprobante/delete/{id}','ComprobanteController@destroy');

#cuentaBancaria
Route::get('/cuenta_bancarias','CuentaBancariaController@index');
Route::get('/cuenta_bancarias/{id}','CuentaBancariaController@show');
Route::post('/cuenta_bancarias/create','CuentaBancariaController@store');
Route::put('/cuenta_bancarias/update/{id}','CuentaBancariaController@update');
Route::delete('/cuenta_bancarias/delete/{id}','CuentaBancariaController@destroy');

#dato personal
Route::get('/dato_personal','DatoPersonalController@index');
Route::get('/dato_personal/{id}','DatoPersonalController@show');
Route::post('/dato_personal/create','DatoPersonalController@store');
Route::put('/dato_personal/update/{id}','DatoPersonalController@update');
Route::delete('/dato_personal/delete/{id}','DatoPersonalController@destroy');

#direccion_despacho
Route::get('/direccion_despacho','DireccionDespachoController@index');
Route::get('/direccion_despacho/{id}','DireccionDespachoController@show');
Route::post('/direccion_despacho/create','DireccionDespachoController@store');
Route::put('/direccion_despacho/update/{id}','DireccionDespachoController@update');
Route::delete('/direccion_despacho/delete/{id}','DireccionDespachoController@destroy');

#feria favorito
Route::get('/feria_favorito','FeriaFavoritoController@index');
Route::get('/feria_favorito/{id}','FeriaFavoritoController@show');
Route::post('/feria_favorito/create','FeriaFavoritoController@store');
Route::put('/feria_favorito/update/{id}','FeriaFavoritoController@update');
Route::delete('/feria_favorito/delete/{id}','FeriaFavoritoController@destroy');

#orden de compra
Route::get('/ordenDeCompra','OrdenDeCompraController@index');
Route::get('/ordenDeCompra/{id}','OrdenDeCompraController@show');
Route::post('/ordenDeCompra/create','OrdenDeCompraController@store');
Route::put('/ordenDeCompra/update/{id}','OrdenDeCompraController@update');
Route::delete('/ordenDeCompra/delete/{id}','OrdenDeCompraController@destroy');

#orden de despacho
Route::get('/OrdenDespacho','OrdenDeDespachoController@index');
Route::get('/OrdenDespacho/{id}','OrdenDeDespachoController@show');
Route::post('/OrdenDespacho/create','OrdenDeDespachoController@store');
Route::put('/OrdenDespacho/update/{id}','OrdenDeDespachoController@update');
Route::delete('/OrdenDespacho/delete/{id}','OrdenDeDespachoController@destroy');

#orden de pago
Route::get('/ordenDePago','OrdenDePagoController@index');
Route::get('/ordenDePago/{id}','OrdenDePagoController@show');
Route::post('/ordenDePago/create','OrdenDePagoController@store');
Route::put('/ordenDePago/update/{id}','OrdenDePagoController@update');
Route::delete('/ordenDePago/delete/{id}','OrdenDePagoController@destroy');

#pago
Route::get('/pago','PagoController@index');
Route::get('/pago/{id}','PagoController@show');
Route::post('/pago/create','PagoController@store');
Route::put('/pago/update/{id}','PagoController@update');
Route::delete('/pago/delete/{id}','PagoController@destroy');

/*
Route::get('/producto_puestosDeVenta','Producto_PuestoDeVentaController@index');
Route::get('/producto_puestosDeVenta/{id}','Producto_PuestoDeVentaController@show');
*/
