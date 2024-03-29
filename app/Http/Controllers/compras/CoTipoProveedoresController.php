<?php

namespace App\Http\Controllers\compras;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Librerias\compras\proveedores;
use App\Librerias\compras\coTipoProveedores;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\contabilidadGeneral\cgcatalogo;

class CoTipoProveedoresController extends ApiResponseController
{
    public function index(Request $request)
    {
        $tipoProveedor = coTipoProveedores::orderBy('id', 'asc')->where('estado','=','ACTIVO')->get();        
        return $this->successResponse($tipoProveedor, $request->urlRequest);
    }

    public function store(Request $request)
    {        
        $datos = array("descripcion"      =>$request->input("descripcion"),
                       "cuenta_no"        =>$request->input("cuenta_no"),
                       "usuario_creador"  =>$request->input("usuario_creador"),
                       "estado"           =>$request->input("estado")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'     => 'required',
            'cuenta_no'       => 'required',
            'usuario_creador' => 'required',
            'estado'          => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try {                
                DB::beginTransaction();  
                    $maxid=0;
                    $idsecuencia=0;
                    $maxid = coTipoProveedores::get('tipo_proveedor')->max();

                    if ($maxid == null){
                        $idsecuencia=1;
                    }
                    else{
                        $idsecuencia = $maxid->tipo_proveedor;
                        $idsecuencia=$idsecuencia + 1;
                    }

                    $datos = $datos + array('tipo_proveedor' =>$idsecuencia);
                    coTipoProveedores::create($datos);
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
        $tipoProveedor = coTipoProveedores::orderBy('tipo_proveedor', 'asc')->
                               where([['tipo_proveedor','=',$id],['estado','=','ACTIVO']])->
                               first();

        $catalogo = cgcatalogo::orderBy('nivel','asc')->where([['cuenta_no','=',$tipoProveedor->cuenta_no],['estado','=','ACTIVO']])->
                                first();

        $tipoProveedor->cuenta_no = $catalogo;        

        if ($tipoProveedor == null){
            return $this->errorResponse($tipoProveedor);
        }
        return $this->successResponse($tipoProveedor, $request->urlRequest);
    }

    public function update(Request $request, $id)
    {
        $tipoProveedor = coTipoProveedores::where([['tipo_proveedor','=',$id],['estado','=','ACTIVO']])->first();
        
        $datos = array("descripcion"         => $request->input("descripcion"),
                       "cuenta_no"           => $request->input("cuenta_no"),
                       "usuario_creador"     => $request->input("usuario_creador"),
                       'usuario_modificador' => $request->input("usuario_modificador"),
                       "estado"              => $request->input("estado")
        );
        
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'         => 'required',
            'cuenta_no'           => 'required',
            'usuario_creador'     => 'required',
            'usuario_modificador' => 'required',
            'estado'              => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try {      
                DB::beginTransaction();
                    $tipoProveedor->update($datos);  
                DB::commit();
                return $this->successResponse(1, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function destroy(Request $request, $id)
    {
        $tipoProveedor = coTipoProveedores::orderBy('tipo_proveedor', 'asc')->where([['tipo_proveedor','=',$id],['estado','=','ACTIVO']])->first();
        $proveedor = proveedores::where([['cod_sp','=',$id],['estado','=','activo']])->first();

        if($proveedor <> null){
            return $this->errorResponse("No puede eliminar este Tipo de Proveedor, tiene proveedor/es asociado/s");
        }
     
        $tipoProveedor->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, $request->urlRequest);
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('tipo');
        $tipoProveedor = coTipoProveedores::orderBy('cuenta_no', 'asc')->
                                where([['descripcion','=',$parametro],['estado','=','ACTIVO']])->
                                get();                              

        return $this->successResponse($tipoProveedor, $request->urlRequest);
    }
}
