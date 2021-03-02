<?php

namespace App\Http\Controllers;
use App\Librerias\tipo_documento;
use Illuminate\Http\Request;

class TipoDocumentoController extends ApiResponseController
{
    public function index()
    {
        $tipo_documento = tipo_documento::orderBy('tipo_documento', 'asc')->
                            where('estado','=','ACTIVO')->
                            get();
                            
        return $this->successResponse($tipo_documento);
    }
    public function store(Request $request)
    {
        //
    }

    public function show(tipo_documento $tipo_documento)
    {
        //
    }

    public function update(Request $request, tipo_documento $tipo_documento)
    {
        //
    }
    
    public function destroy(tipo_documento $tipo_documento)
    {
        //
    }
}
