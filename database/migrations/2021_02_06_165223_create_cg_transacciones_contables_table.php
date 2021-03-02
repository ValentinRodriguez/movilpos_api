<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgTransaccionesContablesTable extends Migration
{
    public function up()
    {
        Schema::create('cg_transacciones_contables', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha')->nullable();
            $table->smallInteger('tipo')->nullable();
            $table->string('ref',14);
            $table->string('cuenta_no',8)->nullable();
            $table->smallInteger('departamento')->nullable();
            $table->string('num_doc',12)->nullable();
            $table->smallInteger('cod_aux')->nullable();
            $table->smallInteger('cod_sec')->nullable();
            $table->string('detalles',30)->nullable();
            $table->string('detalle_1',100)->nullable();
            $table->string('detalle_2',40)->nullable();
            $table->float('debito')->nullable();
            $table->float('credito')->nullable();
            $table->string('estado',15)->nullable();
            $table->string('usuario_creador',50)->nullable();
            $table->string('usuario_modificador',50)->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cg_transacciones_contables');
    }
}
