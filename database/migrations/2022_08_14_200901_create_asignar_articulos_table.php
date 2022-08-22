<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignarArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignarArticulos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('articulo_id')-> references ('id') -> on ('articulos');
            $table->foreignId('sucursal_id') -> references ('id') -> on ('sucursales');
            $table->integer('stockSucursal');
            $table->integer('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignarArticulos');
    }
}
