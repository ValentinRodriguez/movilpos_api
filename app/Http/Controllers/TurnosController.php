<?php

namespace App\Http\Controllers;

use App\Librerias\turnos;
use App\Librerias\sucursales;
use App\Librerias\Nopuesto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TurnosController extends ApiResponseController
{
    public function index()
    {
        $turnos = turnos::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();
        return $this->successResponse($turnos);
    }

   

    public function store(Request $request)
    {
        $datos = array(
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
            'usuario_creador' => 'required|string',
            'estado'          => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{            
            try {                
                DB::beginTransaction();  
                    turnos::create($datos);
                DB::commit();
                return $this->successResponse(1);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }
        }
    }

    public function show($id)
    {
        $turno = turnos::find($id);
        if ($turno == null){
            return $this->errorResponse($turno);
        }
        return $this->successResponse($turno);
    }

    public function update(Request $request,  $id)
    {
        $turno = turnos::find($id);

        $datos = array(
            "descripcion"     =>$request->input("descripcion"),
            "usuario_creador" =>$request->input("usuario_creador"),
            "estado"          =>$request->input("estado")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'    => 'required|string',
            'usuario_creador' => 'required|string',
            'estado'          => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{            
            try {                
                DB::beginTransaction();  
                    $turno->update($datos);  
                DB::commit();
                return $this->successResponse(1);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }
        }
    }

    public function destroy($id)
    {
        $turno = turnos::where('id','=',$id);     
        $turno->update(['estado' => 'eliminado']);
        return $this->successResponse(null,"Registro Eliminado");
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('turnos');
        $turnos = turnos::orderBy('created_at', 'desc')->where([['estado','=','activo'],['descripcion','=',$parametro]])->get();
        return $this->successResponse($turnos);
    }
}
