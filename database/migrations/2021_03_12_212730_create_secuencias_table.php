<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecuenciasTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_contabilidad')->create('secuencias', function (Blueprint $table) {
            $table->id();
            $table->integer('documento');
            $table->string('cuenta_no',20);
            $table->string('nombre_bco',40)->nullable();
            $table->string('direccion',50)->nullable();
            $table->string('cuenta_bank',14)->nullable();
            $table->string('codigo_1',7)->nullable();
            $table->string('codigo_2',7)->nullable();
            $table->string('estado',20)->nullable();
            $table->string('usuario_creador',50)->nullable();
            $table->string('usuario_modificador',50)->nullable();
            $table->string('tipo_doc',3);
            $table->string('comentario',80)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection('mov_contabilidad')->dropIfExists('secuencias');
    }
}
