<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosDeLibreriaController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    
    public function verlista(){
        return view('list');
    }

    public function verdelete(){
        return view('delete');
    }

    public function editList() {
        return view('editList');
    }

    public function assignit() {
        return view('assignItem');
    }

    public function newit() {
        return view('newItem');
    }

    public function guardar(Request $request) {
        return "Sucursal: ". $request->input("sucursal"). ", Nombre del articulo: ". $request->input("articulo"). ", Cantidad del articulo: ". $request->input("cantidad"). ", Precio Unidad: ". $request->input("preciosucursal");
    }

    public function guardaritem(Request $request) {
        return "Nombre del articulo: ". $request->input("item"). ", Cantidad del articulo: ". $request->input("stock"). ", Categoria: ". $request->input("category");
    }

}
