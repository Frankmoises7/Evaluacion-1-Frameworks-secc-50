<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    use HasFactory;
    public function categorias(){
        return $this->belongsTo('App\Models\item', 'categoria_id');       
    }
    public function asignarArticulos(){
        return $this->hasMany('App\Models\asignarArticulo');
    }
}
