<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVefacturasmasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_ventas')->create('vefacturasmaster', function (Blueprint $table) {
            $table->id();
            $table->integer('factura')->index();
            $table->integer('cod_cia')->foreign('cod_cia')->references('cod_cia')->on('empresas');
            $table->integer('suc_id');
            $table->date('fecha_factura');
            $table->integer('num_oc')->foreign('num_oc')->references('num_oc')->on('prordenesmaster');
            $table->integer('conduce');
            $table->string('cheque_no', 50)->nullable();
            $table->string('tarjeta_no', 50)->nullable();           
            $table->float('tarjeta')->nullable();
            $table->float('efectivo')->nullable();
            $table->float('cheque')->nullable();
            $table->integer('tipo_cliente')->foreign('tipo_cliente')->references('tipo_cliente')->on('veclientes')->nullable();
            $table->integer('sec_cliente')->foreign('sec_cliente')->references('sec_cliente')->on('veclientes')->nullable();
            $table->text('nombre_cli')->nullable();
            $table->text('direccion')->nullable();
            $table->integer('id_pais')->nullable();
            $table->text('id_ciudad')->nullable();
            $table->text('id_zonalocal')->foreign('id_zonalocal')->references('id_zonalocal')->on('zonaslocal')->nullable();
            $table->integer('num_emp')->foreign('num_emp')->references('num_emp')->on('noempleados');
            // $table->foreign('cod_provincia')->references('id_ciudad')->on('ciudades');
            // $table->foreign('id_pais')->references('id_pais')->on('paises');
            $table->float('total_bruto');
            $table->float('descuento')->nullable();
            $table->float('monto_itbis');
            $table->float('sub_total');
            $table->float('devuelta')->nullable();
            $table->float('neto');
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
        Schema::connection('mov_ventas')->dropIfExists('vefacturasmaster');
    }
}
