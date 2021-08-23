<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoNegocioTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_empresa')->create('tipo_negocio', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_negocio')->unique();
            $table->text('descripcion');
            $table->string('estado',20);
            $table->string('usuario_creador',100);
            $table->string('usuario_modificador',100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection('mov_empresa')->dropIfExists('tipo_negocio');
    }
}
