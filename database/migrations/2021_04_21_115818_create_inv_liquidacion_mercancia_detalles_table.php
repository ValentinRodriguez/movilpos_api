<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvLiquidacionMercanciaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_liquidacion_mercancia_detalles', function (Blueprint $table) {
            $table->id();
            $table->smallinteger('tipo')->nullable();
            $table->integer('num_oc')->nullable();
            $table->integer('rep_entrada')->nullable();
            $table->smallinteger('cod_n')->nullable();
            $table->smallinteger('cod_grupo')->nullable();
            $table->smallinteger('cod_tipo')->nullable();
            $table->smallinteger('cod_sec')->nullable();
            $table->float('cantidad_oc',12, 5)->nullable();
            $table->float('fob',12, 3)->nullable();
            $table->float('costo_flete',12, 2)->nullable();
            $table->float('impuesto',12, 2)->nullable();
            $table->float('otros_g',12, 2)->nullable();
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
        Schema::dropIfExists('inv_liquidacion_mercancia_detalles');
    }
}
