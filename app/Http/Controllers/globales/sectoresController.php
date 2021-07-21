<?php

namespace App\Http\Controllers\globales;
use App\Http\Controllers\ApiResponseController;

use Illuminate\Http\Request;
use App\Librerias\sectores;

class sectoresController extends ApiResponseController
{
    public function index(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    
    public function show(Request $request,$id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy(Request $request, $id)
    {
        //
    }

    public function buscaSectores($id)
    {
        $ciudad = sectores::select('sectores.*')->  
                            orderBy('sectores.descripcion')->
                            where('sectores.id_ciudad','=',$id)->
                            get();
                            if ($ciudad == null){
                                return $this->errorResponse($ciudad);
                            }
                            return $this->successResponse($ciudad);
    }
}
