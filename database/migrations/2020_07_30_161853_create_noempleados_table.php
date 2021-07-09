<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoempleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noempleados', function (Blueprint $table) {
            $table->string('estado_legal',20);
            $table->id('id_numemp');
            $table->string('primernombre',100)->nullable();
            $table->string('segundonombre',100);
            $table->string('primerapellido',100)->nullable();
            $table->string('segundoapellido',100);
            $table->integer('cod_cia')->foreign()->references('cod_cia')->on('empresas');
            $table->string('cod_tss',20);
            $table->string('codigo_es',20);
            $table->string('codigo_retiro_bco',20);
            $table->char('credito',2);
            $table->char('educacion',3);
            $table->integer('departamento')->foreign()->references('departamento')->on('nodepartamentos');
            $table->date('fecha_inicio_c');
            $table->date('fecha_suspencion');
            $table->date('fecha_ultimo_aumento');
            $table->integer('suc_id')->foreign()->references('id')->on('sucursales');
            $table->integer('id_puesto')->foreign()->references('id_puesto')->on('nopuestos');
            $table->date('horario_final')->nullable();
            $table->date('horario_inicial')->nullable();
            $table->string('id_pais')->foreign()->references('id_pais')->on('paises');
            $table->string('id_municipio')->foreign()->references('id_pais')->on('paises');
            $table->string('id_provincia')->foreign()->references('id_pais')->on('paises');
            $table->string('id_region')->foreign()->references('id_pais')->on('paises');
            $table->string('id_ciudad')->foreign()->references('id_ciudad')->on('ciudades');
            $table->string('calle',100);            
            $table->string('cedula',11)->unique();
            $table->string('codbancodestino',20);
            $table->smallInteger('cod_nac',20);
            $table->string('email',50)->foreign()->references('id_pais')->on('paises');
            $table->char('digiverbancodestino',2);
            $table->string('cuenta_no',25)->foreign()->references('cuenta_no')->on('cgcatalogo');
            $table->string('estado_civil',1); // Aqui se va acoloar un combo con CASADO, SOLTERO, UNION LIBRE
            $table->date('fecha_nacimiento');
            $table->date('fecha_entrada');
            $table->date('fecha_contrato');
            $table->date('fecha_termino_contrato'); //Esta es la fecha del compromiso de la empresa con el empleado
            $table->text('foto_empleado');
            $table->string('licencia',11);
            $table->char('is_sup', 2);
            $table->float('monto_adicional'); // Este valor es para ingresos adicionales fijos que la empresa deea darle al empleado
            $table->smallInteger('nomina');
            $table->float('sueldo');
            
            $table->string('telefono',20);
            $table->string('observacion');
            $table->char('paga_seg',2);
            $table->char('poncha',2);
            $table->char('sexo',1);
            $table->smallInteger('tasa');
            $table->string('tipo_sueldo',50);
            $table->string('tipocuenta',20);
            $table->string('estadolegal',50);
            $table->smallInteger('tipo_sangre');


            $table->integer('turno')->foreign()->references('id')->on('turnos');
            // $table->integer('id_nivel');
            $table->string('id_moneda')->foreign()->references('id_moneda')->on('monedas');
            $table->string('tipo_empleado',50);  //Si el empleado es quincenal semanal
            $table->char('is_vend', 2);
            $table->string('localidad_no',50);
            $table->string('codigobancodestino',8);
            $table->string('cuentabancaria',50);
            $table->string('codigoretirocomercial',50);
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
        Schema::dropIfExists('noempleados');
    }
}
