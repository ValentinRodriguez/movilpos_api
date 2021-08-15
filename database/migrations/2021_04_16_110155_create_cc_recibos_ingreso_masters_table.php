<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcRecibosIngresoMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cc_recibos_ingreso_masters', function (Blueprint $table) {
            $table->id();
            $table->string('cuenta_no')->nullabel();
            $table->integer('cod_cia')->nullabel();
            $table->string('tipo_doc');
            $table->integer('num_doc');
            $table->integer('tipo_cliente')->nullabel();
            $table->integer('sec_cliente')->nullabel();
            $table->integer('cod_emp')->nullabel();
            $table->integer('cod_emp_sec')->nullabel();
            $table->date('fecha_orig')->nullabel();
            $table->date('fecha_ven')->nullabel();
            $table->integer('aplica_a')->nullabel();
            $table->integer('banco')->nullabel();
            $table->string('num_cheque')->nullabel();
            $table->float('valor');
            $table->float('valor_efectivo')->nullabel();
            $table->float('valor_cheque')->nullabel();
            $table->float('costo')->nullabel();
            $table->float('monto_desc')->nullabel();
            $table->string('status_t')->nullabel();
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable(); 
            $table->integer('bodega')->nullabel();
            $table->integer('factura_ext')->nullabel();
            $table->string('tipo_doc_aplica')->nullabel();
            $table->string('documento_ref')->nullabel();
            $table->float('valor_tarjeta')->nullabel();
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
        Schema::dropIfExists('cc_recibos_ingreso_masters');
    }
}
