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

    public function newOf() {
        return view('newOffice');
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
