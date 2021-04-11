<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Librerias\noempleados;
use App\Librerias\tipoMonedas;
use App\Librerias\Nopuesto;
use App\Librerias\Departamento;
use App\Librerias\puertos;
use App\Librerias\Empresa;
use App\librerias\pais;
use App\librerias\bancos;

class noempleadosController extends ApiResponseController
{
    public function index(){
        $noempleados = noempleados::orderBy('id_numemp', 'asc')->
                                join('nodepartamentos','noempleados.departamento','=','nodepartamentos.id')->
                                join('nopuestos','noempleados.id_puesto','=','nopuestos.id_puesto')->
                                join('ciudades','noempleados.id_ciudad','=','ciudades.id_ciudad')->
                                join('paises','noempleados.id_pais','=','paises.id_pais')->
                                leftjoin('tipo_monedas','noempleados.id_moneda','=','tipo_monedas.id')->
                                select('noempleados.*','nodepartamentos.titulo as depto',
                                       'nopuestos.descripcion as puesto',
                                       'ciudades.descripcion as ciudad',
                                       'paises.descripcion as pais',
                                       'tipo_monedas.divisa as divisa','tipo_monedas.simbolo as simbolo_moneda'
                                )->
                                where('noempleados.estado','=','ACTIVO')->
                                get();

        return $this->successResponse($noempleados);
    }

    public function bancos(){
        $bancos = bancos::where('bancos.estado','=','ACTIVO')->get();
        return $this->successResponse($bancos);
    }

    public function show($id){
        $empleado = noempleados::find($id);
        if ($empleado == null){
            return $this->errorResponse($empleado);
        }
        return $this->successResponse($empleado);
    }


    public function buscaVendedores(){
        $empleado = noempleados::where('noempleados.is_vend','=','si')->
                                 select('noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"))->
                                 get();
        if ($empleado == null){
            return $this->errorResponse($empleado);
        }
        return $this->successResponse($empleado);
    }

    public function buscaSupervisores($id){
        $supervisor = noempleados::where([['departamento','=',$id],['noempleados.is_sup','=','si']])->
                                 select('noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"))->
                                 get();
        if ($supervisor == null){
            return $this->errorResponse($supervisor);
        }
        return $this->successResponse($supervisor);
    }
       
    public function autollenado(){ 
        try {
            $respuesta = array();

            $nopuestos = Nopuesto::orderBy('id', 'asc')->where('estado','=','activo')->get();
                                
            $departamento = Departamento::orderBy('id', 'asc')->get();

            $monedas = tipoMonedas::orderBy('created_at', 'desc')->get();

            $empresa = Empresa::orderBy('created_at', 'desc')->get();
            
            $paises = pais::orderBy('created_at', 'desc')->get();

            $_nopuestos = array("label" => 'puestos', "data" => $nopuestos, "icono" => 'fas fa-dolly-flatbed');
            $_departamento = array("label" => 'departamento', "data" => $departamento, "icono" => 'fas fa-dolly-flatbed');
            $_empresa = array("label" => 'empresa', "data" => $empresa, "icono" => 'fas fa-dolly-flatbed');
            $_monedas = array("label" => 'monedas', "data" => $monedas, "icono" => 'fas fa-dolly-flatbed');
            $_paises = array("label" => 'paises', "data" => $paises, "icono" => 'fas fa-dolly-flatbed');

            array_push($respuesta,$_paises);
            array_push($respuesta,$_nopuestos);
            array_push($respuesta,$_departamento);
            array_push($respuesta,$_empresa);
            array_push($respuesta,$_monedas);

            return $this->successResponse($respuesta); 

        } catch (\Exception $e ){
            return $this->errorResponse($e);
        }
    } 
}
