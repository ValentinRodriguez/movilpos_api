<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvusuariosMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_usuarios')->create('invusuariosmovimientos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tipomov')->index();
            $table->foreign('id_tipomov')->references('id_tipomov')->on('mov_inventario.invtiposmovimientos');
            $table->string('email',50);
            $table->string('estado',10);
            $table->text('usuario_creador');
            $table->foreign('email')->references('email')->on('mov_usuarios.users');
            $table->unique('id_tipomov','email');
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
        Schema::connection('mov_usuarios')->dropIfExists('invusuariosmovimientos');
    }
}
