<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'sucursales';

    public function asignacionArticulos(){
        return $this->hasMany('App\Models\AsignacionArticulos');
    }
    public function regiones(){
        return $this->belongsTo('App\Models\Region', 'region_id');
    }
}
