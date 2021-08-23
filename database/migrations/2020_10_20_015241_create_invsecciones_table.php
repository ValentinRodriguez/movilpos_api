<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvseccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_inventario')->create('invsecciones', function (Blueprint $table) {
            $table->id();
            $table->integer('id_seccion')->unique();
            $table->integer('id_bodega');
            $table->foreign('id_bodega')->references('id_bodega')->on('bodegas');
            $table->string('titulo');
            $table->string('usuario_creador');
            $table->string('usuario_modificador')->nullable();
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
        Schema::connection('mov_inventario')->dropIfExists('invsecciones');
    }
}
