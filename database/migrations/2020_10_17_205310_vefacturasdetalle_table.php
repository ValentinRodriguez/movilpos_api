<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VefacturasdetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vefacturasdetalle', function (Blueprint $table) {
            $table->id();
            $table->integer('factura');
            $table->foreign('factura')->references('factura')->on('vefacturasmaster');
            $table->string('codigo');
            $table->foreign('codigo')->references('codigo')->on('inv_productos');
            $table->text('titulo')->nullable();
            $table->float('porc_desc')->nullable();
            $table->float('descuento')->nullable();
            $table->float('porc_itbis')->nullable();
            $table->float('itbis')->nullable();
            $table->float('cantidad')->nullable();;
            $table->float('cantidad1');
            $table->float('precio');
            $table->float('costo')->nullable();
            $table->float('valor')->nullable();
            $table->string('estado');
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
        Schema::dropIfExists('vefacturasdetalle');
    }
}
