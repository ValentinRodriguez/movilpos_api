<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeCondPagosTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_ventas')->create('ve_cond_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',50);
            $table->char('defecto',2);
            $table->integer('dias');
            $table->integer('cond_pago');
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable();
            $table->string('estado',50);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_ventas')->dropIfExists('ve_cond_pagos');
    }
}
