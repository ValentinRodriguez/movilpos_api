<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcRecibosIngresoDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cc_recibos_ingreso_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('idavance')->nullabel();
            $table->integer('aplica_a')->nullabel();
            $table->integer('num_doc')->nullabel();
            $table->string('tipo_doc',2)->nullabel();
            $table->float('descuento')->nullabel();
            $table->float('valor_pagado')->nullabel();
            $table->integer('sucid')->nullabel();
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
        Schema::dropIfExists('cc_recibos_ingreso_detalles');
    }
}
