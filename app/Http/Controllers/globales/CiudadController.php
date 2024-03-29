<?php

namespace App\Http\Controllers\globales;
use Illuminate\Http\Request;

use App\Librerias\globales\ciudad;
use App\Http\Controllers\ApiResponseController;

class CiudadController extends ApiResponseController
{
    
    public function index(Request $request)
    {
        $ciudad = ciudad::join('paises','paises.id_pais','=','ciudades.id_pais')->
                          select('ciudades.*','paises.descripcion as pais')->  
                          orderBy('created_at', 'desc')->
                          get();
                          if ($ciudad == null){
                              return $this->errorResponse($ciudad);
                          }
                          return $this->successResponse($ciudad, $request->urlRequest);
    }

    public function ciudadesPorPais(Request $request,$id)
    {        
        $ciudad = ciudad::join('municipios','municipios.id_municipio','=','ciudades.id_municipio')->
                          select('ciudades.*')->  
                          orderBy('created_at', 'desc')->
                          where('ciudades.id_ciudad','=',$id)->
                          get();
                          if ($ciudad == null){
                              return $this->errorResponse($ciudad);
                          }
                          return $this->successResponse($ciudad, $request->urlRequest);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $datos = array("id_ciudad"=>$request->input("id_ciudad"),
                        "descripcion"     =>$request->input("descripcion"),
                        "id_pais"       =>$request->input("id_pais"),
                           
        );

        $message = [
        'required' => 'El campo :attribute es requerido.',
        'unique'   => 'El campo :attribute debe ser unico',
        'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'id_ciudad'   => 'required',
            'descripcion' => 'required|String',
            'id_pais'     => 'required'
        ], $message);
        if ($validator->fails()){
            $errors=$validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        } else{
            ciudad::create($datos);
            return $this->successResponse($datos, $request->urlRequest);
        }
    }

    public function show(ciudad $ciudad)
    {
        //
    }
    
    public function update(Request $request, ciudad $ciudad)
    {
        //
    }
    
    public function destroy(ciudad $ciudad)
    {
        //
    }
}
