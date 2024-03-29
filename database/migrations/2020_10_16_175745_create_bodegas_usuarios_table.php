<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegasUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_usuarios')->create('bodegas_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('email')->index();
            $table->foreign('email')->references('email')->on('users');
            $table->integer('id_bodega')->index();
            $table->foreign('id_bodega')->references('id_bodega')->on('mov_inventario.bodegas');
            $table->string('usuario_creador')->index();
            $table->string('estado',10);
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
        Schema::connection('mov_usuarios')->dropIfExists('bodegas_usuarios');
    }
}
