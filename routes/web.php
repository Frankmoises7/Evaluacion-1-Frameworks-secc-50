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
Route::get('/editarLista', 'App\Http\Controllers\ArticulosDeLibreriaController@editarLista');
Route::get('/asignarArticulo', 'App\Http\Controllers\ArticulosDeLibreriaController@asignarAr');
Route::get('/nuevoArticulo', 'App\Http\Controllers\ArticulosDeLibreriaController@nuevoAr');
Route::get('/nuevaSucursal', 'App\Http\Controllers\ArticulosDeLibreriaController@nuevaSu');

Route::post('/listGuardar', 'App\Http\Controllers\ArticulosDeLibreriaController@guardar');
Route::post('/guardarItem', 'App\Http\Controllers\ArticulosDeLibreriaController@guardarItem');
Route::post('/guardarOf', 'App\Http\Controllers\ArticulosDeLibreriaController@guardarOffice');

//Para mostrar la vista DELETE (se modificara el metodo en proximas actualizaciones)
Route::get('/borrar', 'App\Http\Controllers\ArticulosDeLibreriaController@verborrar');
