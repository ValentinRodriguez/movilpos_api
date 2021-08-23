<?php

namespace App\Http\Controllers\contabilidadGeneral;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\contabilidadGeneral\cgcodigoestados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CgcodigoestadosController extends  ApiResponseController
{
    public function index(Request $request)
    {
        $estados = cgcodigoestados::orderBy('descripcion_esp', 'asc')->where('estado','=','ACTIVO')->get();
        return $this->successResponse($estados, $request->urlRequest);
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $datos['tipo_estado'] = $datos['tipo_estado']['values'];
        $datos['signo'] = $datos['signo']['values'];
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        
        $validator = validator($datos, [
            'descripcion_esp' => 'required',
            'id_estado' => 'required',
            'grupo' => 'required',
            'orden_grupo' => 'required',
            'tipo_estado' => 'required',
            'signo' => 'required',
            'estado' => 'required', 
            'usuario_creador'   => 'required'  
        ],$messages);  
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try {                
                DB::beginTransaction();                
                    cgcodigoestados::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);                
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }            
        }
    }

    public function show($id)
    {
        $estado = cgcodigoestados::find($id);
        return $this->successResponse($estado);
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $datos['tipo_estado'] = $datos['tipo_estado']['values'];
        $datos['signo'] = $datos['signo']['values'];

        $estado = cgcodigoestados::find($id);
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        
        $validator = validator($datos, [
            'descripcion_esp' => 'required',
            'id_estado' => 'required',
            'grupo' => 'required',
            'orden_grupo' => 'required',
            'tipo_estado' => 'required',
            'signo' => 'required',
            'estado' => 'required', 
            'usuario_creador'   => 'required'  
        ],$messages);  
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try {                
                DB::beginTransaction();                
                    $estado->update($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);                
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }            
        }
    }

    public function destroy($id)
    {
        $catalogo = cgcodigoestados::find($id);
        if ($catalogo == null){
            return $this->response()->json(array("msj:" => "Registro no Existe"));
        }
        $catalogo->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null);
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('estado');

        $puerto = cgcodigoestados::orderBy('created_at', 'desc')->                                      
                            where([['id_estado','=',$parametro],['estado','=','activo']])->
                            get();

        return $this->successResponse($puerto, $request->urlRequest);
    }
}
