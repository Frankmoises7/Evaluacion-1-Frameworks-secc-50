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

    public function asignarAr() {
        return view('asignarArticulo');
    }

    public function nuevoAr() {
        return view('nuevoArticulo');
    }

    public function nuevaSu() {
        return view('nuevaSucursal');
    }

    public function guardar(Request $request) {

        $this->validate($request,[
            'cantidad' => 'required|integer',
            'preciounidad' => 'required|integer'
        ]);

        return "Sucursal: ". $request->input("sucursal"). ", Nombre del articulo: ". $request->input("articulo"). ", Cantidad del articulo: ". $request->input("cantidad"). ", Precio Unidad: ". $request->input("preciounidad");
    }

    public function guardarItem(Request $request) {
        
        $this->validate($request,[
            'codigo' => 'required',
            'nombre' => 'required',
            'stock' => 'required',
            'categoria_id' => 'required'
        ]);
        $articulo = new Articulo();
        $articulo -> codigo = $request -> codigo;
        $articulo -> nombre = $request -> nombre;
        $articulo -> stock = $request -> stock;
        $articulo -> categoria_id = $request -> categoria_id;
        $articulo -> descripcion = $request -> descripcion;
        $articulo -> sucursal = $request -> sucursal;
        $articulo -> save();

        $articulo = Articulo::get();

        return view('lista', [
            'articulos'=> $articulo
        ]);
    }

    public function guardarOffice(Request $request) {
        
        $this->validate($request,[
            'nameOffice' => 'required|min:3',
            'address' => 'required|min: 3'
        ]);
        return "Nombre de Sucursal: ". $request->input("nameOffice"). ", Dirección: ". $request->input("address");
    }

}
