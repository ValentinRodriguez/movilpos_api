<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoTipoOrdenesTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_compras')->create('co_tipo_ordenes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('usuario_creador');
            $table->string('estado');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_compras')->dropIfExists('co_tipo_ordenes');
    }
}
