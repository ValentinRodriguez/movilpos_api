<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvLiquidacionMercanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_liquidacion_mercancias', function (Blueprint $table) {
            $table->id();
            $table->smallinteger('tipo');
            $table->integer('num_oc') ;
            $table->datetime('fecha') ;
            $table->string('liquidada',12)->nullable();
            $table->string('cerrada',12)->nullable();
            $table->string('pagada',12)->nullable();
            $table->integer('rep_entrada')->nullable();
            $table->string('factura')->nullable();
            $table->float('prima_us')->nullable();
            $table->smallinteger('cod_sp');
            $table->smallinteger('cod_sp_sec');
            $table->float('timpuestos')->nullable();
            $table->float('tgastos')->nullable();
            $table->float('tflete')->nullable();
            $table->string('usa_calculo',10)->nullable();
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
        Schema::dropIfExists('inv_liquidacion_mercancias');
    }
}
