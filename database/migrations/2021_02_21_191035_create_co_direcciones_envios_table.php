<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoDireccionesEnviosTable extends Migration
{
    public function up()
    {
        Schema::create('co_direcciones_envios', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->text('direccion_a');
            $table->text('direccion_b');
            $table->integer('id_pais');
            // $table->foreign('id_pais')->references('id_pais')->on('paises');
            $table->integer('id_ciudad');
            // $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudades');
            $table->text('telefono');
            $table->string('estado',20);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable(); 
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('co_direcciones_envios');
    }
}
