<?php

namespace App\Http\Controllers;

use App\LIbrerias\provincias;
use Illuminate\Http\Request;

class ProvinciasController extends Controller
{
    public function index()
    {
        //
    }

    public function buscaProvincia()
    {
        $provincia = provincias::join('regiones','regiones.id_region','=','provincias.id_region')->
                            select('provincias.*')->  
                            orderBy('created_at', 'desc')->
                            where('provincias.id_region','=',$id)->
                            get();
        if ($provincia == null){
            return $this->errorResponse($provincia);
        }
        return $this->successResponse($provincia);
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(provincias $provincias)
    {
        //
    }
    
    public function update(Request $request, provincias $provincias)
    {
        //
    }
    
    public function destroy(provincias $provincias)
    {
        //
    }
}
