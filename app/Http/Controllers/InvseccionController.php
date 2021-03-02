<?php

namespace App\Http\Controllers;
use App\librerias\InvseccionModel;
use Illuminate\Http\Request;

class InvseccionController extends ApiResponseController

{
    public function index()
    {
        $seccion = InvseccionModel::join('bodegas','bodegas.id_bodega','=','invsecciones.bodega')->
        select('invsecciones.*','bodegas.descripcion as bodega')->  
        orderBy('created_at', 'desc')->
        get();
        if ($seccion == null){
            return $this->errorResponse($seccion);
        }
        return $this->successResponse($seccion);
}

public function seccionporbodega($id)
{
    $seccion = InvseccionModel::join('bodegas','bodegas.id_bodega','=','invsecciones.bodega')->
    select('invsecciones.*','bodegas.descripcion as bodega')->  
                      orderBy('created_at', 'desc')->
                      where('invsecciones.bodega','=',"$id")->
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
        return $this->errorResponseParams($errors->all());
    } else{
        InvseccionModel::create($datos);
        return $this->successResponse($datos);
    }
}

}
