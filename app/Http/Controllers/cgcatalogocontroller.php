<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Librerias\cgcatalogo;
use App\Librerias\cg_codigosRetenciones;

class cgcatalogocontroller extends ApiResponseController
{
    public function index() {
        $catalogo = cgcatalogo::orderBy('cuenta_no', 'asc')->
                                where('estado','=','ACTIVO')->                                
                                select('cgcatalogo.*',DB::raw("CONCAT(cgcatalogo.cuenta_no,'-',cgcatalogo.descripcion) AS descripcion_c"))->
                                get();

        if ($catalogo == null){
             return $this->errorResponse($catalogo);
        }
        return $this->successResponse($catalogo);
    }

    public function cuentasAux()
    {
        $tipoProveedor = cgcatalogo::orderBy('cuenta_no', 'asc')->
                                     where([['nivel','=',3],['estado','=','ACTIVO']])->
                                     select('cgcatalogo.*',DB::raw("CONCAT(cgcatalogo.cuenta_no,'-',cgcatalogo.descripcion) AS descripcion_c"))->
                                     get();

        foreach ($tipoProveedor as $key => $value) {
            $nivel2 = cgcatalogo::where('cuenta_no','=',$value['aplica_a'])->first();
            $nivel1 = cgcatalogo::where('cuenta_no','=',$nivel2['aplica_a'])->first();

            $value->cuenta_nivel1 = $nivel1;
            $value->cuenta_nivel2 = $nivel2;
        }
        return $this->successResponse($tipoProveedor);
    }

    public function store(Request $request) {

        $datos = $request->all();

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        
        $validator = validator($datos, [
            'cuenta_no'         => 'required',
            'descripcion'       => 'required',
            'analitico'         => 'required',
            'catalogo'          => 'required',
            'depto'             => 'required',
            'nivel'             => 'required',
            'referencia'        => 'required',
            'origen'            => 'required',
            'aplica_a'          => 'required',
            'grupo'             => 'required',
            'tipo_cuenta'       => 'required',
            'selectivo_consumo' => 'required',
            'retencion'         => 'required',
            'codigo_isr'        => 'required',
            'cuenta_resultado'  => 'required',   
            'usuario_creador'   => 'required'  
        ],$messages);  
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            try {                
                DB::beginTransaction();                
                    cgcatalogo::create($datos);
                DB::commit();
                return $this->successResponse($datos);                
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }            
        }
    }
    
    public function show($id) {
        $catalogo = cgcatalogo::find($id);
        if ($catalogo == null){
            return $this->errorResponse($catalogo);
        }
        return $this->successResponse($catalogo);
    }
    
    public function update(Request $request, $id) {
        $datos = $request->all();
        
        $catalogo = cgcatalogo::find($id);

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'         => 'required',
            "origen"              => 'required',
            "nivel"               => 'required',
            "referencia"          => 'required',
            "catalogo"            => 'required',
            "depto"               => 'required',
            "aplica_a"            => 'required',
            "cuenta_resultado"    => 'required',
            'usuario_modificador' => 'required'
        ],$messages);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            try {                
                DB::beginTransaction();                
                    $catalogo->update($request->all());
                DB::commit();
                return $this->successResponse($catalogo);                
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }
        }
    }
    
    public function destroy($id) {
        $catalogo = cgcatalogo::find($id);
        if ($catalogo == null){
            return $this->response()->json(array("msj:" => "Registro no Existe"));
        }
        $catalogo->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null,"Catálogo Eliminada");
    }

    public function busquedaCatalogo(Request $request)
    {
        $cuenta_no = $request->get('cuenta_no');

        $busqueda = cgcatalogo::orderBy('cuenta_no','asc')->     
                                where([['cgcatalogo.cuenta_no','=',$cuenta_no],['estado','=','ACTIVO']])->
                                get();
                                                        
        return $this->successResponse($busqueda);
    }

    
    public function busquedaDescripcion(Request $request)
    {
        $descripcion = $request->get('descripcion');

        $busqueda = cgcatalogo::orderBy('cuenta_no','asc')->
                                where([['cgcatalogo.descripcion','=',$descripcion],
                                       ['estado','=','ACTIVO']])->
                                get();
                                            
        return $this->successResponse($busqueda);
    }

    public function codigosRetencion() {
        $catalogo = cg_codigosRetenciones::orderBy('codigo_isr','asc')->get();

        if ($catalogo == null){
             return $this->errorResponse($catalogo);
        }
        return $this->successResponse($catalogo);
    }
}
