<?php

namespace App\Http\Controllers\inventario;
use App\Http\Controllers\ApiResponseController;
use App\librerias\InvseccionModel;
use Illuminate\Http\Request;

class InvseccionController extends ApiResponseController

{
    public function index(Request $request)
    {
        $seccion = InvseccionModel::join('bodegas','bodegas.id_bodega','=','invsecciones.bodega')->
        select('invsecciones.*','bodegas.descripcion as bodega')->  
        orderBy('created_at', 'desc')->
        get();
        return $this->successResponse($seccion, $request->urlRequest);
}

public function seccionporbodega(Request $request,$id)
{
    $seccion = InvseccionModel::join('bodegas','bodegas.id_bodega','=','invsecciones.bodega')->
    select('invsecciones.*','bodegas.descripcion as bodega')->  
                      orderBy('created_at', 'desc')->
                      where('invsecciones.bodega','=',"$id")->
                      get();
                      return $this->successResponse($seccion, $request->urlRequest);
}


public function store(Request $request)
{
    $datos = array("titulo"     =>$request->input("titulo"),
                    "bodega"       =>$request->input("bodega"),
                    "us_crea"       =>$request->input("us_crea")
                       
    );

    $message = [
    'required' => 'El campo :attribute es requerido.',
    'unique'   => 'El campo :attribute debe ser unico',
    'numeric'  => 'El campo :attribute debe ser numerico',
    ];

    $validator = validator($datos, [
        'titulo'   => 'required',
        'bodega' => 'required',
        'us_crea' => 'required'
    ], $message);
    if ($validator->fails()){
        $errors=$validator->errors();
        return $this->errorResponseParams($errors->all(), $request->urlRequest);
    } else{
        InvseccionModel::create($datos);
        return $this->successResponse($datos, $request->urlRequest);
    }
}

}
