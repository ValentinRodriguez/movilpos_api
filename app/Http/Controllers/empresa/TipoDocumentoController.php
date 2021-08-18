<?php

namespace App\Http\Controllers\empresa;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\tipo_documento;
use Illuminate\Http\Request;

class TipoDocumentoController extends ApiResponseController
{
    public function index(Request $request)
    {
        $tipo_documento = tipo_documento::orderBy('tipo_documento', 'asc')->
                            where('estado','=','ACTIVO')->
                            get();
                            
        return $this->successResponse($tipo_documento, $request->urlRequest);
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