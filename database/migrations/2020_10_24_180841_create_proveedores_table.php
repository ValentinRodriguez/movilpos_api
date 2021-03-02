<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->integer('cod_sp');
            $table->integer('cod_sp_sec');
            $table->primary('cod_sp','cod_sp_sec');
            $table->text('nom_sp');
            $table->text('dir_sp');
            $table->integer('id_ciudad')->foreign('id_ciudad')->reference('id_ciudad')->on('ciudad');
            $table->integer('id_pais')->foreign('id_pais')->reference('id_pais')->on('pais');
            $table->text('tel_sp');
            $table->text('fax_sp');
            $table->text('cont_sp');
            $table->text('moneda');
            $table->integer('cond_pago')->foreign('cond_pago')->reference('cond_pago')->on('cond_pago');
            $table->text('documento');
            $table->text('email',50);
            $table->text('tipo_doc');
            $table->text('cuenta_no')->foreign('cuenta_no')->reference('cuenta_no')->on('cgcatalogo');
            $table->text('estado');
            $table->text('usuario_creador',100);
            $table->text('usuario_modificador',100)->nullable();
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
        Schema::dropIfExists('proveedores');
    }
}
