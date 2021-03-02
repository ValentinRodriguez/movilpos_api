<?php

namespace App\Http\Controllers;
use App\librerias\InvTramosModel;
use Illuminate\Http\Request;

class InvTramosController extends ApiResponseController
{
    public function index()
    {
        $tramos = InvTramosModel::join('bodegas','bodegas.id_bodega','=','invtramos.bodega')->
        join('invsecciones','invsecciones.id','=','invtramos.id_seccion')->
        select('invtramos.*','bodegas.descripcion as bodega','invsecciones.titulo as seccion')->  
        orderBy('created_at', 'desc')->
        get();
        if ($tramos == null){
            return $this->errorResponse($tramos);
        }
        return $this->successResponse($tramos);
}

public function show($id)
{
    $seccion = InvTramosModel::join('bodegas','bodegas.id_bodega','=','invtramos.bodega')->
    join('invsecciones','invsecciones.id','=','invtramos.id_seccion')->
    select('invtramos.*','bodegas.descripcion as bodega','invsecciones.titulo as seccion')->  
                      orderBy('created_at', 'desc')->
                      where('invtramos.id','=',"$id")->
                      get();
                      if ($seccion == null){
                          return $this->errorResponse($seccion);
                      }
                      return $this->successResponse($seccion);
}

public function store(Request $request)
{
    $datos = array("titulo"     =>$request->input("titulo"),
                    "bodega"       =>$request->input("bodega"),
                    "id_seccion"       =>$request->input("id_seccion"),
                    "us_crea"       =>$request->input("us_crea")
                       
    );

    $message = [
    'required' => 'El campo :attribute es requerido.',
    'unique'   => 'El campo :attribute debe ser unico',
    'numeric'  => 'El campo :attribute debe ser numerico',
    ];

    $validator = validator($datos, [
        'titulo'   => 'required|string',
        'bodega' => 'required',
        'id_seccion' => 'required',
        'us_crea' => 'required'
    ], $message);
    if ($validator->fails()){
        $errors=$validator->errors();
        return $this->errorResponseParams($errors->all());
    } else{
        InvTramosModel::create($datos);
        return $this->successResponse($datos);
    }
}


}
