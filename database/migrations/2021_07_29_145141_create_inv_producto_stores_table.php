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
            $table->string('titulo');
            $table->smallInteger('cantidadLim')->nullable();
            $table->smallInteger('categoria');
            $table->text('descripcion');
            $table->text('documentosDigitales')->nullable();
            $table->date('fechaLimDescarga')->nullable();
            $table->date('fecha_rebaja')->nullable();
            $table->smallInteger('limDescargas')->nullable();
            $table->float('precio');
            $table->float('precio_rebajado')->nullable();
            $table->smallInteger('stock');
            $table->string('tipo',15);
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
