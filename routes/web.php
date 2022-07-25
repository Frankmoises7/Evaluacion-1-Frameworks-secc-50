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

Route::get('/editList', function () {
   return view('editList');
});

//Route::get('/hola', function () {
//    return view('hola');
//});

Route::get('/articulos', function() {
    return view('list');
});

Route::get('/list', 'App\Http\Controllers\ArticulosDeLibreriaController@verlista');
Route::post('/listGuardar', 'App\Http\Controllers\ArticulosDeLibreriaController@guardar');
Route::get('/delete', 'App\Http\Controllers\ArticulosDeLibreriaController@verdelete');
