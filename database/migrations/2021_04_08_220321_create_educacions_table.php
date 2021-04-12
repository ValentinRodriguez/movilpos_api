<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducacionsTable extends Migration
{
    public function up()
    {
        Schema::create('educacion', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',50);
            $table->string('usuario_creador',50);
            $table->string('estado',20);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('educacion');
    }
}
