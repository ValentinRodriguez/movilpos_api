<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHoraToTurnosTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_rrhh')->table('turnos', function (Blueprint $table) {
            $table->datetime('horario_inicial')->after('descripcion')->nullable();
            $table->datetime('horario_final')->after('horario_inicial')->nullable();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_rrhh')->table('turnos', function (Blueprint $table) {
            $table->dropColumn('horario_inicial');
            $table->dropColumn('horario_final');
        });
    }
}
