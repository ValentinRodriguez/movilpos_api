<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNopuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nopuestos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_puesto')->unique();
            $table->string('titulo',100);
            $table->float('sueldo_inicial')->default('0');
            $table->float('sueldo_actual')->default('0');
            $table->TEXT('descripcion')->nullable();
            $table->string('estado',100);
            $table->string('usuario_creador',100);
            $table->string('usuario_modificador',100)->nullable();
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
        Schema::dropIfExists('nopuestos');
    }
}
