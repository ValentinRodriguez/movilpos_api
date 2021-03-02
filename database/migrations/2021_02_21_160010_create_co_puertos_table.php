<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoPuertosTable extends Migration
{
    public function up()
    {
        Schema::create('co_puertos', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->smallInteger('dias');
            $table->string('estado',20);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable(); 
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('co_puertos');
    }
}
