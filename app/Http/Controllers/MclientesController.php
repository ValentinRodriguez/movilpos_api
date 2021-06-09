<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\ApiResponseController;

use App\librerias\Mclientes;
use App\librerias\ve_CondicionesPago;
use App\Librerias\tipo_documento;
use App\Librerias\noempleados;
use App\Librerias\tipoNegocio;
use App\Librerias\tipoClientes;
use App\Librerias\Nacionalidades;
use App\Librerias\pais;

class MclientesController extends ApiResponseController
{
    public function autollenado(){ 
        try {
            $respuesta = array();

            $vendedor = noempleados::where('noempleados.is_vend','=','si')->
                                    select('noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"))->
                                    get();

            $tipo_documento = tipo_documento::orderBy('tipo_documento', 'asc')->
                                    where('estado','=','ACTIVO')->
                                    get();                   
            
            $tipoNegocio = tipoNegocio::orderBy('tipo_negocio', 'asc')->
                                    where('estado','=','ACTIVO')->
                                    get();

            $tipoCliente = tipoClientes::orderBy('tipo_cliente', 'asc')->
                                    where('estado','=','ACTIVO')->
                                    get();

            $condiciones = ve_CondicionesPago::orderBy('id', 'desc')->
                                    where('estado','=','ACTIVO')->
                                    get();
                                    
            $nacionalidades = Nacionalidades::get();

            $paises = pais::get();

            $_vendedor = array("label" => 'vendedor', "data" => $vendedor, "icono" => 'fas fa-dolly-flatbed');
            $_tipo_documento = array("label" => 'tipo documento', "data" => $tipo_documento, "icono" => 'fas fa-dolly-flatbed');
            $_tipoNegocio = array("label" => 'tipo-negocio', "data" => $tipoNegocio, "icono" => 'fas fa-dolly-flatbed');
            $_tipoCliente = array("label" => 'tipo-cliente', "data" => $tipoCliente, "icono" => 'fas fa-dolly-flatbed');
            $_condiciones = array("label" => 'condiciones', "data" => $condiciones, "icono" => 'fas fa-dolly-flatbed');
            $_nacionalidades = array("label" => 'nacionalidades', "data" => $nacionalidades, "icono" => 'fas fa-dolly-flatbed');
            $_paises = array("label" => 'paises', "data" => $paises, "icono" => 'fas fa-dolly-flatbed');

            array_push($respuesta,$_vendedor);
            array_push($respuesta,$_tipo_documento);
            array_push($respuesta,$_tipoNegocio);
            array_push($respuesta,$_tipoCliente);
            array_push($respuesta,$_condiciones);
            array_push($respuesta,$_nacionalidades);
            array_push($respuesta,$_paises);

            return $this->successResponse($respuesta);      
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage());
        }
    }

    public function index()
    {
        $clientes = Mclientes::join('paises','paises.id_pais','=','veclientes.id_pais')->
                               join('ciudades','ciudades.id_ciudad','=','veclientes.id_ciudad')->
                               join('municipios','municipios.id_municipio','=','veclientes.id_municipio')->
                               join('provincias','provincias.id_provincia','=','veclientes.id_provincia')->
                               join('nacionalidades','nacionalidades.id','=','veclientes.nacionalidad')->
                               leftjoin('sectores','sectores.id_sector','=','veclientes.id_sector')->
                               select('veclientes.*',
                                      'paises.descripcion as pais',
                                      'ciudades.descripcion as ciudad',
                                      'municipios.descripcion as municipio',
                                      'sectores.descripcion as sector',
                                      'nacionalidades.nacionalidad as nacionalidad_cliente',
                                      'provincias.descripcion as provincia'
                                      )->
                               orderBy('created_at', 'desc')->
                               where('veclientes.estado','=','ACTIVO')->
                               get();
                               
        if ($clientes == null){
            return $this->errorResponse($clientes);
        }
        return $this->successResponse($clientes);
    }

