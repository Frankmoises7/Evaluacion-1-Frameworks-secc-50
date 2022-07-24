<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosDeLibreriaController extends Controller
{
    public function verlista(){
        return view('list');
    }
}
