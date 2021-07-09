<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoCuentaBancoToNoempleadosTable extends Migration
{
    public function up()
    {
        Schema::table('noempleados', function (Blueprint $table) {
            $table->string('no_cuenta_banco')->after('codbancodestino')->nullable();
        });
    }

    public function down()
    {
        Schema::table('noempleados', function (Blueprint $table) {
            $table->dropColumn('no_cuenta_banco');
        });
    }
}
