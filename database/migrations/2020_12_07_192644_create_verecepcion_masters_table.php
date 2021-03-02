<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerecepcionMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verecepcion_masters', function (Blueprint $table) {
            $table->id();
            $table->string('num_oc');
            $table->integer('tipo_cliente')->foreign('tipo_cliente')->references('tipo_cliente')->on('veclientes');
            $table->Integer('sec_cliente')->foreign('sec_cliente')->references('sec_cliente')->on('veclientes');
            $table->string('recibe');
            $table->string('entrega');
            $table->date('fecha_entrega');
            $table->string('marca');
            $table->string('modelo');
            $table->string('placa');
            $table->string('ano');
            $table->string('chasis');
            $table->string('color');
            $table->string('tipo');
            $table->string('km');
            $table->text('galeriaImagenes');
            $table->string('estado');
            $table->char('usuario_creador',50);
            $table->char('usuario_modificador',50);
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
        Schema::dropIfExists('verecepcion_masters');
    }
}
