<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAtributosInvProductoStoresTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_tienda')->table('inv_producto_stores', function (Blueprint $table) {
            $table->text('atributos')->after('codigo')->nullable();
        });
    }

    public function down()
    {
        Schema::connection('mov_tienda')->table('inv_producto_stores', function (Blueprint $table) {
            $table->dropColumn('atributos');
        });
    }
}
