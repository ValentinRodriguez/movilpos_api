<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoTipoOrdensTable extends Migration
{
    public function up()
    {
        Schema::create('co_tipo_ordenes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('usuario_creador');
            $table->string('estado');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('co_tipo_ordenes');
    }
}
