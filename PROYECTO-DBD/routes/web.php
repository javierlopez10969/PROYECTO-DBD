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

Route::get('/ferias','FeriaController@index');
Route::get('/ferias/{id}','FeriaController@show');
Route::post('/ferias/create','FeriaController@store');
Route::put('/ferias/update/{id}','FeriaController@update');
Route::delete('/ferias/delete/{id}','FeriaController@destroy');

Route::get('/feriantes','FerianteController@index');
Route::get('/feriantes/{id}','FerianteController@show');
Route::post('/feriantes/create','FerianteController@store');
Route::put('/feriantes/update/{id}','FerianteController@update');
Route::delete('/feriantes/delete/{id}','FerianteController@destroy');

Route::get('/regiones','RegionController@index');
Route::get('/regiones/{id}','RegionController@show');
Route::post('/regiones/create','RegionController@store');
Route::put('/regiones/update/{id}','RegionController@update');
Route::delete('/regiones/delete/{id}','RegionController@destroy');

Route::get('/comunas','ComunaController@index');
Route::get('/comunas/{id}','ComunaController@show');
Route::post('/comunas/create','ComunaController@store');
Route::put('/comunas/update/{id}','ComunaController@update');
Route::delete('/comunas/delete/{id}','ComunaController@destroy');

Route::get('/feria_puestosDeVenta','Feria_PuestoDeVenta@index');
Route::get('/feria_puestosDeVenta/{id}','Feria_PuestoDeVenta@show');
Route::post('/feria_puestosDeVenta/create','Feria_PuestoDeVenta@store');
Route::put('/feria_puestosDeVenta/update/{id}','Feria_PuestoDeVenta@update');
Route::delete('/feria_puestosDeVenta/delete/{id}','Feria_PuestoDeVenta@destroy');

<<<<<<< HEAD
Route::get('/puestosDeVenta','PuestoVentaController@index');
Route::get('/puestosDeVenta/{id}','PuestoVentaController@show');
Route::post('/puestosDeVenta/create','PuestoVentaController@store');
Route::put('/puestosDeVenta/update/{id}','PuestoVentaController@update');
Route::delete('/puestosDeVenta/delete/{id}','PuestoVentaController@destroy');

Route::get('/categoria','CategoriaController@index');
Route::get('/categoria/{id}','CategoriaController@show');
Route::post('/categoria/create','CategoriaController@store');
Route::put('/categoria/update/{id}','CategoriaController@update');
Route::delete('/categoria/delete/{id}','CategoriaController@destroy');

Route::get('/producto','ProductoController@index');
Route::get('/producto/{id}','ProductoController@show');
Route::post('/producto/create','ProductoController@store');
Route::put('/producto/update/{id}','ProductoController@update');
Route::delete('/producto/delete/{id}','ProductoController@destroy');

Route::get('/producto_puestosDeVenta','Producto_PuestoDeVentaController@index');
Route::get('/producto_puestosDeVenta/{id}','Producto_PuestoDeVentaController@show');
=======
//RUTAS DE CONTROLLERS DE CARLOS
//Rutas de FeriantesFavoritos
Route::get('/ferfav','FeriantesFavorito@index');
Route::get('/ferfav/{id}','FeriantesFavorito@show');
Route::post('/ferfav/create','FeriantesFavorito@store');
Route::put('/ferfav/update/{id}','FeriantesFavorito@update');
Route::delete('/ferfav/delete/{id}','FeriantesFavorito@destroy');

//Rutas de Feria_FeriaFavorito
Route::get('/fer_ferfav','Feria_FeriaFavorito@index');
Route::get('/fer_ferfav/{id}','Feria_FeriaFavorito@show');
Route::post('/fer_ferfav/create','Feria_FeriaFavorito@store');
Route::put('/fer_ferfav/update/{id}','Feria_FeriaFavorito@update');
Route::delete('/fer_ferfav/delete/{id}','Feria_FeriaFavorito@destroy');

//Rutas de Feriante_FeriantesFavoritos
Route::get('/fer_ferifav','Feriante_FeriantesFavorito@index');
Route::get('/fer_ferifav/{id}','Feriante_FeriantesFavorito@show');
Route::post('/fer_ferifav/create','Feriante_FeriantesFavorito@store');
Route::put('/fer_ferifav/update/{id}','Feriante_FeriantesFavorito@update');
Route::delete('/fer_ferifav/delete/{id}','Feriante_FeriantesFavorito@destroy');

//Rutas de FeriaFavoritos
Route::get('/ferifav','FeriaFavorito@index');
Route::get('/ferifav/{id}','FeriaFavorito@show');
Route::post('/ferifav/create','FeriaFavorito@store');
Route::put('/ferifav/update/{id}','FeriaFavorito@update');
Route::delete('/ferifav/delete/{id}','FeriaFavorito@destroy');

