<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreatePaisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('gentilicio');
            $table->float('latitud');
            $table->float('longitud');
            $table->integer('id_pais')->unique();
            $table->string('estado');
            $table->string('usuario_creador', 50);
            $table->string('usuario_modificador', 50)->nullable();
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
        Schema::dropIfExists('paises');
    }
}
