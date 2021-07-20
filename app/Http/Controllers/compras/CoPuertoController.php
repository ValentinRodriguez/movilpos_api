<?php

namespace App\Http\Controllers\compras;
use App\Http\Controllers\ApiResponseController;

use App\Librerias\co_puerto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CoPuertoController extends ApiResponseController
{
    public function index(Request $request)
    {
        $puerto = co_puerto::orderBy('created_at', 'desc')->
                                      where('estado','=','ACTIVO')->
                                      get();

        return $this->successResponse($puerto, $request->urlRequest);
    }

    public function store(Request $request)
    {
        $datos = array(
            "descripcion"          =>$request->input("descripcion"),
            "dias"                 =>$request->input("dias"),
            "usuario_creador"      =>$request->input("usuario_creador"),
            "usuario_modificador"  =>$request->input("usuario_modificador"),   
            "estado"               =>$request->input("estado")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'     => 'required|string',
            'dias'            => 'required|string',
            'usuario_creador' => 'required|string',
            'estado'          => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();              
                    co_puerto::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function show(Request $request,$id)
    {
        $puerto = co_puerto::find($id);
        if ($puerto == null){
            return $this->errorResponse($puerto);
        }
        return $this->successResponse($puerto, $request->urlRequest);
    }

    public function update(Request $request,  $id)
    {
        $puerto = co_puerto::find($id);

        $datos = array(
            "descripcion"          =>$request->input("descripcion"),
            "dias"                 =>$request->input("dias"),
            "usuario_creador"      =>$request->input("usuario_creador"),
            "usuario_modificador"  =>$request->input("usuario_modificador"),   
            "estado"               =>$request->input("estado")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        
        $validator = validator($datos, [
            'descripcion'     => 'required|string',
            'dias'            => 'required|string',
            'usuario_creador' => 'required|string',
            'estado'          => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();              
                    $puerto->update($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function destroy(Request $request, $id)
    {
        $puerto = co_puerto::find($id);
     
        $puerto->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, $request->urlRequest);
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('puertos');
        $puerto = co_puerto::orderBy('created_at', 'desc')->                                      
                            where([['descripcion','=',$parametro],['estado','=','activo']])->
                            get();

        return $this->successResponse($puerto, $request->urlRequest);
    }
}
