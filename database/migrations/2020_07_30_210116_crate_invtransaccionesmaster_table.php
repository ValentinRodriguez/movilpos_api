<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateInvtransaccionesmasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_inventario')->create('invtransaccionesmaster', function (Blueprint $table) {
            $table->id();
            $table->integer('num_doc')->index();
            $table->integer('numerosecuencia')->index();
            $table->date('fecha');
            $table->integer('id_tipomov')->foreign()->references('id_tipomov')->on('invtipos_movimientos');
            $table->string('conduce_no')->nullable();
            $table->integer('cotizacion_no')->nullable();
            $table->integer('factura')->nullable();
            $table->integer('tipo_cliente')->nullable();
            $table->integer('sec_cliente')->nullable();
            $table->integer('cod_sp')->nullable();
            $table->integer('cod_sp_sec')->nullable();
            // $table->string('nombre_cliente')->nullable();
            $table->string('num_rnc',11)->nullable();
            $table->string('direccion',500)->nullable();
            $table->string('email',100)->nullable();
            $table->integer('id_num_oc')->nullable();
            $table->integer('id_num_op')->nullable();
            $table->char('condicion_recibo', 2);
            $table->integer('id_bodega_d')->nullable();
            $table->integer('id_bodega')->foreign()->references('id_bodega')->on('bodegas_usuarios')->nullable();
            $table->string('placa',50)->nullable();
            $table->integer('cod_mov_entrada')->nullable();
            $table->integer('num_doc_entrada')->nullable();
            $table->integer('cod_transportista')->nullable();
            $table->integer('cod_tarifa')->nullable();
            $table->text('comentario')->nullable();
            $table->integer('departamento')->foreign()->references('departamento')->on('nodepartamento')->nullable();
            $table->integer('id_numemp')->foreign()->references('id')->on('mov_rrhh.noempleados')->nullable();
            $table->string('nombre_departamento',100)->nullable();
            $table->string('cuenta_no',25)->foreign()->references('cuenta_no')->on('cgcatalogo')->nullable();
            $table->string('descripcion_cuenta',100)->nullable();
            $table->string('nombre_recibido_por')->nullable();
            $table->string('firma_recibido_por',500)->nullable();
            $table->string('nombre_entregado_por')->nullable();
            $table->string('firma_entregado_por',500)->nullable();
            $table->string('estado',10);
            $table->string('origen',10);
            $table->text('inv_tipomov_transferencia')->nullable();
            $table->text('documento_origen')->nullable();
            $table->text('codigo_movimiento_origen')->nullable();
            $table->text('bodega_origen')->nullable();
            $table->string('usuario_creador');
            $table->string('usuario_modificador')->nullable();
            $table->string('controlCliente',2);
            $table->string('controlDespacho',2);
            $table->string('controlDepartamento',2);
            $table->string('controlDevoluciones',2);
            $table->string('controlTransferencia',2);
            $table->string('controlOrdCompra',2);
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
        Schema::connection('mov_inventario')->dropIfExists('invtransaccionesmaster');
    }
}
