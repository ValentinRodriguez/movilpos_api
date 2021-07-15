<?php

namespace App\Http\Controllers;

use App\Librerias\pais;
use App\Librerias\regiones;
use App\Librerias\municipios;
use App\Librerias\provincias;
use App\Librerias\sectores;
use App\Librerias\ciudad;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiResponseController;

class PaisController extends ApiResponseController
{

    public function index(Request $request)
    {
        $paises = pais::orderBy('created_at', 'desc')->
                           get();

         if ($paises == null){

            return $this->errorResponse($paises);
        }
        return $this->successResponse($paises, $request->urlRequest);
    }

    public function ciudadesPorPais(Request $request,$id)
    {
        $ciudad = ciudad::join('paises','paises.id_pais','=','ciudades.id_pais')->
                          select('ciudades.*','paises.descripcion as pais')->
                          orderBy('created_at', 'desc')->
                          where('ciudades.id_pais','=',"$id")->
                          get();
                          if ($ciudad == null){
                              return $this->errorResponse($ciudad);
                          }
                          return $this->successResponse($ciudad, $request->urlRequest);
    }

    public function localidad(Request $request)
    {     
        $respuesta = array();
        
        $pais = pais::where('estado','=','ACTIVO')->get();
        $regiones = regiones::where('estado','=','ACTIVO')->get();
        $municipios = municipios::where('estado','=','ACTIVO')->get();
        $sectores = sectores::where('estado','=','ACTIVO')->get();
        $provincias = provincias::where('estado','=','ACTIVO')->get();

        $_pais = array("label" => 'pais', "data" => $pais, "icono" => 'fas fa-dolly-flatbed');
        $_regiones = array("label" => 'regiones', "data" => $regiones, "icono" => 'fas fa-dolly-flatbed');
        $_municipios = array("label" => 'municipios', "data" => $municipios, "icono" => 'fas fa-dolly-flatbed');
        $_sectores = array("label" => 'sectores', "data" => $sectores, "icono" => 'fas fa-dolly-flatbed');
        $_provincias = array("label" => 'provincias', "data" => $provincias, "icono" => 'fas fa-dolly-flatbed');

        array_push($respuesta,$_pais);  
        array_push($respuesta,$_regiones);
        array_push($respuesta,$_municipios);
        array_push($respuesta,$_sectores);
        array_push($respuesta,$_provincias);

        return $this->successResponse($respuesta, $request->urlRequest);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $datos = array("id_pais"        =>$request->input("id_pais"),
                       "descripcion"        =>$request->input("descripcion"),
                       "latitud"        =>$request->input("latitud"),
                       "longitud"        =>$request->input("longitud"),
                       );

        $messages = ['required' => 'El campo :attribute es requerido.',
                     'unique'   => 'El campo :attribute debe ser unico',
                     'numeric'  => 'El campo :attribute debe ser numerico',
                    ];

             $validator = validator($datos, [
                'id_pais'             => 'required',
                'descripcion'         => 'required|string',
                'longitud'             => 'numeric',
                'latitud'             => 'numeric',

            ], $messages);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return $this->errorResponseParams($errors->all(), $request->urlRequest);
            } else {
                pais::create($datos);
                return $this->successResponse($datos, $request->urlRequest);
            }
    }

    public function show(pais $pais)
    {
        //
    }

    public function edit(pais $pais)
    {
        //
    }

    public function update(Request $request, pais $pais)
    {
        $paises = pais::find($pais);

        $datos = array(
        "descripcion"=>$request->input("descripcion"),
        "usuario_modificador"=>$request->input("usuario_modificador"));

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            ];

            $validator = validator($datos, [
            'descripcion' => 'required|string',
            'usuario_modificador' => 'required|string'
            ], $messages);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return $this->errorResponseParams($errors->all(), $request->urlRequest);
            } else {
                $paises->update($request->all());
                return $this->successResponse($paises, $request->urlRequest);
            }
    }

    public function destroy(Request $request, $id)
    {
        $paises = pais::find($id);

        if ($paises == null){
            return $this->response()->json(array("msj:" => "Registro no Existe"));
        }

        $paises->update(['estado' => 'ELIMINADO']);
        return response()->json(array("msj:" => "Registro Eliminado"));
   }
    }

