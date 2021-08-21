<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNacionalidaToVeclientes extends Migration
{
    public function up()
    {
        Schema::connection('mov_ventas')->table('mov_ventas.veclientes', function (Blueprint $table) {
            $table->smallInteger('nacionalidad')->after('documento')->nullable();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_ventas')->table('mov_ventas.veclientes', function (Blueprint $table) {
            $table->dropColumn('nacionalidad');
        });
    }
}
