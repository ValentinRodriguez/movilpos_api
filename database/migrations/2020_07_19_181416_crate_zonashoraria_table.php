<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateZonashorariaTable extends Migration
{    
    public function up()
    {
        Schema::connection('mov_globales')->create('zonas_horaria', function (Blueprint $table) {
            $table->id();
            $table->string('id_zonahoraria',30)->nullable();
            $table->unique('id_zonahoraria');
            $table->string('detalle_zona',100);
            $table->integer('parametro_zona')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_globales')->dropIfExists('zonas_horaria');
    }
}
