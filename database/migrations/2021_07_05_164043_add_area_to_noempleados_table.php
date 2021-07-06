<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAreaToNoempleadosTable extends Migration
{
    public function up()
    {
        Schema::table('noempleados', function (Blueprint $table) {
            $table->smallInteger('area')->after('id_puesto')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('noempleados', function (Blueprint $table) {
            $table->dropColumn('area');
        });
    }
}
