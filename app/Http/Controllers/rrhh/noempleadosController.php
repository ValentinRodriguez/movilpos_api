<?php

namespace App\Http\Controllers\rrhh;
use Illuminate\Http\Request;

use App\Librerias\rrhh\turnos;
use App\Librerias\globales\pais;
use App\Librerias\rrhh\Nopuesto;
use App\Librerias\rrhh\educacion;
use App\Librerias\empresa\Empresa;
use App\Librerias\globales\bancos;
use Illuminate\Support\Facades\DB;
use App\Librerias\rrhh\estadoCivil;
use App\Librerias\rrhh\noempleados;
use App\Librerias\rrhh\Departamento;
use App\Librerias\rrhh\tipoEmpleado;
use App\Librerias\empresa\sucursales;
use App\Librerias\empresa\tipoMonedas;
use App\Librerias\globales\tipoSangre;
use App\Librerias\empresa\areasEmpresa;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\contabilidadGeneral\cgcatalogo;

class noempleadosController extends ApiResponseController
{
    public function index(Request $request) {
        $noempleados = noempleados::orderBy('id', 'asc')->
                                    join('mov_rrhh.nodepartamentos','mov_rrhh.noempleados.departamento','=','mov_rrhh.nodepartamentos.id')->
                                    join('nopuestos','mov_rrhh.noempleados.id_puesto','=','nopuestos.id_puesto')->
                                    join('mov_globales.ciudades','mov_rrhh.noempleados.id_ciudad','=','mov_globales.ciudades.id_ciudad')->
                                    join('mov_globales.paises','mov_rrhh.noempleados.id_pais','=','mov_globales.paises.id_pais')->
                                    leftjoin('mov_empresa.tipo_monedas','mov_rrhh.noempleados.id_moneda','=','mov_empresa.tipo_monedas.id')->
                                    select('mov_rrhh.noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"),
                                           'mov_rrhh.nodepartamentos.titulo as depto',
                                            'nopuestos.descripcion as puesto',
                                            'mov_globales.ciudades.descripcion as ciudad',
                                            'mov_globales.paises.descripcion as pais',
                                            'mov_empresa.tipo_monedas.divisa as divisa','mov_empresa.tipo_monedas.simbolo as simbolo_moneda'
                                    )->
                                    where('mov_rrhh.noempleados.estado','=','ACTIVO')->
                                    get();

        return $this->successResponse($noempleados, $request->urlRequest);
    }    

    public function cajeros(Request $request) {
        $cajero = noempleados::orderBy('id', 'asc')->
                                join('mov_rrhh.nodepartamentos','mov_rrhh.noempleados.departamento','=','mov_rrhh.nodepartamentos.id')->
                                join('nopuestos','mov_rrhh.noempleados.id_puesto','=','nopuestos.id_puesto')->
                                join('mov_globales.ciudades','mov_rrhh.noempleados.id_ciudad','=','mov_globales.ciudades.id_ciudad')->
                                join('mov_globales.paises','mov_rrhh.noempleados.id_pais','=','mov_globales.paises.id_pais')->
                                leftjoin('mov_empresa.tipo_monedas','mov_rrhh.noempleados.id_moneda','=','mov_empresa.tipo_monedas.id')->
                                select('mov_rrhh.noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"),
                                       'mov_rrhh.nodepartamentos.titulo as depto',
                                       'nopuestos.descripcion as puesto',
                                       'mov_globales.ciudades.descripcion as ciudad',
                                       'mov_globales.paises.descripcion as pais',
                                       'mov_empresa.tipo_monedas.divisa as divisa','mov_empresa.tipo_monedas.simbolo as simbolo_moneda'
                                )->
                                where([['.noempleados.id_puesto','=', 2],['mov_rrhh.noempleados.estado','=','ACTIVO']])->
                                get();
        return $this->successResponse($cajero, $request->urlRequest);
    }

    public function bancos(Request $request){
        $bancos = bancos::where('bancos.estado','=','ACTIVO')->get();
        return $this->successResponse($bancos, $request->urlRequest);
    }

