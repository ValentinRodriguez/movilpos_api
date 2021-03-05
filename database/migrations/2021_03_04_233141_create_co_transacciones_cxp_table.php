<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoTransaccionesCxpTable extends Migration
{
    public function up()
    {
        Schema::create('co_transacciones_cxp', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_doc',2); 
            $table->string('num_doc',14);
            $table->smallInteger('cod_sp'); 
            $table->smallInteger('cod_sp_sec'); 
            $table->datetime('fecha_orig');
            $table->datetime('fecha_proc'); 
            $table->integer('orden_no');
            $table->string('tipo',2); 
            $table->string('aplica_a',10); 
            $table->string('cta_ctble',10); 
            $table->float('valor'); 
            $table->smallInteger('tipo_fact');
            $table->string('detalle',40); 
            $table->smallInteger('cod_cia'); 
            $table->float('bienes'); 
            $table->float('servicios'); 
            $table->float('retencion');
            $table->string('estado',20);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable(); 
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('co_transacciones_cxp');
    }
}
