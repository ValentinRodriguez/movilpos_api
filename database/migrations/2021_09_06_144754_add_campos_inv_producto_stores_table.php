<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposInvProductoStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_tienda')->table('inv_producto_stores', function (Blueprint $table) {
            $table->string('estado',20)->after('tipo');
            $table->string('vendedor',50)->after('titulo');
            $table->string('tienda',50)->after('titulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mov_tienda')->table('inv_producto_stores', function (Blueprint $table) {
            $table->dropColumn('estado');
            $table->dropColumn('vendedor');
            $table->dropColumn('tienda');
        });
    }
}
