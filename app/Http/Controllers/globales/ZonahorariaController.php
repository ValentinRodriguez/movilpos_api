<?php

namespace App\Http\Controllers;

use App\Librerias\zonahoraria;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiResponseController;

class ZonahorariaController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $zona = zonahoraria::orderBy('created_at', 'desc')->
        get();

if ($zona == null){

return $this->errorResponse($zona);
}
return $this->successResponse($zona, $request->urlRequest);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\zonahoraria  $zonahoraria
     * @return \Illuminate\Http\Response
     */
    public function show(zonahoraria $zonahoraria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\zonahoraria  $zonahoraria
     * @return \Illuminate\Http\Response
     */
    public function edit(zonahoraria $zonahoraria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\zonahoraria  $zonahoraria
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\zonahoraria  $zonahoraria
     * @return \Illuminate\Http\Response
     */
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

