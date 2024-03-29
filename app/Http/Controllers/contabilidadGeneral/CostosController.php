<?php

namespace App\Http\Controllers\contabilidadGeneral;
use Illuminate\Http\Request;

use App\Librerias\inventario\costos;

use App\Http\Controllers\ApiResponseController;

class CostosController extends ApiResponseController
{
    public function index(Request $request)
    {
        $costos = costos::join('inv_productos as b','b.codigo','=','costos.codigo')->
                        select('costos.*','b.descripcion')->  
                        orderBy('created_at', 'desc')->
                        get();
        if ($costos == null){
            return $this->errorResponse($costos);
        }
        return $this->successResponse($costos, $request->urlRequest);
    }
    
    public function store(Request $request)
    {
        $datos = array(
            "ventas"        =>$request->input("ventas"),
            "mes_ini"            =>$request->input("mes_ini"),
            "mes_fin"            =>$request->input("mes_fin"),
            "codigo"             =>$request->input("codigo"),
            "material"           =>$request->input("material"),
            "labor"              =>$request->input("labor"),
            "gastos"             =>$request->input("gastos"),
            "material_usd"       =>$request->input("material_usd"),
            "labor_usd"          =>$request->input("labor_usd"),
            "gastos_usd"         =>$request->input("gastos_usd"),
            "estado"             =>'ACTIVO',
            "tasa"               =>$request->input("tasa"),        
            "usuario_creador"    =>$request->input("usuario_creador"),
        );

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'codigo'              => 'required',
            'usuario_creador'     => 'required|string',
            'estado'              => 'required|string'
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        } else {

            costos::create($datos);
            return $this->successResponse($datos, $request->urlRequest);
        }
    }
    
    public function show(costos $costos)
    {
        //
    }

    public function update(Request $request, costos $costos)
    {
        //
    }
    
    public function destroy(costos $costos)
    {
        //
    }
}
