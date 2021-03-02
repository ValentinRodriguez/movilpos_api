<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvProductosTable extends Migration
{
    public function up()
    {
        Schema::create('inv_productos', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->integer('tipo_producto');
            $table->foreign('tipo_producto')->references('id_tipo')->on('tipo_productos');
            $table->integer('id_tipoinventario');
            $table->foreign('id_tipoinventario')->references('id_tipoinventario')->on('invtipos_inventarios');
            $table->integer('id_categoria');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            $table->integer('id_brand');
            $table->foreign('id_brand')->references('id_brand')->on('brands');
            $table->text('descripcion');
            $table->string('chasis',50);
            $table->string('motor',30);
            $table->char('fabricacion',5);
            $table->smallInteger('asientos');
            $table->smallInteger('asientosAd')->nullable();
            $table->integer('id_propiedad');
            $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades');
            $table->string('codigo',30)->unique();
            $table->string('codigo_referencia',20)->nullable();
            $table->string('origen',50)->default('debito');
            $table->integer('existenciaMinima');
            $table->integer('existenciaMaxima')->nullable();
            $table->char('controlDeExistencias',2)->nullable();
            $table->char('descuento',2)->nullable();
            // $table->text('unidadMed')->nullable();
            $table->integer('id_bodega')->default(1);
            $table->foreign('id_bodega')->references('id_bodega')->on('bodegas');
            $table->string('controlItbis',2);
            // $table->float('factor_c')->default(1);
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
            $table->char('editando', 1)->default('0');
            $table->text('usuario_editando')->nullable();
            $table->string('estado', 10);
            $table->text('usuario_creador');
            $table->text('usuario_modificador')->nullable();
            $table->timestamps();

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('inv_productos');
    }
}