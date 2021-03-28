<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\tipoNegocio;
use App\librerias\Mclientes;
use Illuminate\Support\Facades\DB;

class TipoNegocioController extends ApiResponseController
{
    public function index()
    {
        $tipoNegocio = tipoNegocio::orderBy('tipo_negocio', 'asc')->
                               where('estado','=','ACTIVO')->
                               get();
        
        return $this->successResponse($tipoNegocio);
    }
    
    public function store(Request $request){
        $datos = array('descripcion'     => $request->input('descripcion'),
                       'usuario_creador' => $request->input('usuario_creador'),
                       'estado'          => 'ACTIVO');

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'string'  => 'El campo :attribute solo debe contener letras',
        ];

        $validator = validator($datos, [
            "descripcion" => 'required|string'
        ],$messages);

        try {
            DB::beginTransaction();  
                if ($validator->fails()) {
                    $errors =  $validator->errors();
                    return $this->errorResponse($errors);
                } else {
                    $maxid=0;
                    $idsecuencia=0;
                    $maxid = tipoNegocio::get('tipo_negocio')->max();
        
                    if ($maxid == null){
                        $idsecuencia=1;
                    } else {
                        $idsecuencia = $maxid->tipo_negocio;
                        $idsecuencia=$idsecuencia + 1;
                    }
        
                    $datos = $datos + array('tipo_negocio' =>$idsecuencia);
                    tipoNegocio::create($datos);
                }
            DB::commit();
            return $this->successResponse($datos);
        }
        catch (\Exception $e ){
            return $this->errorResponse($e);
        } 
      
    }

    public function show($id)
    {
        $tipo = tipoNegocio::find($id);
        if ($tipo == null){
            return $this->errorResponse($tipo);
        }
        return $this->successResponse($tipo);
    }
    
    public function update(Request $request, $id)
    {
        $tipos = tipoNegocio::find($id);

        $datos = array(
            'descripcion'         =>$request->input('descripcion'),
            'usuario_creador'     =>$request->input('usuario_creador'),
            'usuario_modificador' =>$request->input('usuario_modificador')
        );
       
        ///return response()->json($tipos);
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'         => 'required|string|max:500',
            'usuario_modificador' => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            try {
                DB::beginTransaction();  
                    $tipos->update($datos);                    
                DB::commit();
                return $this->successResponse($datos);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e);
            }             
        }
    }
    
    public function destroy($id)
    {
        $tipoNegocio = tipoNegocio::where('tipo_negocio','=',$id)->first();
        
        if ($tipoNegocio == null){
            return $this->errorResponse(null, "Este registro no existe");
        }

        $cliente = Mclientes::where('tipo_negocio','=',$id)->where('estado','=','ACTIVO')->first();
        if($cliente <> null){
            return $this->errorResponse("No puede eliminar este registro, tiene cliente/s asociado/s");
        }

        $tipoNegocio->update(['estado' => 'eliminado']);
        return $this->successResponse(null,"Tipo de negocio eliminado");
    }

    public function busquedaTipo(Request $request)
    {
        $descripcion = $request->get('descripcion');

        $tipo  = tipoNegocio::orderBy('id', 'asc')->
                               descripcion($descripcion)->
                               get();
        return $this->successResponse($tipo);
    }
}
