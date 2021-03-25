<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $keys = array('cod_sp', 'cod_sp_sec');
            $table->integer('cod_sp');
            $table->integer('cod_sp_sec');
            $table->primary($keys);
            $table->string('nom_sp',50);
            $table->string('dir_sp');
            $table->integer('id_ciudad')->foreign('id_ciudad')->reference('id_ciudad')->on('ciudad');
            $table->integer('id_pais')->foreign('id_pais')->reference('id_pais')->on('pais');
            $table->string('tel_sp',20);
            $table->string('fax_sp',20)->nullable();
            $table->string('cont_sp');
            $table->text('moneda');
            $table->integer('cond_pago')->foreign('cond_pago')->reference('cond_pago')->on('cond_pago');
            $table->text('documento');
            $table->string('email',50);
            $table->string('tipo_doc');
            $table->string('cuenta_no')->foreign('cuenta_no')->reference('cuenta_no')->on('cgcatalogo');
            $table->string('estado',20);
            $table->string('usuario_creador',100);
            $table->string('usuario_modificador',100)->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
