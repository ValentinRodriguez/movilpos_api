<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasEmpresasTable extends Migration
{
    public function up()
    {
        Schema::create('areas_empresas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',100); 
            $table->smallInteger('cod_cia');
            $table->smallInteger('suc_id');
            $table->smallInteger('depto');
            $table->string('estado',20);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('areas_empresas');
    }
}
