<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpTransaccionesHistorialesDetallesTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_contabilidad')->create('cp_transacciones_historiales_detalles', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha');
            $table->smallInteger('cod_sp');
            $table->smallInteger('cod_sp_sec');
            $table->string('factura',14);
            $table->string('tipo_doc',2);
            $table->string('cuenta_no',8);
            $table->smallInteger('departamento')->nullable();
            $table->string('num_doc',12);
            $table->smallInteger('cod_aux')->nullable(); 
            $table->smallInteger('cod_sec')->nullable(); 
            $table->string('detalles',30)->nullable();
            $table->float('debito');
            $table->float('credito');
            $table->float('porciento');
            $table->smallInteger('tipo_fact')->nullable();;
            $table->smallInteger('cod_cia');
            $table->string('estado',20);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable(); 
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_contabilidad')->dropIfExists('cp_transacciones_historiales_detalles');
    }
}
