<?php

namespace App\Http\Controllers;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cgcodigoestados  $cgcodigoestados
     * @return \Illuminate\Http\Response
     */
    public function show(cgcodigoestados $cgcodigoestados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cgcodigoestados  $cgcodigoestados
     * @return \Illuminate\Http\Response
     */
    public function edit(cgcodigoestados $cgcodigoestados)
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
    public function update(Request $request, cgcodigoestados $cgcodigoestados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cgcodigoestados  $cgcodigoestados
     * @return \Illuminate\Http\Response
     */
    public function destroy(cgcodigoestados $cgcodigoestados)
    {
        //
    }
}
