<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportistas', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_transportista');
            $table->integer('sec_transp');
            $table->string('nombre',50);
            $table->string('cedula',15);
            $table->string('calle',50);
            $table->char('casa_num',5);
            $table->smallInteger('id_ciudad');
            $table->smallInteger('id_pais');
            $table->smallInteger('id_region');
            $table->smallInteger('id_provincia');
            $table->smallInteger('id_municipio');
            $table->smallInteger('id_sector');
            $table->string('telefono',20);
            $table->string('estado',20);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable();
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
        Schema::dropIfExists('transportistas');
    }
}
