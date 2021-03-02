<?php

namespace App\Http\Controllers;

use App\librerias\veinspeccion;
use Illuminate\Http\Request;

class VeinspeccionController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inspec = veinspeccion::orderBy('created_at', 'desc')->
        get();

if ($inspec == null){

return $this->errorResponse($inspec);
}
return $this->successResponse($inspec);
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
     * @param  \App\veinspeccion  $veinspeccion
     * @return \Illuminate\Http\Response
     */
    public function show(veinspeccion $veinspeccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\veinspeccion  $veinspeccion
     * @return \Illuminate\Http\Response
     */
    public function edit(veinspeccion $veinspeccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\veinspeccion  $veinspeccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, veinspeccion $veinspeccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\veinspeccion  $veinspeccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(veinspeccion $veinspeccion)
    {
        //
    }
}
