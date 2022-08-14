<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiones extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'regiones';

    public function assignItems(){
        return $this->hasMany('App\Models\sucursales');
    }
}
