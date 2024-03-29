<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgCodigosRetencionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_contabilidad')->create('cg_codigos_retenciones', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo_isr');
            $table->string('descripcion',50);
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
        Schema::connection('mov_contabilidad')->dropIfExists('cg_codigos_retenciones');
    }
}
