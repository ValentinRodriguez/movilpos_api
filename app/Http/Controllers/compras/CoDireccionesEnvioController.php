<?php

namespace App\Http\Controllers\compras;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Librerias\compras\co_DireccionesEnvio;
use App\Http\Controllers\ApiResponseController;

class CoDireccionesEnvioController extends ApiResponseController
{
    public function index(Request $request)
    {
        $direcciones = co_DireccionesEnvio::join('mov_globales.ciudades', 'mov_globales.ciudades.id_ciudad','=','co_direcciones_envios.id_ciudad')->
                                        join('mov_globales.paises', 'mov_globales.paises.id_pais','=','co_direcciones_envios.id_pais')->
                                        select('co_direcciones_envios.*','mov_globales.ciudades.descripcion as ciudad','mov_globales.paises.descripcion as pais') ->
                                        where('co_direcciones_envios.estado','=','activo')->
                                        get();

        return $this->successResponse($direcciones, $request->urlRequest);
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
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();              
                    co_DireccionesEnvio::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function show(Request $request,$id)
    {
        $categoria = co_DireccionesEnvio::find($id);
        if ($categoria == null){
            return $this->errorResponse($categoria);
        }
        return $this->successResponse($categoria, $request->urlRequest);
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
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();              
                    $direccion->update($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function destroy(Request $request, $id)
    {
        $direccion = co_DireccionesEnvio::find($id);
     
        $direccion->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, $request->urlRequest);
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('direccion');
        $direccion = co_DireccionesEnvio::orderBy('created_at', 'desc')->
                                      parametro($parametro)->
                                      where('estado','=','activo')->
                                      get();

        return $this->successResponse($direccion, $request->urlRequest);
    }
}
