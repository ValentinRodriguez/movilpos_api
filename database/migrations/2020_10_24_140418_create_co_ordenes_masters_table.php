<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoOrdenesMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_compras')->create('co_ordenes_masters', function (Blueprint $table) {
            $table->id();
            $table->integer('num_oc')->unique();
            $table->date('fecha')->nullable();
            $table->text('numero_proforma')->nullable();
            $table->text('archivo')->nullable();
            $table->integer('cod_sp');
            $table->integer('cod_sp_sec');
            $table->integer('cond_pago')->reference('cond_pago')->on('condiciones');
            $table->text('via_envio');
            $table->date('fecha_enviada');
            $table->date('fecha_pagada')->nullable();
            $table->text('orden_cerrada');
            $table->text('pagada');
            $table->integer('id_moneda');
            $table->text('nombre');
            $table->integer('id_pais');
            // $table->foreign('id_pais')->references('id_pais')->on('mov_globales.paises');
            $table->integer('id_ciudad');
            // $table->foreign('id_ciudad')->references('id_ciudad')->on('mov_globales.ciudades');
            $table->text('direccion_a');
            $table->text('direccion_b');
            $table->string('telefono',30);
            $table->integer('id_puerto');
            $table->float('total_bruto');
            $table->float('total_desc');
            $table->float('total_neto');
            $table->float('total_itbis');
            $table->text('observaciones')->nullable();
            // $table->text('ship_to');
            // $table->text('n_b_a')->nullable();
            // $table->text('c_i_d')->nullable();
            // $table->text('notas')->nullable();
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
        Schema::connection('mov_compras')->dropIfExists('co_ordenes_masters');
    }
}
