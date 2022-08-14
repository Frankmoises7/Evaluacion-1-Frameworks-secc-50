<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'sucursales';

    public function asignarArticulos(){
        return $this->hasMany('App\Models\AsignarArticulos');
    }
    public function regiones(){
        return $this->belongsTo('App\Models\office', 'regiones_id');       
    }
}
