<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_inventario')->create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_bodega')->index();
            $table->string('descripcion',100);
            $table->integer('id_pais');
            // $table->foreign('id_pais')->references('id_pais')->on('mov_globales.paises');
            $table->integer('id_ciudad');
            // $table->foreign('id_ciudad')->references('id_ciudad')->on('mov_globales.ciudades');
            $table->string('usuario_creador',100);
            $table->string('usuario_modificador',100)->nullable();
            $table->string('estado',100);
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
        Schema::connection('mov_inventario')->dropIfExists('bodegas');
    }
}
