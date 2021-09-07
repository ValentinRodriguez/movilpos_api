<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtributosStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_tienda')->create('atributos_stores', function (Blueprint $table) {
            $table->id();
            $table->char('tipo',10)->nullable();
            $table->text('descripcion');
            $table->smallInteger('id_atributo');
            $table->text('atributo')->nullable();
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
        Schema::connection('mov_tienda')->dropIfExists('atributos_stores');
    }
}
