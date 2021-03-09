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
            $table->Integer('secuencia_entrada');
            $table->smallinteger('mes');
            $table->string('periodo');
            $table->string('ref');
            $table->string('detalle')->nullable();
         //   $table->string('informacion',12)->nullable();
          //  $table->smallInteger('cod_sp')->nullable();
         //   $table->date('fecha_inicial');
          //  $table->date('fecha_final');
           // $table->string('cuenta_no');
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