//Rutas de OrdeDeDespacho
Route::get('/OrdenDes','OrdenDeDespacho@index');
Route::get('/OrdenDes/{id}','OrdenDeDespacho@show');
Route::post('/OrdenDes/create','OrdenDeDespacho@store');
Route::put('/OrdenDes/update/{id}','OrdenDeDespacho@update');
Route::delete('/OrdenDes/delete/{id}','OrdenDeDespacho@destroy');

//RUTAS DE CONTROLLERS DE DAVID
//Rutas de Cliente
Route::get('/cliente','ClienteController@index');
Route::get('/cliente/{id}','ClienteController@show');
Route::post('/cliente/create','ClienteController@store');
Route::put('/cliente/update/{id}','ClienteController@update');
Route::delete('/cliente/delete/{id}','ClienteController@destroy');

//Rutas de Comprobante
Route::get('/comprobante','ComprobanteController@index');
Route::get('/comprobante/{id}','ComprobanteController@show');
Route::post('/comprobante/create','ComprobanteController@store');
Route::put('/comprobante/update/{id}','ComprobanteController@update');
Route::delete('/comprobante/delete/{id}','ComprobanteController@destroy');

//Rutas de DatoPersonal
Route::get('/datos_personales','DatoPersonalController@index');
Route::get('/datos_personales/{id}','DatoPersonalController@show');
Route::post('/datos_personales/create','DatoPersonalController@store');
Route::put('/datos_personales/update/{id}','DatoPersonalController@update');
Route::delete('/datos_personales/delete/{id}','DatoPersonalController@destroy');

//Rutas de DireccionDespacho
Route::get('/dir_desp','DireccionDespachoController@index');
Route::get('/dir_desp/{id}','DireccionDespachoController@show');
Route::post('/dir_desp/create','DireccionDespachoController@store');
Route::put('/dir_desp/update/{id}','DireccionDespachoController@update');
Route::delete('/dir_desp/delete/{id}','DireccionDespachoController@destroy');

//Rutas de CuentaBancaria
Route::get('/cuenta_banc','CuentaBancariaController@index');
Route::get('/cuenta_banc/{id}','CuentaBancariaController@show');
Route::post('/cuenta_banc/create','CuentaBancariaController@store');
Route::put('/cuenta_banc/update/{id}','CuentaBancariaController@update');
Route::delete('/cuenta_banc/delete/{id}','CuentaBancariaController@destroy');

//RUTAS DE CONTROLLERS DE JAVIER
//Orden de Pago
Route::get('/orden_de_pago','OrdenDePagoController@index');
Route::get('/orden_de_pago/{id}','OrdenDePagoController@show');
Route::post('/orden_de_pago/create','OrdenDePagoController@store');
Route::put('/orden_de_pago/update/{id}','OrdenDePagoController@update');
Route::delete('/orden_de_pago/delete/{id}','OrdenDePagoController@destroy');

//Orden de compra
Route::get('/orden_de_compra','OrdenDeCompraController@index');
Route::get('/orden_de_compra/{id}','OrdenDeCompraController@show');
Route::post('/orden_de_compra/create','OrdenDeCompraController@store');
Route::put('/orden_de_compra/update/{id}','OrdenDeCompraController@update');
Route::delete('/orden_de_compra/delete/{id}','OrdenDeCompraController@destroy');

//Rutas de Pago
Route::get('/pago','PagoController@index');
Route::get('/pago/{id}','PagoController@show');
Route::post('/pago/create','PagoController@store');
Route::put('/pago/update/{id}','PagoController@update');
Route::delete('/pago/delete/{id}','PagoController@destroy');

//Rutas de Producto_OrdenDeCompraController
Route::get('/producto_ordenDeCompra','Producto_OrdenDeCompraController@index');
Route::get('/producto_ordenDeCompra/{id}','Producto_OrdenDeCompraController@show');
Route::post('/producto_ordenDeCompra/create','Producto_OrdenDeCompraController@store');
Route::put('/producto_ordenDeCompra/update/{id}','Producto_OrdenDeCompraController@update');
Route::delete('/producto_ordenDeCompra/delete/{id}','Producto_OrdenDeCompraController@destroy');

//Rutas de Pago_orden de pago
Route::get('/pago_ordenDePago','Pago_OrdenDePagoController@index');
Route::get('/pago_ordenDePago/{id}','Pago_OrdenDePagoController@show');
Route::post('/pago_ordenDePago/create','Pago_OrdenDePagoController@store');
Route::put('/pago_ordenDePago/update/{id}','Pago_OrdenDePagoController@update');
Route::delete('/pago_ordenDePago/delete/{id}','Pago_OrdenDePagoController@destroy');










>>>>>>> e456bfd4312f11d528b87e0cffa91fa843e3a6cb
