<?php

namespace App\Http\Controllers\empresa;
use Illuminate\Http\Request;
use App\Librerias\empresa\tipo_documento;
use App\Http\Controllers\ApiResponseController;

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
