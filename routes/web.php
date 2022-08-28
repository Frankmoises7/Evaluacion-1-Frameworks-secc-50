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

Route::get('/', 'App\Http\Controllers\ArticulosDeLibreriaController@welcome');
Route::get('/lista', 'App\Http\Controllers\ArticulosDeLibreriaController@verlista');
Route::get('/editarLista/{id}', 'App\Http\Controllers\ArticulosDeLibreriaController@editarLista');
Route::get('/asignarArticulo', 'App\Http\Controllers\ArticulosController@asignarAr');
Route::get('/nuevoArticulo', 'App\Http\Controllers\ArticulosController@nuevoAr');
Route::get('/nuevaSucursal', 'App\Http\Controllers\SucursalesController@nuevaSu');
Route::get('/listaSucursal', 'App\Http\Controllers\SucursalesController@versucursal');
Route::get('/listaAsignacionArticulo', 'App\Http\Controllers\ArticulosController@verasignacion');
Route::get('miniatura/{filename}', 'App\Http\Controllers\ArticulosController@getImagen');

Route::post('/guardarAsignacion', 'App\Http\Controllers\ArticulosController@guardarAsignacion');
Route::post('/guardarArticulo', 'App\Http\Controllers\ArticulosController@guardarArticulo');
Route::post('/guardarSu', 'App\Http\Controllers\SucursalesController@guardarSucursal');

Route::post('/buscarArt', 'App\Http\Controllers\ArticulosController@verbusqueda');

//Actualizar Articulos y sucursales
Route::get('/editArt/{id}', 'App\Http\Controllers\ArticulosController@update');
Route::get('/editSuc/{id}', 'App\Http\Controllers\SucursalesController@update');

//Para mostrar la vista DELETE (se modificara el metodo en proximas actualizaciones)
Route::get('/deleteArt/{id}', 'App\Http\Controllers\ArticulosController@delete');
Route::get('/borrar', 'App\Http\Controllers\ArticulosDeLibreriaController@verborrar');

//Eliminar sucursales
Route::get('/deleteSuc/{id}', 'App\Http\Controllers\SucursalesController@delete');