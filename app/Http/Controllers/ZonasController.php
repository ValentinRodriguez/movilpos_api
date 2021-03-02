<?php

namespace App\Http\Controllers;

use App\Librerias\zonas;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiResponseController;

class ZonasController extends ApiResponseController
{
    public function index()
    {
        $zona = Zonas::orderBy('created_at', 'desc')->get();

        if ($zona == null){
            return $this->errorResponse($zona);
        }
        return $this->successResponse($zona);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $datos = array("id_zonalocal" => $request->input("id_zonalocal"),
                       "descripcion"  => $request->input("descripcion")        
        );

        $messages = ['required' => 'El campo :attribute es requerido.',
                     'unique'   => 'El campo :attribute debe ser unico',
                     'numeric'  => 'El campo :attribute debe ser numerico'
        ];

        $validator = validator($datos, [
                'id_zonalocal'  => 'required|String',
                'descripcion'   => 'required|string|min:1|max:500' 
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        } else {
            zonas::create($datos);
            return $this->successResponse($datos);
        }
    }
    
    public function show(zonas $zonas)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        $zona = zonas::find($id);

        $datos = array(
        "descripcion"=>$request->input("descripcion"));

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
             'descripcion' => 'required|string|min:10|max:500'
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        } else {
            $zona->update($request->all());
            return $this->successResponse($zona);
        }
    }
    
    public function destroy($id)
    {
        $zona = zonas::find($id);

        if ($zona == null){
            return $this->response()->json(array("msj:" => "Registro no Existe"));
        }

        $zona->update(['estado' => 'ELIMINADO']);
            return response()->json(array("msj:" => "Registro Eliminado"));
        }
    }
    

