<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosEmpresasTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_empresa')->create('permisos_empresas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',100);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_empresa')->dropIfExists('permisos_empresas');
    }
}
