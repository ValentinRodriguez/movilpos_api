<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddComposicionInvProductoStoresTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_tienda')->table('inv_producto_stores', function (Blueprint $table) {
            $table->text('composicion')->after('descripcion')->nullable();
        });
    }

    public function down()
    {
        Schema::connection('mov_tienda')->table('inv_producto_stores', function (Blueprint $table) {
            $table->dropColumn('composicion');
        });
    }
}
