<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgTipoGastosTable extends Migration
{
    public function up()
    {
        Schema::create('cg_tipo_gastos', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('codigo_fiscal');
            $table->string('descripcion',50);     
            $table->string('estado',20);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable();      
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cg_tipo_gastos');
    }
}
