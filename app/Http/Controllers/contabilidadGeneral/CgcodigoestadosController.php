<?php

namespace App\Http\Controllers\contabilidadGeneral;
use App\Http\Controllers\ApiResponseController;
use App\Controller\contabilidadGeneral\cgcodigoestados;
use App\Librerias\cgcodigoestados as LibreriasCgcodigoestados;
use Illuminate\Http\Request;

class CgcodigoestadosController extends  ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estados = LibreriasCgcodigoestados::orderBy('descripcion_esp', 'asc')->
        where('estado','=','ACTIVO')->
        select('CONCAT(cgcodigoestado.id_estado,'-',cgcodigoestado.descripcion_esp as descripcion')->
        get();

        if ($estados == null){
            return $this->errorResponse($estados);
        }
        return $this->successResponse($estados, $request->urlRequest);
    }

    public function store(Request $request)
    {
        return response()->json($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cgcodigoestados  $cgcodigoestados
     * @return \Illuminate\Http\Response
     */
    public function show(LibreriasCgcodigoestados $cgcodigoestados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cgcodigoestados  $cgcodigoestados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LibreriasCgcodigoestados $cgcodigoestados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cgcodigoestados  $cgcodigoestados
     * @return \Illuminate\Http\Response
     */
    public function destroy(LibreriasCgcodigoestados $cgcodigoestados)
    {
        //
    }
}
