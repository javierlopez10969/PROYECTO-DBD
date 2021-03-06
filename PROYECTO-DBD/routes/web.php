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
//General
Route::get('/', function () {
    return view('layouts.main');
})->name('home');

Route::get('/', function () {
    return view('pages.carrousel');
})->name('carousel');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

//Usuario
Route::get('/perfil_datosPersonales', function () {
    return view('perfil_datosPersonales');
})->name('perfil');

Route::get('/perfil_modificarContraseña', function () {
    return view('perfil_modificarContraseña');
});

Route::get('/perfil_cuentaBancaria', function () {
    return view('perfil_cuentaBancaria');
});
Route::get('/perfil_datosActuales', function () {
    return view('perfil_datosActuales');
});

Route::get('/despacho', function () {
    return view('despacho');
});

Route::get('/confirmar_pagoCB', function () {
    return view('confirmar_pagoCB');
});

Route::get('/confirmar_pagoTC', function () {
    return view('confirmar_pagoTC');
});

Route::get('/confirmar_pagoTD', function () {
    return view('confirmar_pagoTD');
});


Route::get('/bienvenida', function () {
    return view('pages.bienvenida');
})->name('bienvenida');;

Route::get('/nuevo_producto', function () {
    return view('productos.crearproducto');
})->name('nuevo_producto');;

Route::get('/mitienda', function () {
    return view('productos.misproductos');
})->name('mitienda');;


Route::get('/productocategoria','ProductoController@showCategoria');
Route::get('/feriacomuna','FeriaController@showComuna');

//[Sebastian]La ruta para obtener los datos personales TIENE que ser por ID, 
//lo mismo para hacer UPDATE sino aparece todos y no se puede editar 1 a 1
//Route::get('/perfil_datosActuales/{id}','DatoPersonalController@showDatos');
//Route::get('/perfil_datosBanco/{id}','CuentaBancariaController@showDatos');

Route::post('/productonuevo','ProductoController@storeProducto')->name('storeProducto');
/*
Route::get('/productonew', function () {
    return view('pagina_agregar_producto');
});
*/

Route::get('/feriantefav/{id}', 'Feriante_FeriantesFavoritoController@showFerianteFavorito');
Route::get('/feriafav/{id}', 'Feria_FeriaFavoritoController@showFeriaFavorito');


Route::get('/addferiafav/{id}', 'Feria_FeriaFavoritoController@showFeria')->name('feriaAdd');
Route::post('/feriafavoritanueva','Feria_FeriaFavoritoController@storeFeria')->name('storeFeria');

Route::get('/addferiantefav/{id}', 'FerianteController@showFeriante')->name('ferianteAdd');
Route::post('/feriantefavoritanueva','Feriante_FeriantesFavoritoController@storeFeriante')->name('storeFeriante');

Route::get('/cart', 'CartController@index');

Route::post('/agregarCarrito', 'CartController@storeProducto');
//Route::get('/carrito', 'CartController@showCarrito')->name('carrito');


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

#region
Route::get('/region','RegionController@index');
Route::get('/region/{id}','RegionController@show');
Route::post('/region/create','RegionController@store');
Route::put('/region/update/{id}','RegionController@update');
Route::delete('/region/delete/{id}','RegionController@destroy');

#comuna
Route::get('/comuna','ComunaController@index');
Route::get('/comuna/{id}','ComunaController@show');
Route::post('/comuna/create','ComunaController@store');
Route::put('/comuna/update/{id}','ComunaController@update');
Route::delete('/comuna/delete/{id}','ComunaController@destroy');

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
Route::post('/cliente/create','ClienteController@store')->name('ClienteStore');
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
Route::post('/dato_personal/create','DatoPersonalController@store')->name('DatoPersonalStore');
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

#feriante favorito
Route::get('/feriante_favorito','FeriantesFavoritoController@index');
Route::get('/feriante_favorito/{id}','FeriantesFavoritoController@show');
Route::post('/feriante_favorito/create','FeriantesFavoritoController@store');
Route::put('/feriante_favorito/update/{id}','FeriantesFavoritoController@update');
Route::delete('/feriante_favorito/delete/{id}','FeriantesFavoritoController@destroy');

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

