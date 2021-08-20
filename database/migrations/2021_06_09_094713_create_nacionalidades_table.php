<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNacionalidadesTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_globales')->create('nacionalidades', function (Blueprint $table) {
            $table->id();
            $table->string('pais',30);
            $table->string('nacionalidad',50);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_globales')->dropIfExists('nacionalidades');
    }
}
