<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateInvCuentasMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invcuentasmovimientos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tipomov');
            $table->string('cuenta_no',25);
            $table->foreign('cuenta_no')->references('cuenta_no')->on('cgcatalogo');
            $table->foreign('id_tipomov')->references('id_tipomov')->on('invtiposmovimientos');
            $table->string('estado',100);
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
        Schema::dropIfExists('invcuentasmovimientos');
    }
}
