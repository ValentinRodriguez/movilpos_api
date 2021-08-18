<?php

namespace App\Http\Controllers\inventario;
use App\Http\Controllers\ApiResponseController;
use App\librerias\InvTramosModel;
use Illuminate\Http\Request;

class InvTramosController extends ApiResponseController
{
    public function index(Request $request)
    {
        $tramos = InvTramosModel::join('bodegas','bodegas.id_bodega','=','invtramos.bodega')->
        join('invsecciones','invsecciones.id','=','invtramos.id_seccion')->
        select('invtramos.*','bodegas.descripcion as bodega','invsecciones.titulo as seccion')->  
        orderBy('created_at', 'desc')->
        get();
        return $this->successResponse($tramos, $request->urlRequest);
}

public function show(Request $request,$id)
{
    $seccion = InvTramosModel::join('bodegas','bodegas.id_bodega','=','invtramos.bodega')->
    join('invsecciones','invsecciones.id','=','invtramos.id_seccion')->
    select('invtramos.*','bodegas.descripcion as bodega','invsecciones.titulo as seccion')->  
                      orderBy('created_at', 'desc')->
                      where('invtramos.id','=',"$id")->
                      get();
                      return $this->successResponse($seccion, $request->urlRequest);
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
        return $this->errorResponseParams($errors->all(), $request->urlRequest);
    } else{
        InvTramosModel::create($datos);
        return $this->successResponse($datos, $request->urlRequest);
    }
}


}