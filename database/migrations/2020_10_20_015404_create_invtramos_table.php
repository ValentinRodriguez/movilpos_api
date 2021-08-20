<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvtramosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_inventario')->create('invtramos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tramo')->unique();
            $table->integer('id_bodega');
            $table->foreign('id_bodega')->references('id_bodega')->on('bodegas');
            $table->integer('id_seccion');
            $table->foreign('id_seccion')->references('id_seccion')->on('invsecciones');
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
        Schema::connection('mov_inventario')->dropIfExists('invtramos');
    }
}