#puesto de venta
Route::get('/puestoVenta','PuestoVentaController@index');
Route::get('/puestoVenta/{id}','PuestoVentaController@show');
Route::post('/puestoVenta/create','PuestoVentaController@store');
Route::put('/puestoVenta/update/{id}','PuestoVentaController@update');
Route::delete('/puestoVenta/delete/{id}','PuestoVentaController@destroy');

#unidad
Route::get('/unidad','UnidadController@index');
Route::get('/unidad/{id}','UnidadController@show');
Route::post('/unidad/create','UnidadController@store');
Route::put('/unidad/update/{id}','UnidadController@update');
Route::delete('/unidad/delete/{id}','UnidadController@destroy');

//TABLAS INTERMEDIAS

#feria_puestosDeVenta
Route::get('/feria_PuestoDeVenta','Feria_PuestoDeVentaController@index');
Route::get('/feria_PuestoDeVenta/{id}','Feria_PuestoDeVentaController@show');
Route::post('/feria_PuestoDeVenta/create','Feria_PuestoDeVentaController@store');
Route::put('/feria_PuestoDeVenta/update/{id}','Feria_PuestoDeVentaController@update');
Route::delete('/feria_PuestoDeVenta/delete/{id}','Feria_PuestoDeVentaController@destroy');

#producto_puestosDeVenta
Route::get('/producto_puestodeventa','Producto_PuestoDeVentaController@index');
Route::get('/producto_puestodeventa/{id}','Producto_PuestoDeVentaController@show');
Route::post('/producto_puestodeventa/create','Producto_PuestoDeVentaController@store');
Route::put('/producto_puestodeventa/update/{id}','Producto_PuestoDeVentaController@update');
Route::delete('/producto_puestodeventa/delete/{id}','Producto_PuestoDeVentaController@destroy');

#feria_feriaFavorito
Route::get('/feria_feriafavorito','Feria_FeriaFavoritoController@index');
Route::get('/feria_feriafavorito/{id}','Feria_FeriaFavoritoController@show');
Route::post('/feria_feriafavorito/create','Feria_FeriaFavoritoController@store');
Route::put('/feria_feriafavorito/update/{id}','Feria_FeriaFavoritoController@update');
Route::delete('/feria_feriafavorito/delete/{id}','Feria_FeriaFavoritoController@destroy');

#feriante_ferianteFavorito
Route::get('/feriante_feriantesfavorito','Feriante_FeriantesFavoritoController@index');
Route::get('/feriante_feriantesfavorito/{id}','Feriante_FeriantesFavoritoController@show');
Route::post('/feriante_feriantesfavorito/create','Feriante_FeriantesFavoritoController@store');
Route::put('/feriante_feriantesfavorito/update/{id}','Feriante_FeriantesFavoritoController@update');
Route::delete('/feriante_feriantesfavorito/delete/{id}','Feriante_FeriantesFavoritoController@destroy');

#pago_ordenDePago
Route::get('/pago_OrdenDePago','Pago_OrdenDePagoController@index');
Route::get('/pago_OrdenDePago/{id}','Pago_OrdenDePagoController@show');
Route::post('/pago_OrdenDePago/create','Pago_OrdenDePagoController@store');
Route::put('/pago_OrdenDePago/update/{id}','Pago_OrdenDePagoController@update');
Route::delete('/pago_OrdenDePago/delete/{id}','Pago_OrdenDePagoController@destroy');

#producto_OrdenDeCompra
Route::get('/producto_ordenDeCompra','Producto_OrdenDeCompraController@index');
Route::get('/producto_ordenDeCompra/{id}','Producto_OrdenDeCompraController@show');
Route::post('/producto_ordenDeCompra/create','Producto_OrdenDeCompraController@store');
Route::put('/producto_ordenDeCompra/update/{id}','Producto_OrdenDeCompraController@update');
Route::delete('/producto_ordenDeCompra/delete/{id}','Producto_OrdenDeCompraController@destroy');


##TESTEANDO

#cliente
Route::get('/user','AuthController@index');
Route::get('/user/{id}','AuthController@show');

Route::put('/user/update/{id}','AuthController@update')->name('user/update');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');