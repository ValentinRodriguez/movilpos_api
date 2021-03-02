<?php

namespace App\Http\Controllers;

use App\Librerias\costos;

use Illuminate\Http\Request;

class CostosController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costos = costos::join('inv_productos as b','b.codigo','=','costos.codigo')->
        select('costos.*','b.descripcion')->  
        orderBy('created_at', 'desc')->
        get();
        if ($costos == null){
            return $this->errorResponse($costos);
        }
        return $this->successResponse($costos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = array("ventas"        =>$request->input("ventas"),
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

$messages = ['required' => 'El campo :attribute es requerido.',
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
return $this->errorResponseParams($errors->all());
} else {

    costos::create($datos);
return $this->successResponse($datos, 'Costo guardado');
}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\costos  $costos
     * @return \Illuminate\Http\Response
     */
    public function show(costos $costos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\costos  $costos
     * @return \Illuminate\Http\Response
     */
    public function edit(costos $costos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\costos  $costos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, costos $costos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\costos  $costos
     * @return \Illuminate\Http\Response
     */
    public function destroy(costos $costos)
    {
        //
    }
}
