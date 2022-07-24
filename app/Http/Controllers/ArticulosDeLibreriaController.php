<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosDeLibreriaController extends Controller
{
    public function verlista(){
        return view('list');
    }

    public function guardar(Request $request) {
        return "Sucursal: ". $request->input("sucursal"). ", Nombre del articulo: ". $request->input("articulo"). ", Cantidad del articulo: ". $request->input("cantidad");
    }

}
