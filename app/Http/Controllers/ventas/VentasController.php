<?php

namespace App\Http\Controllers\ventas;
use Illuminate\Http\Request;

use App\Librerias\ventas\VentasModel;
use App\Http\Controllers\ApiResponseController;

class VentasController extends ApiResponseController
{
    public function index(Request $request)
    {
        $ventas = VentasModel::orderBy('created_at', 'desc')->get();
        return $this->successResponse($ventas, $request->urlRequest);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(VentasModel $ventasModel)
    {
        //
    }

    public function edit(VentasModel $ventasModel)
    {
        //
    }

    public function update(Request $request, VentasModel $ventasModel)
    {
        //
    }

    public function destroy(VentasModel $ventasModel)
    {
        //
    }
}
