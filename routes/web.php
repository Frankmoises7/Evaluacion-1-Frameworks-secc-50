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
Route::get('/list', 'App\Http\Controllers\ArticulosDeLibreriaController@verlista');
Route::get('/editList', 'App\Http\Controllers\ArticulosDeLibreriaController@editList');
Route::get('/assignItem', 'App\Http\Controllers\ArticulosDeLibreriaController@assignIt');
Route::get('/newItem', 'App\Http\Controllers\ArticulosDeLibreriaController@newIt');
Route::get('/newOffice', 'App\Http\Controllers\ArticulosDeLibreriaController@newOf');

Route::post('/listGuardar', 'App\Http\Controllers\ArticulosDeLibreriaController@guardar');
Route::post('/guardarIt', 'App\Http\Controllers\ArticulosDeLibreriaController@guardarItem');
Route::post('/guardarOf', 'App\Http\Controllers\ArticulosDeLibreriaController@guardarOffice');

//Para mostrar la vista DELETE (se modificara el metodo en proximas actualizaciones)
Route::get('/delete', 'App\Http\Controllers\ArticulosDeLibreriaController@verdelete');
