<?php

namespace App\Http\Controllers;

use App\Librerias\areasEmpresa;
use App\Librerias\Empresa;
use App\Librerias\sucursales;
use App\Librerias\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreasEmpresaController extends ApiResponseController
{
    public function index()
    {
        $areas = areasEmpresa::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();
        return $this->successResponse($areas);
    }

    public function autollenado()
    {     
        $respuesta = array();

        $empresa = Empresa::where('estado','=','ACTIVO')->get();
        $sucursales = sucursales::where('estado','=','ACTIVO')->get();
        $departamentos = Departamento::where('estado','=','ACTIVO')->get();

        $_empresa = array("label" => 'empresa', "data" => $empresa, "icono" => 'fas fa-dolly-flatbed');
        $_sucursales = array("label" => 'sucursales', "data" => $sucursales, "icono" => 'fas fa-dolly-flatbed');
        $_departamentos = array("label" => 'departamentos', "data" => $departamentos, "icono" => 'fas fa-dolly-flatbed');
        
        array_push($respuesta,$_empresa);  
        array_push($respuesta,$_sucursales);
        array_push($respuesta,$_departamentos);

        return $this->successResponse($respuesta);
    }

    public function store(Request $request)
    {
        $datos = array(
            "departamento"        =>$request->input("departamento"),
            "cod_cia"             =>$request->input("cod_cia"),
            "suc_id"              =>$request->input("suc_id"),
            "descripcion"         =>$request->input("descripcion"),
            "estado"              =>$request->input("estado"),
            "usuario_creador"     =>$request->input("usuario_creador")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            "departamento"=> 'required',
            "cod_cia"=> 'required',
            "suc_id"=> 'required',
            "descripcion"=> 'required',
            "estado"=> 'required',
            "usuario_creador"=> 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{            
            try {                
                DB::beginTransaction();  
                    areasEmpresa::create($datos);
                DB::commit();
                return $this->successResponse(1);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }
        }
    }

    public function show($id)
    {
        $moneda = areasEmpresa::find($id);
        return $this->successResponse($moneda);
    }

    public function update(Request $request,  $id)
    {
        $moneda = areasEmpresa::find($id);

        $datos = array(
            "departamento"        =>$request->input("departamento"),
            "cod_cia"             =>$request->input("cod_cia"),
            "suc_id"              =>$request->input("suc_id"),
            "descripcion"         =>$request->input("descripcion"),
            "estado"              =>$request->input("estado"),
            "usuario_modificador" =>$request->input("usuario_modificador")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'divisa'              => 'required|string',
            'simbolo'             => 'required|string',
            'descripcion'         => 'required|string',
            'usuario_modificador' => 'required|string',
            'estado'              => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{            
            try {                
                DB::beginTransaction();  
                    $moneda->update($datos);  
                DB::commit();
                return $this->successResponse(1);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }
        }
    }

    public function destroy($id)
    {
        $moneda = areasEmpresa::where('id','=',$id);     
        $moneda->update(['estado' => 'eliminado']);
        return $this->successResponse(null,"Registro Eliminado");
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('monedas');
        $monedas = areasEmpresa::orderBy('created_at', 'desc')->where([['estado','=','activo'],['divisa','=',$parametro]])->get();
        return $this->successResponse($monedas);
    }

}
