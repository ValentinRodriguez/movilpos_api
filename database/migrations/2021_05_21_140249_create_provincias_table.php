<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_globales')->create('provincias', function (Blueprint $table) {
            $table->id();
            $table->integer('id_provincia');
            $table->integer('id_region');
            $table->string('descripcion',100);            
            $table->string('estado',15);
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
        Schema::connection('mov_globales')->dropIfExists('provincias');
    }
}
