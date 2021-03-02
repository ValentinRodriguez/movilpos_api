<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->id();
            $table->string('email',50);
            $table->string('usuario');
            $table->string('perfil');
            $table->text('modulos');
            $table->text('programas')->nullable();
            $table->text('notificaciones')->nullable();
            $table->text('usuario_creador')->nullable();
            $table->text('usuario_modificador')->nullable();
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
        Schema::dropIfExists('rols');
    }
}
