<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanesTable extends Migration
{
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',20);
            $table->char('tipo',1);
            $table->string('precio',10);
            $table->char('popular',1);
            $table->text('detalles');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('planes');
    }
}
