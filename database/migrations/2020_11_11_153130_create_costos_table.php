<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_contabilidad')->create('costos', function (Blueprint $table) {
            $table->id();
            $table->integer('ventas');
            $table->integer('mes_ini');
            $table->integer('mes_fin');
            $table->integer('codigo');
            $table->float('material');
            $table->float('labor');
            $table->float('gastos');
            $table->float('material_usd');
            $table->float('labor_usd');
            $table->float('gastos_usd');
            $table->float('tasa');
            $table->string('estado');
            $table->string('usuario_creador');
            $table->string('usuario_modificador')->nullable();
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
        Schema::connection('mov_contabilidad')->dropIfExists('costos');
    }
}
