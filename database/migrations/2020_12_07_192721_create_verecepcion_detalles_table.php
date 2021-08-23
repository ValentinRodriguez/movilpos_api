<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerecepcionDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_ventas')->create('verecepcion_detalles', function (Blueprint $table) {
            $table->id();
            $table->string('num_oc')->foreign('num_oc')->references('num_oc')->on('verecepcion_masters');
            $table->integer('id_inspeccion');
            $table->string('respuesta');
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
        Schema::connection('mov_ventas')->dropIfExists('verecepcion_detalles');
    }
}
