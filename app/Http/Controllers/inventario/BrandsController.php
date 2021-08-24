<?php

namespace App\Http\Controllers\inventario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Librerias\inventario\BrandsModel;
use App\Librerias\inventario\InvProductos;
use App\Http\Controllers\ApiResponseController;

class BrandsController extends ApiResponseController
{
    public function index(Request $request)
    {
        $brand = BrandsModel::orderBy('id_brand', 'asc')->where('estado','=','ACTIVO')->get();                              
        return $this->successResponse($brand, $request->urlRequest);
    }

    public function store(Request $request)
    {
        $maxid=0;
        $idsecuencia=0;
        $maxid = BrandsModel::get('id_brand')->max();
        
        if ($maxid == null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia = $maxid->id_brand;
            $idsecuencia=$idsecuencia + 1;
        }

        $datos = array("id_brand"        =>$idsecuencia,
                       "descripcion"     =>$request->input("descripcion"),
                       "usuario_creador" =>$request->input("usuario_creador"),
                       "estado"          =>$request->input("estado"),
        );
      
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'         => 'required|string',
            'usuario_creador'     => 'required|string',
            'estado'              => 'required|string'
        ],$messages);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try {                
            DB::beginTransaction();                  
                BrandsModel::create($datos);
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
        $brand = BrandsModel::find($id);
        if ($brand == null){
            return $this->errorResponse($brand);
        }
        return $this->successResponse($brand, $request->urlRequest);
    }

    public function update(Request $request, $id)
    {
        $brand = BrandsModel::find($id);

        $datos = array(
            "descripcion"         =>$request->input("descripcion"),
            "usuario_modificador" =>$request->input("usuario_modificador")
        );

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            "descripcion"         => 'required|string',
            "usuario_modificador" => 'required|string',
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            $brand->update($request->all());
            return $this->successResponse($brand, $request->urlRequest);
        }
    }

    public function destroy(Request $request, $id)
    {
        $brand = BrandsModel::find($id);

        $invproductos = InvProductos::where('id_brand','=',$id)->where('estado','=','ACTIVO')->first();
        
        if($invproductos <> null){
            return $this->errorResponse("No puede eliminar esta bodega, tiene producto/s asociado/s");
        }

        $brand->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, $request->urlRequest);
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('marca');
        $busqueda = BrandsModel::orderBy('id_brand', 'asc')->
                              parametro($parametro)->
                              where('estado','=','ACTIVO')->
                              get();                              
        return $this->successResponse($busqueda, $request->urlRequest);
    }
}
