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
