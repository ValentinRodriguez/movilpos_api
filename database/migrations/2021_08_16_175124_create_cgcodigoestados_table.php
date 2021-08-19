<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgcodigoestadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cgcodigoestados', function (Blueprint $table) {
            $table->id();
            $table->string('id_estado');
            $table->string('descripcion_esp',100)->require();
            $table->string('descripcion_ing',100);
            $table->string('estado',10)->require();
            $table->string('grupo',100);
            $table->integer('orden_grupo');
            $table->string('tipo_estado',20);
            $table->integer('signo'); // 1-POSITIVO      2-NEGATIVO
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
        Schema::dropIfExists('cgcodigoestados');
    }
}
