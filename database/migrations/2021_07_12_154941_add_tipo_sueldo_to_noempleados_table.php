<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipoSueldoToNoempleadosTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_rrhh')->table('mov_rrhh.noempleados', function (Blueprint $table) {
            $table->char('tipo_sueldo',1)->after('tipo_empleado')->nullable();
        });
    }

    public function down()
    {
        Schema::connection('mov_rrhh')->table('mov_rrhh.noempleados', function (Blueprint $table) {
            $table->dropColumn('tipo_sueldo');
        });
    }
}
