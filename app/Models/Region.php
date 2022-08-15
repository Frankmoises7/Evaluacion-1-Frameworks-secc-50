<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'regiones';

    public function sucursales(){
        return $this->hasMany('App\Models\Sucursales');
    }
}
