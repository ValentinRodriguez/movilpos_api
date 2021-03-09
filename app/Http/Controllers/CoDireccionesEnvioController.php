<?php

namespace App\Http\Controllers;

use App\Librerias\co_DireccionesEnvio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoDireccionesEnvioController extends ApiResponseController
{
    public function index()
    {
        $direcciones = co_DireccionesEnvio::join('ciudades', 'ciudades.id_ciudad','=','co_direcciones_envios.id_ciudad')->
                                        join('paises', 'paises.id_pais','=','co_direcciones_envios.id_pais')->
                                        select('co_direcciones_envios.*','ciudades.descripcion as ciudad','paises.descripcion as pais') ->
                                        where('co_direcciones_envios.estado','=','activo')->
                                        get();

        return $this->successResponse($direcciones);
    }

    public function store(Request $request)
    {
        $datos = array(
            "nombre"               =>$request->input("nombre"),
            "direccion_a"          =>$request->input("direccion_a"),
            "direccion_b"          =>$request->input("direccion_b"),
            "id_pais"              =>$request->input("id_pais"),
            "id_ciudad"            =>$request->input("id_ciudad"),
            "telefono"             =>$request->input("telefono"),
            "usuario_creador"      =>$request->input("usuario_creador"),
            "usuario_modificador"  =>$request->input("usuario_modificador"),   
            "estado"               =>$request->input("estado")
        );
        // return response()->json($datos);
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        $validator = validator($datos, [
            "nombre"              => 'required',
            "direccion_a"         => 'required',
            "direccion_b"         => 'required',
            "id_pais"             => 'required',
            "id_ciudad"           => 'required',
            "telefono"            => 'required',
            'usuario_creador'     => 'required',
            'estado'              => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{            
            try {                
                DB::beginTransaction();              
                    co_DireccionesEnvio::create($datos);
                DB::commit();
                return $this->successResponse($datos);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e);
            }
        }
    }

    public function show($id)
    {
        $categoria = co_DireccionesEnvio::find($id);
        if ($categoria == null){
            return $this->errorResponse($categoria);
        }
        return $this->successResponse($categoria);
    }

    public function update(Request $request,  $id)
    {
        $direccion = co_DireccionesEnvio::find($id);

        $datos = array(
            "nombre"               =>$request->input("nombre"),
            "direccion_a"          =>$request->input("direccion_a"),
            "direccion_b"          =>$request->input("direccion_b"),
            "id_pais"              =>$request->input("id_pais"),
            "id_ciudad"            =>$request->input("id_ciudad"),
            "telefono"             =>$request->input("telefono"),
            "usuario_creador"      =>$request->input("usuario_creador"),
            "usuario_modificador"  =>$request->input("usuario_modificador"),   
            "estado"               =>$request->input("estado")
        );
        // return response()->json($datos);
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        $validator = validator($datos, [
            "nombre"              => 'required',
            "direccion_a"         => 'required',
            "direccion_b"         => 'required',
            "id_pais"             => 'required',
            "id_ciudad"           => 'required',
            "telefono"            => 'required',
            'usuario_creador'     => 'required',
            'usuario_modificador' => 'required',
            'estado'              => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{            
            try {                
                DB::beginTransaction();              
                    $direccion->update($datos);
                DB::commit();
                return $this->successResponse($datos);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e);
            }
        }
    }

    public function destroy($id)
    {
        $direccion = co_DireccionesEnvio::find($id);
     
        $direccion->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null,"Dirección Eliminada");
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('direccion');
        $direccion = co_DireccionesEnvio::orderBy('created_at', 'desc')->
                                      parametro($parametro)->
                                      where('estado','=','activo')->
                                      get();

        return $this->successResponse($direccion);
    }
}
