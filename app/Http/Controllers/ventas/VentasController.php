<?php

namespace App\Http\Controllers\ventas;
use App\Http\Controllers\ApiResponseController;

use App\Librerias\VentasModel;
use Illuminate\Http\Request;

class VentasController extends ApiResponseController
{
    public function index(Request $request)
    {
        $ventas = VentasModel::orderBy('created_at', 'desc')->
                           get();

         if ($ventas == null){

            return $this->errorResponse($ventas);
        }
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
