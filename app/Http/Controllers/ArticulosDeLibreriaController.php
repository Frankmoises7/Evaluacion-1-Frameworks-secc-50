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
        $productos = AsignarArticulo::get();
        
        return view('lista', [
         'productos'=> $productos
        ]);
    }

    public function verborrar(){
        return view('borrar');
    }

    public function editarLista() {
        return view('editarLista');
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
            'item' => 'required|min:3',
            'stock' => 'required|integer'
        ]);
        return "Nombre del articulo: ". $request->input("item"). ", Cantidad del articulo: ". $request->input("stock"). ", Categoria: ". $request->input("category");
    }

    public function guardarOffice(Request $request) {
        
        $this->validate($request,[
            'nameOffice' => 'required|min:3',
            'address' => 'required|min: 3'
        ]);
        return "Nombre de Sucursal: ". $request->input("nameOffice"). ", Dirección: ". $request->input("address");
    }

}
