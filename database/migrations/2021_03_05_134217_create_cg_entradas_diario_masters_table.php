<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgEntradasDiarioMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cg_entradas_diario_masters', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->Integer('documento');
            $table->smallinteger('mes');
            $table->string('periodo');
            $table->string('ref');
            $table->string('detalle')->nullable();
            $table->string('tipo_doc',2);
            $table->integer('valor')->nullable();
            $table->Integer('cod_sp')->nullable();
            $table->Integer('cod_sp_sec')->nullable();
            $table->string('nombre_sup',50);
            $table->Integer('tasa')->nullable(); 
            $table->Integer('cuenta_no')->nullable();
            $table->string('estado',20);
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
        Schema::dropIfExists('cg_entradas_diario_masters');
    }
}