<?php

namespace App\Http\Controllers;

use App\Librerias\areasEmpresa;
use Illuminate\Http\Request;

class AreasEmpresaController extends Controller
{
    public function index()
    {
        $areas = areasEmpresa::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();
        return $this->successResponse($areas);
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(areasEmpresa $areasEmpresa)
    {
        //
    }
    
    public function update(Request $request, areasEmpresa $areasEmpresa)
    {
        //
    }
    
    public function destroy(areasEmpresa $areasEmpresa)
    {
        //
    }
}
