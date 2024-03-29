<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoempleadosTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_rrhh')->create('mov_rrhh.noempleados', function (Blueprint $table) {
            $table->id();
            $table->string('primernombre',100);
            $table->string('segundonombre',100)->nullable();
            $table->string('primerapellido',100)->nullable();
            $table->string('segundoapellido',100);
            $table->integer('cod_cia')->foreign()->references('cod_cia')->on('empresas');
            $table->string('cod_tss',20);
            $table->string('codigo_es',20)->nullable();
            $table->string('codigo_retiro_bco',20)->nullable();
            $table->char('credito',2)->nullable();
            $table->char('educacion',3)->nullable();
            $table->integer('departamento')->foreign()->references('departamento')->on('mov_rrhh.nodepartamentos');
            $table->date('fecha_inicio_c');
            $table->date('fecha_suspencion')->nullable();
            $table->date('fecha_ultimo_aumento')->nullable();
            $table->integer('suc_id')->foreign()->references('id')->on('sucursales');
            $table->integer('id_puesto')->foreign()->references('id_puesto')->on('nopuestos');
            $table->string('id_pais')->foreign()->references('id_pais')->on('mov_globales.paises');
            $table->string('id_municipio')->foreign()->references('id_pais')->on('mov_globales.paises');
            $table->string('id_provincia')->foreign()->references('id_pais')->on('mov_globales.paises');
            $table->string('id_region')->foreign()->references('id_pais')->on('mov_globales.paises');
            $table->string('id_ciudad')->foreign()->references('id_ciudad')->on('mov_globales.ciudades');
            $table->string('id_sector')->nullable();
            $table->string('calle',100);
            $table->string('cedula',20)->unique();
            $table->string('codbancodestino',20)->nullable();
            $table->smallInteger('cod_nac')->nullable();
            $table->string('email',50)->foreign()->references('id_pais')->on('mov_globales.paises');
            $table->char('digiverbancodestino',2)->nullable();
            $table->string('cuenta_no',25)->foreign()->references('cuenta_no')->on('cgcatalogo');
            $table->string('estado_civil',1)->nullable(); // Aqui se va acoloar un combo con CASADO, SOLTERO, UNION LIBRE
            $table->date('fecha_nacimiento');
            $table->date('fecha_entrada')->nullable();
            $table->date('fecha_termino_contrato')->nullable(); //Esta es la fecha del compromiso de la empresa con el empleado
            $table->text('foto_empleado')->nullable();
            $table->string('licencia',11);
            $table->char('is_sup', 2);
            $table->string('no_cuenta_banco',20);            
            $table->string('monto_adicional')->nullable(); // Este valor es para ingresos adicionales fijos que la empresa deea darle al empleado
            $table->smallInteger('nomina');
            $table->string('sueldo');
            $table->string('telefono',20);
            $table->string('observacion')->nullable();
            $table->char('paga_seg',2);
            $table->char('poncha',2);
            $table->char('sexo',1);
            $table->smallInteger('tasa')->nullable();
            $table->string('tipocuenta',20)->nullable();
            $table->string('estadolegal',50)->nullable();
            $table->smallInteger('tipo_sangre')->nullable();
            $table->smallInteger('area');
            $table->integer('turno')->foreign()->references('id')->on('turnos');
            // $table->integer('id_nivel');
            $table->string('id_moneda')->foreign()->references('id_moneda')->on('monedas');
            $table->string('tipo_empleado',50);  //Si el empleado es quincenal semanal
            // $table->string('codigobancodestino',8);
            // $table->string('cuentabancaria',50);
            // $table->string('codigoretirocomercial',50);
            $table->string('estado',15);
            $table->string('usuario_creador',100);
            $table->string('usuario_modificador',100)->nullable();
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
        Schema::connection('mov_rrhh')->dropIfExists('mov_rrhh.noempleados');
    }
}