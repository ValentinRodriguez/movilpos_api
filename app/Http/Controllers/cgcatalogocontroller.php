<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Librerias\cgcatalogo;
use App\Librerias\cg_codigosRetenciones;

class cgcatalogocontroller extends ApiResponseController
{
    public function index() {
        $catalogo = cgcatalogo::orderBy('nivel','asc')->
                                where('estado','=','ACTIVO')->
                                get();

        if ($catalogo == null){
             return $this->errorResponse($catalogo);
        }
        return $this->successResponse($catalogo);
    }

    public function cuentasAux()
    {
        $tipoProveedor = cgcatalogo::orderBy('id', 'asc')->
                                     where([['nivel','=',3],['estado','=','ACTIVO']])->
                                     get();
        
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
            // 'estado_resultado'  => 'required',
            // 'estado_bg'         => 'required',
            // 'estado_a'          => 'required',
            // 'estado_m'          => 'required',
            'codigo_estado'     => 'required',
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
                return $this->successResponse(1);                
            }
            catch (\Exception $e ){
                return $this->errorResponse($e);
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
        $catalogo = cgcatalogo::find($id);

        $datos = array("cuenta_no"            =>$request->input('cuenta_no'),
                        "descripcion"         =>$request->input('descripcion'),
                        "origen"              =>$request->input('origen'),
                        "nivel"               =>$request->input('nivel'),
                        "referencia"          =>$request->input('referencia'),
                        "catalogo"            =>$request->input('catalogo'),
                        "depto"               =>$request->input('departamento'),
                        "codigo_estado"       =>$request->input('codigo_estado'),
                        "aplica_a"            =>$request->input('aplica_a'),
                        "cuenta_resultado"    =>$request->input('cuenta_resultado'),
                        "tipo_cuenta"         =>$request->input('tipo_cluente'),
                        "selectivo_consumo"   =>$request->input('selectivo_consumo'),
                        "retencion"           =>$request->input('retencion'),
                        "usuario_creador"     =>$request->input('usuario_creador'),
                        "usuario_modificador" =>$request->input('usuario_modificador'),
                        "codigo_isr"          =>$request->input('codigo_isr'),
                        "estado"              =>$request->input('estado'),
                        "estado_a"            =>$request->input('estado_a'),
                        "estado_m"            =>$request->input('estado_m'),
                        "grupo"               =>$request->input('grupo'),
                        "tipo_cuenta"         =>$request->input('tipo_cuenta'),
                        "usuario_modificador" =>$request->input("usuario_modificador")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'         => 'required|string|min:10|max:100',
            "origen"              => 'required|string',
            "nivel"               => 'required|numeric',
            "referencia"          => 'required|string',
            "catalogo"            => 'required|string',
            "depto"               => 'required|string',
            "codigo_estado"       => 'required|string|min:3',
            "aplica_a"            => 'required|string',
            "cuenta_resultado"    => 'required|string',
            'usuario_modificador' => 'required|string'
        ],$messages);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            $catalogo->update($request->all());
            return $this->successResponse($catalogo);
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
        $cuenta_no    = $request->get('cuenta_no');

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
