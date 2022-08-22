<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignarArticulo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'asignarArticulos';

    public function articulos(){
        return $this->belongsTo('App\Models\Articulo', 'articulo_id');       
    }
    public function sucursales(){
        return $this->belongsTo('App\Models\Sucursal', 'sucursal_id');       
    }
}
