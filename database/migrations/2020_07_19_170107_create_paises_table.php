<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;
use Illuminate\Support\Facades\DB;
class CreatePaisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_globales')->create('mov_globales.paises', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pais')->unsigned();
            // $table->unique('id_pais');
            $table->string('descripcion');
            $table->string('gentilicio');
            $table->float('latitud');
            $table->float('longitud');
            $table->string('estado');
            $table->string('usuario_creador', 50);
            $table->string('usuario_modificador', 50)->nullable();
            $table->timestamps();
        });
    }   
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');        
            Schema::connection('mov_globales')->dropIfExists('mov_globales.paises');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
