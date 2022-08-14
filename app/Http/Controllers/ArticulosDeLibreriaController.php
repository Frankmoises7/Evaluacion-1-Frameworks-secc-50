<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulos;
use App\Models\AsignarArticulos;
use App\Models\Categorias;
use App\Models\Regiones;
use App\Models\Sucursales;

class ArticulosDeLibreriaController extends Controller
{
    public function welcome(){
       // return view('welcome');
       $articulos = Articulos::get();

       dd($articulos);
    }
    
    public function verlista(){
        return view('lista');
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
