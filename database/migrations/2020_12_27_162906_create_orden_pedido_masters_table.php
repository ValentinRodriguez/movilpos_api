<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenPedidoMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_ventas')->create('orden_pedido_masters', function (Blueprint $table) {
            $table->id();
            $table->integer('num_oc')->unique();
            $table->char('ventas',1)->nullable();
            $table->integer('cotizacion_no')->nullable();
            $table->date('fecha_orden');
            $table->integer('sec_vend');
            $table->text('nombre_cliente');
            // $table->text('pais_cliente');
            $table->text('urbanizacion_cliente');
            // $table->text('ciudad_cliente');
            // $table->text('direccion_cliente');
            $table->integer('tipo_cliente');
            $table->Integer('sec_cliente');
            $table->text('direccion');
            $table->char('telefono',20);
            // $table->char('fax',20)->nullable();
            $table->date('fecha_entrega');
            $table->Integer('cond_pago');
            $table->float('total_bruto');
            $table->float('sub_total');
            $table->float('monto_desc');
            $table->float('neto');
            $table->float('itbis');
            $table->text('ubicacion');
            $table->char('cerrada',2)->nullable();
            $table->date('fecha_cierre')->nullable();
            $table->integer('id_pais');
            $table->integer('id_ciudad');
            $table->integer('id_zonalocal');
            $table->text('observacion')->nullable();
            $table->string('tipo_orden',50);
            $table->char('estado_despacho',2)->default('no');
            $table->text('id_ultima_bodega')->nullable();
            $table->char('estado_devolucion')->default('no');
            $table->integer('orden_sustituta')->nullable();
            $table->char('estado');
            $table->char('usuario_creador');           
            $table->char('usuario_modificador',50)->nullable();
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
        Schema::connection('mov_ventas')->dropIfExists('orden_pedido_masters');
    }
}
