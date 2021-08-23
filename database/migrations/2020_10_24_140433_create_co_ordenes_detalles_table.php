<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoOrdenesDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_compras')->create('co_ordenes_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('num_oc')->foreign('num_oc')->reference('num_oc')->on('co_ordenes_master');
            $table->integer('num_req');
            $table->string('codigo')->foreign('codigo')->reference('codigo')->on('inv_productos');
            $table->float('cantidad');
            $table->float('precio');
            $table->float('porc_desc');
            $table->float('monto_desc');
            $table->float('itbis');
            $table->float('valor_bruto');
            $table->float('valor_neto');
            $table->string('estado',10);
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
        Schema::connection('mov_compras')->dropIfExists('co_ordenes_detalles');
    }
}
