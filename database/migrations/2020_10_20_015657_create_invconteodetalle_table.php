<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvconteodetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_inventario')->create('invconteodetalle', function (Blueprint $table) {
            $table->id();
            $table->integer('num_doc');
            $table->foreign('num_doc')->references('num_doc')->on('invconteo');
            $table->string('codigo');
            $table->foreign('codigo')->references('codigo')->on('inv_productos');
            $table->float('cantidad');
            $table->float('costo');
            $table->float('valor');
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
        Schema::connection('mov_inventario')->dropIfExists('invconteodetalle');
    }
}