    public function store(Request $request)
    {        
        $datos = array(
            "tipo_cliente"        =>$request->input("tipo_cliente"),
            "nombre"              =>$request->input("nombre"),
            "tipo_documento"      =>$request->input("tipo_documento"),
            "vendedor"            =>$request->input("vendedor"),
            "limite_credito"      =>$request->input("limite_credito"),
            "cond_pago"           =>$request->input("cond_pago"),
            "tipo_negocio"        =>$request->input("tipo_negocio"),
            "ncf"                 =>$request->input("ncf"),
            "documento"           =>$request->input("documento"),
            "nacionalidad"        =>$request->input("nacionalidad"),
            "generico"            =>$request->input("generico"),
            "direccion"           =>$request->input("direccion"),
            "urbanizacion"        =>$request->input("urbanizacion"),
            "id_pais"             =>$request->input("id_pais"),
            "id_provincia"        =>$request->input("id_provincia"),
            "id_zonalocal"        =>$request->input("id_zonalocal"),
            "id_ciudad"           =>$request->input("id_ciudad"),
            "id_region"           =>$request->input("id_region"),
            "id_municipio"        =>$request->input("id_municipio"),
            "id_sector"           =>$request->input("id_sector"),
            "telefono_oficina"    =>$request->input("telefono_oficina"),
            "celular"             =>$request->input("celular"),
            "telefono_casa"       =>$request->input("telefono_casa"),
            "email"               =>$request->input("email"),
            "url"                 =>$request->input("url"),
            "estado"              =>$request->input("estado"),
            "usuario_creador"     =>$request->input("usuario_creador"),
            "usuario_modificador" =>$request->input("usuario_modificador"),
            "contacto"            =>$request->input("contacto"),
        );

        // return response()->json($datos);

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $maxid=0;
        $idsecuencia=0;
        $maxid = Mclientes::get('sec_cliente')->max();

        if ($maxid == null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia = $maxid->sec_cliente;
            $idsecuencia=$idsecuencia + 1;
        }
        
        $datos = $datos + array('sec_cliente' =>$idsecuencia);
        // return response()->json($datos);
        $validator = validator($datos, [
            'tipo_cliente'        => 'required|numeric',
            'sec_cliente'         => 'required|numeric',
            'nombre'              => 'required|string|max:500',
            'tipo_documento'      => 'required|numeric',
            'documento'           => 'required|string',
            "vendedor"            => 'required|numeric',
            "cond_pago"           => 'required',
            "tipo_negocio"        => 'required',
            "ncf"                 => 'required',
            "generico"            => 'required',
            "direccion"           => 'string|max:500',
            "urbanizacion"        => 'string|max:500',
            "id_pais"             => 'required',
            "nacionalidad"        => 'required',
            "id_ciudad"           => 'required',
            "id_region"           => 'required',
            "id_municipio"        => 'required',
            "id_provincia"        => 'required',
            // "id_sector"           => 'required',
            "estado"              => 'required',
            "celular"             => 'required',
            'email'               => 'required',
            "url"                 => 'required',
            'usuario_creador'     => 'required'
        ],$messages);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{   
            try {                
                DB::beginTransaction();
                    Mclientes::create($datos);
                DB::commit();
                return $this->successResponse($datos, "Cliente creado correctamente");
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }            
            return $this->successResponse($datos);
        }
    }

    public function show($id)
    {
        $cliente = Mclientes::find($id);
        if ($cliente == null){
            return $this->errorResponse($cliente);
        }
        return $this->successResponse($cliente);
    }

    public function update(Request $request, $id)
    {
      //  return response()->json($id);
        $cliente = Mclientes::find($id);
     
        $datos = array(
           // "tipo_cliente"        =>$request->input("tipo_cliente"),
            "nombre"              =>$request->input("nombre"),
            "tipo_documento"      =>$request->input("tipo_documento"),
            "vendedor"            =>$request->input("vendedor"),
            "limite_credito"      =>$request->input("limite_credito"),
            "cond_pago"           =>$request->input("cond_pago"),
            "tipo_negocio"        =>$request->input("tipo_negocio"),
            "ncf"                 =>$request->input("ncf"),
            "documento"           =>$request->input("documento"),
            "generico"            =>$request->input("generico"),
            "direccion"           =>$request->input("direccion"),
            "urbanizacion"        =>$request->input("urbanizacion"),
            "id_pais"             =>$request->input("id_pais"),
            "id_zonalocal"        =>$request->input("id_zonalocal"),
            "id_ciudad"           =>$request->input("id_ciudad"),
            "telefono_oficina"    =>$request->input("telefono_oficina"),
            "celular"             =>$request->input("celular"),
            "telefono_casa"       =>$request->input("telefono_casa"),
            "email"               =>$request->input("email"),
            "url"                 =>$request->input("url"),
            "estado"              =>$request->input("estado"),
            "usuario_modificador" =>$request->input("usuario_modificador"),
            "contacto"            =>$request->input("contacto"),
        );

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico'
        ];

            $validator = validator($datos, [
               // 'tipo_cliente'        => 'required',
                'nombre'              => 'required|string|max:500',
                'tipo_documento'      => 'required',
                'documento'           => 'required|string',
                "cond_pago"           => 'required',
                "ncf"                 => 'string',
                "generico"            => 'string',
                "direccion"           => 'string|max:500',
                "urbanizacion"        => 'string|max:500',
                "id_pais"             => 'required',
                "id_ciudad"           => 'required',
                "estado"              => 'required',
                "celular"             => 'string',
                'email'               => 'string|max:500',
                "url"                 => 'string|max:500',
                'usuario_modificador'     => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            $cliente->update($request->all());
            return $this->successResponse($cliente);
        }
    }

    public function destroy($id)
    {       
        try{
            DB::beginTransaction(); 
                $cliente = Mclientes::find($id);
                if ($cliente == null){
                    return $this->errorResponse(null,"Registro no Existe");
                }
                $cliente->update(['estado' => 'eliminado']);                
            DB::commit();
            return $this->successResponse(1);
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage());
        }

    }

    public function busqueda(Request $request){
        $parametro = $request->get('parametro');
        $num_rnc = $request->get('num_rnc');
        $vendedor =$request->get('vendedor');
        
        $busqueda = Mclientes::join('paises','paises.id_pais','=','veclientes.id_pais')->
        join('zonas_local','zonas_local.id_zonalocal','=','veclientes.id_zonalocal')->
        join('ciudades','ciudades.id_ciudad','=','veclientes.id_ciudad')->
        select('veclientes.*','paises.descripcion as pais','ciudades.descripcion as ciudad',
               'zonas_local.descripcion as zona local')->           
               parametro($parametro)->
               rnc($num_rnc)->
               vendedor($vendedor)->
                               orderBy('created_at', 'desc')->
                               where('estado','=','ACTIVO')->
                               get();
                        
        return $this->successResponse($busqueda);
    }
}
