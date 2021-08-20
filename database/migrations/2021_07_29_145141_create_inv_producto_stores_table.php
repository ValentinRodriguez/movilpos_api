<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvProductoStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_tienda')->create('inv_producto_stores', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->integer('tipo_producto');
            // $table->foreign('tipo_producto')->references('id_tipo')->on('vov_inventariotipo_productos');
            $table->integer('id_categoria');
            // $table->foreign('id_categoria')->references('id_categoria')->on('vov_inventariocategorias');
            $table->integer('id_brand');
            // $table->foreign('id_brand')->references('id_brand')->on('vov_inventariobrands');
            $table->text('descripcion');
            $table->integer('id_propiedad');
            // $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades');
            $table->string('codigo',30)->unique();
            $table->string('origen',50)->default('debito');
            $table->integer('existenciaMinima');
            $table->integer('existenciaMaxima')->nullable();
            $table->char('controlDeExistencias',2)->nullable();
            $table->char('descuento',2)->nullable();
            $table->integer('id_bodega')->default(1);
            // $table->foreign('id_bodega')->references('id_bodega')->on('bodegas');
            $table->string('controlItbis',2);
            $table->text('ultimoproveedor')->nullable();
            $table->integer('cod_sp')->nullable();
            $table->integer('cod_sp_sec')->nullable();
            $table->dateTime('ultimaFechaCompra')->nullable();
            $table->float('precio_compra');
            $table->float('precio_venta');
            $table->float('costo');
            $table->dateTime('fechaInicioDescuento')->nullable();
            $table->dateTime('fechaFinDescuento')->nullable();
            $table->float('porcientodescuento')->nullable();
            $table->float('ventas')->nullable();
            $table->float('devoluciones')->nullable();            
            $table->text('galeriaImagenes');
            $table->string('estado', 10);
            $table->string('usuario_creador',50);
            $table->string('tienda',50);
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
        Schema::connection('mov_tienda')->dropIfExists('inv_producto_stores');
    }
}