    public function show(Request $request,$id){
        // return response()->json($id);
        $empleado = noempleados::where('mov_rrhh.noempleados.id','=',$id)->
                                 join('turnos','turnos.id','=','mov_rrhh.noempleados.turno')->
                                 select('mov_rrhh.noempleados.*','turnos.horario_inicial','turnos.horario_final')
                                 ->first();
        return $this->successResponse($empleado, $request->urlRequest);
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        // return response()->json($datos);

        $messages = ['required' => 'El campo :attribute es requerido.',
                     'unique'   => 'El campo :attribute debe ser unico',
                     'numeric'  => 'El campo :attribute debe ser numerico'];

        $validator = validator($datos, [
            'calle'            => 'required',
            'cedula'           => 'required',
            'cod_cia'          => 'required', 
            'departamento'     => 'required',
            'email'            => 'required',
            'fecha_entrada'    => 'required',
            'tipo_sueldo'      => 'required',
            'fecha_inicio_c'   => 'required',
            'fecha_nacimiento' => 'required',
            'area'             => 'required',
            'id_puesto'        => 'required',
            'id_pais'          => 'required',
            'id_region'        => 'required',
            'id_provincia'     => 'required',
            'id_municipio'     => 'required',
            'id_ciudad'        => 'required',
            'suc_id'           => 'required',
            'licencia'         => 'required',
            'paga_seg'         => 'required',
            'poncha'           => 'required',
            'primernombre'     => 'required', 
            'segundonombre'    => 'required',
            'primerapellido'   => 'required',
            'is_sup'           => 'required',
            'segundoapellido'  => 'required',
            'sexo'             => 'required',
            'cod_tss'          => 'required',
            'sueldo'           => 'required',
            'telefono'         => 'required',
            'cuenta_no'        => 'required',
            'tipo_empleado'    => 'required',
            'turno'            => 'required', 
            'nomina'           => 'required',
            'no_cuenta_banco'  => 'required',
            'id_moneda'        => 'required',
            'estado'           => 'required',
            'usuario_creador'  => 'required'
        ],$messages);
                                        
        if ($validator->fails()) {
           $errors =  $validator->errors();
           return $this->errorResponse($errors);
        }
        else {
            try {                
                DB::beginTransaction();    
                    if ($request->hasFile('foto_empleado')) {
                        // Storage::delete('public/'.$producto->imagen);
                        $imagen = $request->file('foto_empleado');
                        $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                        $datos['foto_empleado'] = $request->file('foto_empleado')->storeAs('uploads', 'empleados/'.$nombreImagen, 'public');
                    }          
                    // return response()->json($datos['foto_empleado']);
                    noempleados::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function update(Request $request,  $id) {
        $noempleados = noempleados::find($id);
        
        $datos = $request->all();
        // return response()->json($datos);
        
        $messages = ['required' => 'El campo :attribute es requerido.',
                     'unique'   => 'El campo :attribute debe ser unico',
                     'numeric'  => 'El campo :attribute debe ser numerico'];

        $validator = validator($datos, [
            'calle'            => 'required',
            'cedula'           => 'required',
            'cod_cia'          => 'required', 
            'departamento'     => 'required',
            'email'            => 'required',
            'fecha_entrada'    => 'required',
            'tipo_sueldo'      => 'required',
            'fecha_inicio_c'   => 'required',
            'fecha_nacimiento' => 'required',
            'area'             => 'required',
            'id_puesto'        => 'required',
            'id_pais'          => 'required',
            'id_region'        => 'required',
            'id_provincia'     => 'required',
            'id_municipio'     => 'required',
            'id_ciudad'        => 'required',
            'suc_id'           => 'required',
            'licencia'         => 'required',
            'paga_seg'         => 'required',
            'poncha'           => 'required',
            'primernombre'     => 'required', 
            'segundonombre'    => 'required',
            'primerapellido'   => 'required',
            'is_sup'           => 'required',
            'segundoapellido'  => 'required',
            'sexo'             => 'required',
            'cod_tss'          => 'required',
            'sueldo'           => 'required',
            'telefono'         => 'required',
            'cuenta_no'        => 'required',
            'tipo_empleado'    => 'required',
            'turno'            => 'required', 
            'nomina'           => 'required',
            'no_cuenta_banco'  => 'required',
            'id_moneda'        => 'required',
            'estado'           => 'required',
            'usuario_creador'  => 'required'
        ],$messages);
                                        
        if ($validator->fails()) {
           $errors =  $validator->errors();
           return $this->errorResponse($errors);
        }
        else {
            try {                
                DB::beginTransaction();    
                    if ($request->hasFile('foto_empleado')) {
                        // Storage::delete('public/'.$producto->imagen);
                        $imagen = $request->file('foto_empleado');
                        $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                        $datos['foto_empleado'] = $request->file('foto_empleado')->storeAs('uploads', 'empleados/'.$nombreImagen, 'public');
                    }          
                    // return response()->json($datos['foto_empleado']);
                    $noempleados->update($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function buscaVendedores(Request $request){
        $empleado = noempleados::where('mov_rrhh.noempleados.id_puesto','=',3)->
                                 select('mov_rrhh.noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"))->
                                 get();
        return $this->successResponse($empleado, $request->urlRequest);
    }

    public function buscaSupervisores(Request $request,$id){
        $supervisor = noempleados::where([['departamento','=',$id],['mov_rrhh.noempleados.is_sup','=','si']])->
                                 select('mov_rrhh.noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"))->
                                 get();
                                 
        return $this->successResponse($supervisor, $request->urlRequest);
    }
       
    public function buscaCedula(Request $request){
        $cedula = $request->get('cedula');        
        $empleado = noempleados::where('mov_rrhh.noempleados.cedula','=',$cedula)->get();
        return $this->successResponse($empleado, $request->urlRequest);
    }

    public function autollenado(Request $request){ 
        try {
            $respuesta = array();

            $horario = turnos::where('estado','=','activo')->get();
            $areas = areasEmpresa::where('estado','=','activo')->get();
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
            $cuentas = cgcatalogo::where([['estado','=','activo'],['nivel','=',3]])->get();

            $_horario = array("label" => 'horarios', "data" => $horario, "icono" => 'fas fa-dolly-flatbed');
            $_areas = array("label" => 'areas', "data" => $areas, "icono" => 'fas fa-dolly-flatbed');
            $_nopuestos = array("label" => 'puestos', "data" => $nopuestos, "icono" => 'fas fa-dolly-flatbed');
            $_departamento = array("label" => 'departamento', "data" => $departamento, "icono" => 'fas fa-dolly-flatbed');
            $_empresa = array("label" => 'empresas', "data" => $empresa, "icono" => 'fas fa-dolly-flatbed');
            $_sucursales = array("label" => 'sucursal', "data" => $sucursales, "icono" => 'fas fa-dolly-flatbed');
            $_monedas = array("label" => 'monedas', "data" => $monedas, "icono" => 'fas fa-dolly-flatbed');
            $_paises = array("label" => 'mov_globales.paises', "data" => $paises, "icono" => 'fas fa-dolly-flatbed');
            $_bancos= array("label" => 'bancos', "data" => $bancos, "icono" => 'fas fa-dolly-flatbed');
            $_educacion= array("label" => 'educacion', "data" => $educacion, "icono" => 'fas fa-dolly-flatbed');
            $_estadoCivil= array("label" => 'estadoCivil', "data" => $estadoCivil, "icono" => 'fas fa-dolly-flatbed');
            $_tipoEmpleado= array("label" => 'tipoEmpleado', "data" => $tipoEmpleado, "icono" => 'fas fa-dolly-flatbed');
            $_tipoSangre= array("label" => 'tipoSangre', "data" => $tipoSangre, "icono" => 'fas fa-dolly-flatbed');
            $_cuentas= array("label" => 'cuentas', "data" => $cuentas, "icono" => 'fas fa-dolly-flatbed');

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
            array_push($respuesta,$_cuentas);
            array_push($respuesta,$_areas);

            return $this->successResponse($respuesta, $request->urlRequest); 

        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
    } 
}
