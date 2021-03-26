<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportistas', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_transportista');
            $table->integer('sec_transp');
            $table->text('nombre');
            $table->text('cedula');
            $table->text('calle');
            $table->text('casa_num');
            $table->text('barrio');
            $table->text('urbanizacion');
            $table->integer('cod_zona');
            $table->integer('cod_provincia');
            // $table->foreign('cod_provincia')->references('id_ciudad')->on('ciudades');
            $table->integer('id_pais');
            // $table->foreign('id_pais')->references('id_pais')->on('paises');
            $table->text('telefono');
            $table->text('estado');
            $table->text('usuario_creador');
            $table->text('usuario_modificador')->nullable();
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
        Schema::dropIfExists('transportistas');
    }
}
