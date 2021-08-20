<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosEmpresaValorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_empresa')->create('permisos_empresa_valors', function (Blueprint $table) {
            $table->id();
            $table->text('modulos');
            $table->text('generales');
            $table->text('programas');
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mov_empresa')->dropIfExists('permisos_empresa_valors');
    }
}
