<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\AsignarArticulo;
use App\Models\Categoria;
use App\Models\Region;
use App\Models\Sucursal;

class SucursalesController extends Controller{

    public function versucursal(){
        $sucursales = Sucursal::get();
     
        return view('listaSucursal', [
            'sucursales'=> $sucursales
        ]);
    }

    public function nuevaSu() {
        $regiones = Region::get();


        return view('nuevaSucursal',[
            'regiones' => $regiones
        ]);
    }

    public function guardarSucursal(Request $request) {
        
        $this->validate($request,[
            'sucursal' => 'required',
            'direccion' => 'required'
        ]);

        $region_id = $request->input('region');

        $sucursal = new Sucursal();
        $sucursal -> nombre = $request -> sucursal;
        $sucursal -> direccion = $request -> direccion;
        $sucursal -> region_id = $region_id;
        $sucursal -> save();

        $sucursal = Sucursal::get();

        return view('listaSucursal', [
            'sucursales'=> $sucursal
        ]);
    }

}