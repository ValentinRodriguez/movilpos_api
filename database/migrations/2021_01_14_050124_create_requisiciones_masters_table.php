<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisicionesMastersTable extends Migration
{    
    public function up()
    {
        Schema::connection('mov_inventario')->create('requisiciones_masters', function (Blueprint $table) {
            $table->id();
            $table->integer('num_req');
            $table->date('fech_req');
            $table->integer('departamento');
            $table->integer('cod_emp_sec');
            $table->char('uso',100);
            $table->char('prioridad',30);
            $table->char('procesada',10)->nullable();
            $table->integer('num_oc')->nullable();
            $table->integer('tipo_cliente');
            $table->integer('sec_cliente');
            $table->string('nombre_cliente',100);
            $table->string('observacion',200)->nullable();
            $table->string('documento',100)->nullable();
            $table->string('estado',10);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_inventario')->dropIfExists('requisiciones_masters');
    }
}
