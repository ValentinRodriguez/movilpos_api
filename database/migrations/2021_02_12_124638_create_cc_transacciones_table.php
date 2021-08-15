<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcTransaccionesTable extends Migration
{
    public function up()
    {
        Schema::create('cc_transacciones', function (Blueprint $table) {
            $table->id();
            $table->string('cuenta_no',8)->nullable();
            $table->smallInteger('cod_cia')->nullable();
            $table->string('tipo_doc',2)->nullable();
            $table->integer('num_doc')->nullable();
            $table->smallInteger('tipo_cliente')->nullable();
            $table->smallInteger('sec_cliente')->nullable();
            $table->smallInteger('cod_emp')->nullable();
            $table->smallInteger('cod_emp_sec')->nullable();
            $table->date('fecha_orig')->nullable();
            $table->date('fecha_ven')->nullable();
            $table->integer('aplica_a')->nullable();
            $table->integer('banco')->nullable();
            $table->string('num_cheque',12)->nullable();
            $table->float('valor')->nullable();
            $table->float('valor_efectivo')->nullable();
            $table->float('valor_cheque')->nullable();
            $table->float('costo')->nullable();
            $table->float('monto_desc')->nullable();
            $table->string('estado',50)->nullable();
            $table->string('usuario_creador',50)->nullable();
            $table->string('usuario_modificador',50)->nullable();
            $table->smallInteger('bodega')->nullable();
            $table->integer('factura_ext')->nullable();
            $table->string('tipo_doc_aplica')->nullable();
            $table->integer('documento_ref')->nullable();
            $table->float('valor_tarjeta')->nullable();
            $table->string('efectivo',10)->nullable();
            $table->string('ck_tr_dp',10)->nullable();
            $table->string('tar_cr_db',10)->nullable();
            $table->integer('num_oc')->nullable();
            $table->integer('num_req')->nullable();
            $table->char('enviado',2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cc_transacciones');
    }
}
