<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenPedidoDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_rrhh')->create('orden_pedido_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('num_oc')->foreign('num_oc')->references('num_oc')->on('orden_pedido_masters');
            $table->smallInteger('secuencia');
            $table->smallInteger('area');
            $table->smallInteger('codigo');
            $table->float('precio');
            $table->float('cantidad');
            $table->float('descuento');
            $table->float('costo');
            $table->float('total_bruto');
            $table->float('itbis');
            $table->float('sub_total');
            $table->float('neto');
            $table->datetime('fecha_compromiso');
            $table->string('estado_produccion',100);
            $table->char('observacion',100)->nullable();
            $table->integer('id_kit')->nullable();
            $table->smallInteger('departamento')->nullable();
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
        Schema::connection('mov_rrhh')->dropIfExists('orden_pedido_detalles');
    }
}
