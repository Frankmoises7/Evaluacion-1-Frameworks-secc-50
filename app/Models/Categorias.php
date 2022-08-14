<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'categorias';

    public function articulos(){
        return $this->hasMany('App\Models\articulos');
    }
}
