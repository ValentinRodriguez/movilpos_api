<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToVeclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_ventas')->table('mov_ventas.veclientes', function (Blueprint $table) {
            $table->smallInteger('id_region')->after('id_zonalocal');
            $table->smallInteger('id_municipio')->after('id_zonalocal');
            $table->smallInteger('id_provincia')->after('id_zonalocal');
            $table->smallInteger('id_sector')->after('id_zonalocal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mov_ventas')->table('mov_ventas.veclientes', function (Blueprint $table) {
            $table->dropColumn('id_region');
            $table->dropColumn('id_municipio');
            $table->dropColumn('id_provincia');
            $table->dropColumn('id_sector');
        });
    }
}
