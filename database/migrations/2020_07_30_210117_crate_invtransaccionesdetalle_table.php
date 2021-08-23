<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateInvtransaccionesdetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_inventario')->create('invtransaccionesdetalle', function (Blueprint $table) {
            $table->id('rowid');
            $table->integer('num_doc')->index()->foreign('num_doc')->references('num_doc')->on('invtransaccionesmaster');
            $table->integer('numerosecuencia')->index()->foreign()->references('numerosecuencia')->on('invtransaccionesmaster');
            $table->foreign('num_doc')->references('num_doc')->on('invtransaccionesmaster');
            $table->integer('area')->foreign()->references('area')->on('areas');
            $table->string('codigo',30)->foreign()->references('codigo')->on('inv_productos');
            // $table->text('titulo_producto');
            $table->integer('id_tipomov');
            $table->integer('id_bodega');
            $table->integer('cantidad1');
            $table->integer('cantidad');
            $table->float('precio_venta');
            $table->float('costo');
            $table->float('margen');
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
        Schema::connection('mov_inventario')->dropIfExists('invtransaccionesdetalle');
    }
}
