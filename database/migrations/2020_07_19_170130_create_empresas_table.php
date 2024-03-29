<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_empresa')->create('empresas', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_cia')->index();
            $table->string('nombre', 100)->unique();
            $table->text('telefono_empresa');
            $table->text('email_empresa');
            $table->text('calle');
            $table->text('web')->nullable();
            $table->text('contacto');
            $table->text('telefono_contacto');
            $table->text('logo')->nullable();
            $table->text('moneda');
            $table->string('valuacion_inv',10);
            $table->char('tipo_cuadre',2);
            $table->integer('id_pais');
            $table->integer('id_ciudad');
            $table->smallInteger('id_region');
            $table->smallInteger('id_municipio');
            $table->smallInteger('id_provincia');
            $table->smallInteger('id_sector')->nullable();
            $table->char('tipo_documento',1);
            $table->char('tipo_empresa',1);
            $table->string('documento',30);
            $table->integer('limite_usuarios');
            $table->string('estado',30);
            $table->char('empresa_verde',2);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_empresa')->dropIfExists('empresas');
    }
}
