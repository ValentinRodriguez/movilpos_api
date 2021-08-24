<?php

namespace App\Http\Controllers\contabilidadGeneral;
use App\Http\Controllers\ApiResponseController;
use App\Controller\contabilidadGeneral\cgcodigoestados;
use App\Librerias\cgcodigoestados as LibreriasCgcodigoestados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CgcodigoestadosController extends  ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // return response()->json($request);
        $estados = LibreriasCgcodigoestados::orderBy('descripcion_esp', 'asc')->
                    where('estado','=','ACTIVO')->
                    // select('CONCAT(cgcodigoestado.id_estado,'-',cgcodigoestado.descripcion_esp as descripcion')->
                    get();

        return $this->successResponse($estados, $request->urlRequest);
    }

    public function store(Request $request)
    {
        $datos = $request->all();
        $datos['tipo_estado'] = $datos['tipo_estado']['values'];
        $datos['signo'] = $datos['signo']['values'];
        // return response()->json($datos);

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion_esp' => 'required',
            'id_estado' => 'required',
            'grupo' => 'required',
            'orden_grupo' => 'required',
            'tipo_estado' => 'required',
            'signo' => 'required',
            'estado' => 'required',
            'usuario_creador'   => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try {
                DB::beginTransaction();
                    LibreriasCgcodigoestados::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cgcodigoestados  $cgcodigoestados
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estado = LibreriasCgcodigoestados::find($id);
        return $this->successResponse($estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cgcodigoestados  $cgcodigoestados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $datos['tipo_estado'] = $datos['tipo_estado']['values'];
        $datos['signo'] = $datos['signo']['values'];

        $estado = LibreriasCgcodigoestados::find($id);

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion_esp' => 'required',
            'id_estado' => 'required',
            'grupo' => 'required',
            'orden_grupo' => 'required',
            'tipo_estado' => 'required',
            'signo' => 'required',
            'estado' => 'required',
            'usuario_creador'   => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try {
                DB::beginTransaction();
                    $estado->update($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cgcodigoestados  $cgcodigoestados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalogo = LibreriasCgcodigoestados::find($id);
        if ($catalogo == null){
            return $this->response()->json(array("msj:" => "Registro no Existe"));
        }
        $catalogo->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null);
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('estado');

        // return response()->json($parametro);
        $puerto = LibreriasCgcodigoestados::orderBy('created_at', 'desc')->
                            where([['id_estado','=',$parametro],['estado','=','activo']])->
                            get();

        return $this->successResponse($puerto, $request->urlRequest);
    }
}
