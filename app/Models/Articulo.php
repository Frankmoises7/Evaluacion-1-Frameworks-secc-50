<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'articulos';

    public function categorias(){
        return $this->belongsTo('App\Models\Categoria', 'categoria_id');       
    }
    public function asignacionArticulos(){
        return $this->hasMany('App\Models\AsignacionArticulo');
    }

}
