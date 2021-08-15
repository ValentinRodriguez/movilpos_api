<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuadreCajasTable extends Migration
{
    public function up()
    {
        Schema::create('cuadre_cajas', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('cajero');
            $table->smallInteger('cod_cia');
            $table->smallInteger('suc_id');
            $table->date('fecha');
            $table->smallInteger('caja');
            $table->smallInteger('turno');
            $table->string('descripcion',100);      
            $table->float('efectivo')->nullable();
            $table->float('tarjeta')->nullable();
            $table->float('cheque')->nullable();
            $table->float('saldo_inicial');
            $table->float('saldo_actual');
            $table->float('importe_entrega');
            $table->float('saldo_final');
            $table->string('estado',20);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50);
            $table->timestamps();  
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuadre_cajas');
    }
}
