<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Librerias\noempleados;
use App\Librerias\tipoMonedas;
use App\Librerias\Nopuesto;
use App\Librerias\Departamento;
use App\Librerias\Empresa;
use App\librerias\pais;
use App\librerias\bancos;
use App\librerias\educacion;
use App\librerias\estadoCivil;
use App\librerias\tipoEmpleado;
use App\librerias\tipoSangre;
use App\librerias\turnos;
use App\librerias\sucursales;

class noempleadosController extends ApiResponseController
{
    public function index(){
        $noempleados = noempleados::orderBy('id_numemp', 'asc')->
                                join('nodepartamentos','noempleados.departamento','=','nodepartamentos.id')->
                                join('nopuestos','noempleados.id_puesto','=','nopuestos.id_puesto')->
                                join('ciudades','noempleados.id_ciudad','=','ciudades.id_ciudad')->
                                join('paises','noempleados.id_pais','=','paises.id_pais')->
                                leftjoin('tipo_monedas','noempleados.id_moneda','=','tipo_monedas.id')->
                                select('noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"),
                                        'nodepartamentos.titulo as depto',
                                       'nopuestos.descripcion as puesto',
                                       'ciudades.descripcion as ciudad',
                                       'paises.descripcion as pais',
                                       'tipo_monedas.divisa as divisa','tipo_monedas.simbolo as simbolo_moneda'
                                )->
                                where('noempleados.estado','=','ACTIVO')->
                                get();

        return $this->successResponse($noempleados);
    }

    

    public function cajeros()
{
        $cajero = noempleados::orderBy('id_numemp', 'asc')->
                                join('nodepartamentos','noempleados.departamento','=','nodepartamentos.id')->
                                join('nopuestos','noempleados.id_puesto','=','nopuestos.id_puesto')->
                                join('ciudades','noempleados.id_ciudad','=','ciudades.id_ciudad')->
                                join('paises','noempleados.id_pais','=','paises.id_pais')->
                                leftjoin('tipo_monedas','noempleados.id_moneda','=','tipo_monedas.id')->
                                select('noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"),
                                       'nodepartamentos.titulo as depto',
                                       'nopuestos.descripcion as puesto',
                                       'ciudades.descripcion as ciudad',
                                       'paises.descripcion as pais',
                                       'tipo_monedas.divisa as divisa','tipo_monedas.simbolo as simbolo_moneda'
                                )->
                                where([['.noempleados.id_puesto','=', 2],['noempleados.estado','=','ACTIVO']])->
                                get();
        return $this->successResponse($cajero);
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

    public function store(Request $request)
    {
        $datos = $request->all();

        return response()->json($datos);

        $messages = ['required' => 'El campo :attribute es requerido.',
                     'unique'   => 'El campo :attribute debe ser unico',
                     'numeric'  => 'El campo :attribute debe ser numerico'];

        $validator = validator($datos, ["descripcion"     => 'required',
                                       "titulo"          => 'required',
                                       "sueldo_inicial"  => 'required',
                                       "usuario_creador" => 'required',
                                       "estado"          => 'required'],
                                        $messages);
                                        
        if ($validator->fails()) {
           $errors =  $validator->errors();
           return $this->errorResponse($errors);
        }
        else {
            try {                
                DB::beginTransaction();              
                    noempleados::create($datos);
                DB::commit();
                return $this->successResponse($datos);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }
        }

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

            $horario = turnos::where('estado','=','activo')->get();
            $nopuestos = Nopuesto::orderBy('id', 'asc')->where('estado','=','activo')->get();                                
            $departamento = Departamento::where('estado','=','activo')->get();
            $monedas = tipoMonedas::where('estado','=','activo')->get();
            $empresa = Empresa::where('estado','=','activo')->get();            
            $paises = pais::orderBy('created_at', 'desc')->get();
            $bancos = bancos::where('estado','=','activo')->get();
            $educacion = educacion::all();
            $estadoCivil = estadoCivil::all();
            $tipoEmpleado = tipoEmpleado::all();
            $tipoSangre = tipoSangre::all();
            $sucursales = sucursales::where('estado','=','activo')->get();

            $_horario = array("label" => 'horarios', "data" => $horario, "icono" => 'fas fa-dolly-flatbed');
            $_nopuestos = array("label" => 'puestos', "data" => $nopuestos, "icono" => 'fas fa-dolly-flatbed');
            $_departamento = array("label" => 'departamento', "data" => $departamento, "icono" => 'fas fa-dolly-flatbed');
            $_empresa = array("label" => 'empresas', "data" => $empresa, "icono" => 'fas fa-dolly-flatbed');
            $_sucursales = array("label" => 'sucursal', "data" => $sucursales, "icono" => 'fas fa-dolly-flatbed');
            $_monedas = array("label" => 'monedas', "data" => $monedas, "icono" => 'fas fa-dolly-flatbed');
            $_paises = array("label" => 'paises', "data" => $paises, "icono" => 'fas fa-dolly-flatbed');
            $_bancos= array("label" => 'bancos', "data" => $bancos, "icono" => 'fas fa-dolly-flatbed');
            $_educacion= array("label" => 'educacion', "data" => $educacion, "icono" => 'fas fa-dolly-flatbed');
            $_estadoCivil= array("label" => 'estadoCivil', "data" => $estadoCivil, "icono" => 'fas fa-dolly-flatbed');
            $_tipoEmpleado= array("label" => 'tipoEmpleado', "data" => $tipoEmpleado, "icono" => 'fas fa-dolly-flatbed');
            $_tipoSangre= array("label" => 'tipoSangre', "data" => $tipoSangre, "icono" => 'fas fa-dolly-flatbed');

            array_push($respuesta,$_horario);
            array_push($respuesta,$_paises);
            array_push($respuesta,$_nopuestos);
            array_push($respuesta,$_departamento);
            array_push($respuesta,$_sucursales);
            array_push($respuesta,$_empresa);
            array_push($respuesta,$_monedas);
            array_push($respuesta,$_bancos);
            array_push($respuesta,$_educacion);
            array_push($respuesta,$_estadoCivil);
            array_push($respuesta,$_tipoEmpleado);
            array_push($respuesta,$_tipoSangre);

            return $this->successResponse($respuesta); 

        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage());
        }
    } 
}
