<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Articulo;
use App\Models\AsignarArticulo;
use App\Models\Categoria;
use App\Models\Region;
use App\Models\Sucursal;

class ArticulosController extends Controller
{
    public function verasignacion(){
        $asignaciones = AsignarArticulo::get();
        return view('listaAsignacionArticulo', [
            'asignaciones'=> $asignaciones
        ]);
    }

    public function asignarAr() {
        $sucursales = Sucursal::get();
        $articulos = Articulo::get();
        return view('asignarArticulo', [
            'sucursales'=> $sucursales,
            'articulos'=> $articulos
        ]);
    }

    public function guardarAsignacion(Request $request) {

        $this->validate($request,[
            'cantidad' => 'required',
            'preciounidad' => 'required'
        ]);

        $sucursal_id = $request->input('sucursalA');
        $articulo_id = $request->input('articuloA');

        $asignaciones = new AsignarArticulo();
        $asignaciones -> sucursal_id = $sucursal_id;
        $asignaciones -> articulo_id = $articulo_id;
        $asignaciones -> stockSucursal = $request -> cantidad;
        $asignaciones -> precio = $request -> preciounidad;
        $asignaciones -> save();

        $asignaciones = AsignarArticulo::get();

        return view('listaAsignacionArticulo', [
            'asignaciones'=> $asignaciones
        ]);
    }

    public function nuevoAr() {
        $categorias = Categoria::get();


        return view('nuevoArticulo',[
            'categorias' => $categorias
        ]);
    }

    public function verbusqueda(Request $request) {

        //$request="Lápiz";
        $busqueda = $request->input('buscarArt');
        $articulos = Articulo::where('nombre','LIKE','%'.$request."%$busqueda%")->get();
        //dd($articulos);
        return view('lista', [
            'articulos'=> $articulos 
        ]);
    }

    public function guardarArticulo(Request $request) {

        $this->validate($request,[
            'codigo' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        $imagen =$request->file('imagen');

        if($imagen){
            $imagen_path = time()."-".$imagen->getClientOriginalName();
            \Storage::disk('images')->put($imagen_path, \File::get($imagen));
        }

        $categoria_id = $request->input('categoria');

        $articulo = new Articulo();
        $articulo -> codigo = $request -> codigo;
        $articulo -> nombre = $request -> nombre;
        $articulo -> categoria_id = $categoria_id;
        $articulo -> descripcion = $request -> descripcion;
        $articulo -> image = $imagen_path;
        $articulo -> save();

        $articulo = Articulo::get();

        return view('lista', [
            'articulos'=> $articulo
        ]);
    }

    public function getImagen($filename){
        $file = \Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }

    public function delete($id) {
        
        $articuloEliminar = Articulo::find($id);
        $articuloEliminar -> delete();

        $articulos = Articulo::get();
        return view('lista', [
            'articulos'=> $articulos
        ]);
    }

    public function update($id) {
        
            $articuloUpdate = Articulo::where('id', $id)->get();
            
            return view('editarLista', [
                'articulos'=> $articulos
            ]);
    }

    public function updateSave(Request $request) {
        
        $this->validate($request,[
            'nombre'=>'required',
            'descripcion'=>'required'
        ]);

    }
}