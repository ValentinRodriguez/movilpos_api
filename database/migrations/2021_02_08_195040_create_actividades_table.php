<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_miscelaneos')->create('actividades', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->datetime('start');
            $table->datetime('end')->nullable();
            $table->datetime('notificacion');
            $table->string('username');
            $table->foreign('username')->references('username')->on('mov_usuarios.users');
            $table->char('enviado',2)->nullable();
            $table->string('estado',50);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_rrhh')->dropIfExists('actividades');
    }
}
