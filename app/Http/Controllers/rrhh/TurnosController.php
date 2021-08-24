<?php

namespace App\Http\Controllers\rrhh;
use Illuminate\Http\Request;

use App\Librerias\rrhh\turnos;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApiResponseController;

class TurnosController extends ApiResponseController
{
    public function index(Request $request)
    {
        $turnos = turnos::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();
        return $this->successResponse($turnos, $request->urlRequest);
    }

    public function store(Request $request)
    {
        $datos = array(
            "descripcion"     =>$request->input("descripcion"),
            "horario_inicial" =>$request->input("horario_inicial"),
            "horario_final"   =>$request->input("horario_final"),
            "usuario_creador" =>$request->input("usuario_creador"),
            "estado"          =>$request->input("estado")
        );

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        // return response()->json($datos);
        $validator = validator($datos, [
            'descripcion'     => 'required',
            'horario_inicial' => 'required',
            'horario_final'   => 'required',
            'usuario_creador' => 'required',
            'estado'          => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();  
                    turnos::create($datos);
                DB::commit();
                return $this->successResponse(1, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function show(Request $request,$id)
    {
        $turno = turnos::find($id);
        return $this->successResponse($turno, $request->urlRequest);
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
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();  
                    $turno->update($datos);  
                DB::commit();
                return $this->successResponse(1, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function destroy(Request $request, $id)
    {
        $turno = turnos::where('id','=',$id);     
        $turno->update(['estado' => 'eliminado']);
        return $this->successResponse(null, $request->urlRequest,"Registro Eliminado");
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('turnos');
        $turnos = turnos::orderBy('created_at', 'desc')->where([['estado','=','activo'],['descripcion','=',$parametro]])->get();
        return $this->successResponse($turnos, $request->urlRequest);
    }
}
