<?php

namespace App\Http\Controllers\globales;
use Illuminate\Http\Request;

use App\Librerias\globales\sectores;
use App\Http\Controllers\ApiResponseController;

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
                            
                            return $this->successResponse($ciudad);
    }
}
