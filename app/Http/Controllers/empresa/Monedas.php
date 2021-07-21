<?php

namespace App\Http\Controllers\empresa;
use App\Http\Controllers\ApiResponseController;

use Illuminate\Http\Request;
use App\Librerias\tipoMonedas;
use Illuminate\Support\Facades\DB;

class Monedas extends ApiResponseController
{
    public function index(Request $request)
    {
        $monedas = tipoMonedas::orderBy('created_at', 'desc')->
                                where('estado','=','ACTIVO')->
                                get();

        return $this->successResponse($monedas, $request->urlRequest);
    }

    public function store(Request $request)
    {
        $datos = array(
            "divisa"              =>$request->input("divisa"),
            "simbolo"             =>$request->input("simbolo"),
            "descripcion"         =>$request->input("descripcion"),
            "usuario_creador"     =>$request->input("usuario_creador"),
            "estado"              =>$request->input("estado")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'divisa'          => 'required|string',
            'descripcion'  => 'required|string',
            'simbolo'         => 'required|string',
            'usuario_creador' => 'required|string',
            'estado'          => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();  
                    tipoMonedas::create($datos);
                DB::commit();
                return $this->successResponse(1, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function show(Request $request,$id)
    {
        $moneda = tipoMonedas::find($id);
        
        return $this->successResponse($moneda, $request->urlRequest);
    }

    public function update(Request $request,  $id)
    {
        $moneda = tipoMonedas::find($id);

        $datos = array(
            "divisa"          =>$request->input("divisa"),
            "simbolo"         =>$request->input("simbolo"),
            "descripcion"     =>$request->input("descripcion"),
            "usuario_modificador" =>$request->input("usuario_modificador"),
            "estado"          =>$request->input("estado")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'divisa'          => 'required|string',
            'simbolo'         => 'required|string',
            'descripcion'    => 'required|string',
            'usuario_modificador' => 'required|string',
            'estado'          => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();  
                    $moneda->update($datos);  
                DB::commit();
                return $this->successResponse(1, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function destroy(Request $request, $id)
    {
        $moneda = tipoMonedas::where('id','=',$id);     
        $moneda->update(['estado' => 'eliminado']);
        return $this->successResponse(null, $request->urlRequest,"Registro Eliminado");
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('monedas');

        $monedas = tipoMonedas::orderBy('created_at', 'desc')->
                                where([['estado','=','activo'],
                                      ['divisa','=',$parametro]])->
                                get();

        return $this->successResponse($monedas, $request->urlRequest);
    }

}
