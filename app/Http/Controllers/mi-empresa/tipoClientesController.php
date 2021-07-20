<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\tipoClientes;
use App\librerias\Mclientes;
use Illuminate\Support\Facades\DB;

class tipoClientesController extends ApiResponseController
{
    public function index(Request $request)
    {
        $tipoCliente = tipoClientes::orderBy('tipo_cliente', 'asc')->where('estado','=','ACTIVO')->get();
        
        return $this->successResponse($tipoCliente, $request->urlRequest);
    }
    
    public function store(Request $request){
        $datos = array('descripcion'     => $request->input('descripcion'),
                       'usuario_creador' => $request->input('usuario_creador'),
                       'estado'          => 'ACTIVO');
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'string'  => 'El campo :attribute solo debe contener letras',
        ];

        $validator = validator($datos, [
            "descripcion" => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors =  $validator->errors();
            return $this->errorResponse($errors);
        } else {
            try {
                DB::beginTransaction();  
                    $maxid=0;
                    $idsecuencia=0;
                    $maxid = tipoClientes::get('tipo_cliente')->max();

                    if ($maxid == null){
                        $idsecuencia=1;
                    } else {
                        $idsecuencia = $maxid->tipo_cliente;
                        $idsecuencia=$idsecuencia + 1;
                    }

                    $datos = $datos + array('tipo_cliente' =>$idsecuencia);
                    tipoClientes::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function show(Request $request,$id)
    {
        $tipo = tipoClientes::find($id);
        if ($tipo == null){
            return $this->errorResponse($tipo, $request->urlRequest);
        }
        return $this->successResponse($tipo, $request->urlRequest);
    }
    
    public function update(Request $request, $id)
    {
        $tipos = tipoClientes::find($id);

        $datos = array(
            'descripcion'         =>$request->input('descripcion') ,
            'usuario_modificador' =>$request->input('usuario_modificador')
        );
       
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'         => 'required|string|max:500',
            'usuario_modificador' => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try {
                DB::beginTransaction();  
                    $tipos->update($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }
    
    public function destroy(Request $request, $id)
    {
        $tipoCliente = tipoClientes::where('tipo_cliente','=',$id)->first();
        
        if ($tipoCliente == null){
            return $this->errorResponse(null, "Esta Este registro no existe no existe");
        }

        $cliente = Mclientes::where('tipo_cliente','=',$id)->where('estado','=','ACTIVO')->first();
        if($cliente <> null){
            return $this->errorResponse("No puede eliminar este registro, tiene cliente/s asociado/s");
        }

        $tipoCliente->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, $request->urlRequest,"Tipo de cliente Eliminado");
    }

    public function busquedaTipo(Request $request)
    {
        $descripcion = $request->get('descripcion');
        
        $tipo  = tipoClientes::orderBy('id', 'asc')->
                               where('tipos_clientes.descripcion', '=', $descripcion)->get();
        return $this->successResponse($tipo, $request->urlRequest);
    }
}
