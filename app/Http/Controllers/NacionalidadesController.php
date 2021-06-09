<?php

namespace App\Http\Controllers;

use App\Librerias\Nacionalidades;
use Illuminate\Http\Request;

class NacionalidadesController extends ApiResponseController
{
    public function index()
    {
        $nacionalidades = Nacionalidades::get();

        return $this->successResponse($nacionalidades);
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(Nacionalidades $nacionalidades)
    {
        //
    }
    
    public function update(Request $request, Nacionalidades $nacionalidades)
    {
        //
    }
    
    public function destroy(Nacionalidades $nacionalidades)
    {
        //
    }
}
