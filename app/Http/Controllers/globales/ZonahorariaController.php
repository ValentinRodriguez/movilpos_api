<?php

namespace App\Http\Controllers\globales;
use Illuminate\Http\Request;

use App\Librerias\globales\zonahoraria;
use App\Http\Controllers\ApiResponseController;

class ZonahorariaController extends ApiResponseController
{
    public function index(Request $request)
    {
        $zona = zonahoraria::orderBy('created_at', 'desc')->get();
        return $this->successResponse($zona, $request->urlRequest);
    }
    
    public function store(Request $request)
    {
        $datos = array("id_zonahoraria"=>$request->input("id_zonahoraria"),
                       "detalle_zona"        =>$request->input("detalle_zona"),
                       "parametro_zona"        =>$request->input("parametro_zona"),
                       
                       );

        $messages = ['required' => 'El campo :attribute es requerido.',
                     'unique'   => 'El campo :attribute debe ser unico',
                     'numeric'  => 'El campo :attribute debe ser numerico',
                    ];

             $validator = validator($datos, [
                'id_zonahoraria'             => 'required|String',
                'detalle_zona'         => 'required|string|min:1|max:500',
                'parametro_zona'             => 'numeric'
                
            ], $messages);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return $this->errorResponseParams($errors->all(), $request->urlRequest);
            } else {
                zonahoraria::create($datos);
                return $this->successResponse($datos, $request->urlRequest);
            }
    }

    public function show(zonahoraria $zonahoraria)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        $zona = zonahoraria::find($id);

        $datos = array(
        "detalle_zona"=>$request->input("detalle_zona"),
        "parametro_zona"=>$request->input("parametro_zona"),
        "usuario_modificador"=>$request->input("usuario_modificador"));

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            ];

            $validator = validator($datos, [
            'dedetalle_zona' => 'required|string|min:10|max:500',
            'parametro_zona' => 'numeric',
            'usuario_modificador' => 'required|string'
            ], $messages);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return $this->errorResponseParams($errors->all(), $request->urlRequest);
            } else {
                $zona->update($request->all());
                return $this->successResponse($zona, $request->urlRequest);
            }
    }

    public function destroy(Request $request, $id)
    {
        $zonas = zonahoraria::find($id);

        if ($zonas == null){
            return $this->response()->json(array("msj:" => "Registro no Existe"));
        }

        $zonas->update(['estado' => 'ELIMINADO']);
        return response()->json(array("msj:" => "Registro Eliminado"));
    }
}

