<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgPeriodosFiscalesTable extends Migration
{
    public function up()
    {
        Schema::create('cg_periodos_fiscales', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('anio');
            $table->smallInteger('mes');
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_corte');
            $table->smallInteger('dias_habiles');
            $table->smallInteger('dias_gracia');
            $table->string('estado',10);
            $table->string('usuario_creador');
            $table->string('usuario_modificador',50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cg_periodos_fiscales');
    }
}
