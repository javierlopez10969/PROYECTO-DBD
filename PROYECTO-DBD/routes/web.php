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

//Rutas de FeriantesFavoritos
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