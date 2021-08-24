<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoDocumentoTable extends Migration
{    
    public function up()
    {
        Schema::connection('mov_empresa')->create('tipo_documento', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_documento');
            $table->unique('tipo_documento');
            $table->text('descripcion')->nullable();
            $table->string('origen',20);
            $table->String('estado',20);
            $table->string('usuario_creador',100);
            $table->string('usuario_modificador',100)->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_empresa')->dropIfExists('tipo_documento');
    }
}
