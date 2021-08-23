<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_globales')->create('sectores', function (Blueprint $table) {
            $table->id();
            $table->char('id_sector',10);
            $table->char('id_ciudad',10);
            $table->string('descripcion',100);
            $table->char('codigo_postal',10)->nullable();
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
        Schema::connection('mov_globales')->dropIfExists('sectores');
    }
}
