<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\AsignarArticulo;
use App\Models\Categoria;
use App\Models\Region;
use App\Models\Sucursal;

class ArticulosDeLibreriaController extends Controller
{
    public function welcome(){
        return view('welcome');
       //$asignarArticulos = AsignarArticulo::get();

       //dd($asignarArticulos);
    }
    
    public function verlista(){
        $articulos = Articulo::get();
        //Aqui hacemos la relacion con los articulos para obtener elnombre
        return view('lista', [
            'articulos'=> $articulos
        ]);
    }

    public function verborrar(){
        return view('borrar');
    }

    public function editarLista() {
        $productos = AsignarArticulo::get()
        //Aqui hacemos la relacion con los articulos para obtener elnombre
        ->load('articulos');
        
        return view('editarLista', [
            'productos'=> $productos
        ]);
    }


}
