<?php

namespace App\Http\Controllers\compras;
use Illuminate\Http\Request;

use App\Librerias\globales\pais;
use Illuminate\Support\Facades\DB;
use App\Librerias\compras\proveedores;
use App\Librerias\empresa\tipoMonedas;
use App\Librerias\empresa\tipo_documento;
use App\Librerias\compras\coTipoProveedores;
use App\Librerias\ventas\ve_CondicionesPago;
use App\Librerias\compras\coCuentasProveedor;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\contabilidadGeneral\cgcatalogo;

class proveedoresController extends ApiResponseController
{
    public function index(Request $request)
    {
        $proveedores = proveedores::join('mov_globales.ciudades', 'mov_globales.ciudades.id_ciudad','=','proveedores.id_ciudad')->
                             join('mov_globales.paises', 'mov_globales.paises.id_pais','=','proveedores.id_pais')->
                             select('proveedores.*','mov_globales.ciudades.descripcion as ciudad','mov_globales.paises.descripcion as pais') ->
                             where('proveedores.estado','=','activo')->
                             get();
     
        foreach ($proveedores as $key => $value) {
            $coCuentasProveedor = coCuentasProveedor::where([['co_cuentas_proveedores.cod_sp','=',$value->cod_sp],
                                                             ['co_cuentas_proveedores.cod_sp_sec','=',$value->cod_sp_sec],
                                                             ['co_cuentas_proveedores.estado','=','activo']])->
                                                    
                                                    get();
            $value->cuentas_proveedor = $coCuentasProveedor; 
        }
            
        if ($proveedores == null or $proveedores == '') {
            return $this->errorResponse('No existen proveedores');
        }
        else{
            return $this->successResponse($proveedores, $request->urlRequest);
        }
    }

    public function store(Request $request)
    {
        $maxid=0;
        $idsecuencia=0;
        
        $maxid= proveedores::get('cod_sp_sec')->max();

        if ($maxid==null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia=$maxid->cod_sp_sec;
            $idsecuencia=$idsecuencia+1;
        }

        $datos=array(
            "cod_sp"           => $request->input("cod_sp"),
            'cod_sp_sec'       => '',
            "nom_sp"           => $request->input("nom_sp"),
            "dir_sp"           => $request->input("dir_sp"),
            "id_ciudad"        => $request->input("id_ciudad"),
            "id_pais"          => $request->input("id_pais"),
            "tel_sp"           => $request->input("tel_sp"),
            "fax_sp"           => $request->input("fax_sp"),
            "cont_sp"          => $request->input("cont_sp"),
            "cond_pago"        => $request->input("cond_pago"),
            "documento"        => $request->input("documento"),
            "moneda"           => $request->input("id_moneda"),
            "email"            => $request->input("email"),
            "tipo_doc"         => $request->input("tipo_doc"),
            "cuenta_no"        => $request->input("cuenta_no"),
            "cuentas_no"       => $request->input("cuentas_no"),
            "estado"           => $request->input("estado"),
            "usuario_creador"  => $request->input("usuario_creador")          
        );
        
        $message=[
            'required' => 'El campo: attribute es requerido',
            'unique'   => 'El campo: attribute debe ser unico',
            'numeric'  => 'El campo: attribute debe ser numerico'
        ];
        
        $datos['cod_sp_sec'] = $idsecuencia;
        // return request()->json($datos);
        $validator = validator($datos, [
            'cod_sp'              => 'required',
            'cod_sp_sec'          => 'required',
            'nom_sp'              => 'required',
            'dir_sp'              => 'required',
            'moneda'              => 'required',
            'tel_sp'              => 'required',
            "cont_sp"             => 'required',
            "documento"           => 'required',
            "cond_pago"           => 'required',
            "tipo_doc"            => 'required',
            "email"               => 'required',
            "cuenta_no"           => 'required',
            "id_pais"             => 'required',
            "id_ciudad"           => 'required',
            'usuario_creador'     => 'required'
        ],$message);

        if ($validator->fails()) {
           $errors = $validator->errors();
           return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{  
            try {
                DB::beginTransaction();
                    proveedores::create($datos);
                    
                    if (count($datos['cuentas_no']) !== 0) {
                        $datosd = null;
                        
                        for ($i=0; $i < count($datos['cuentas_no']); $i++) {
                            $datosd = array('descripcion'=> $datos['cuentas_no'][$i]['descripcion'],	
                                            'cod_sp'	 => $datos['cod_sp'],
                                            'cod_sp_sec' => $datos['cod_sp_sec'],
                                            'cuenta_no'	 => $datos['cuentas_no'][$i]['cuenta_no'],
                                            'porciento'  => isset($datos['cuentas_no'][$i]['porciento']) ? $datos['cuentas_no'][$i]['porciento'] : 0,
                                            "estado"     =>'activo',
                            );
                            
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];
            
                            $validator = validator($datosd, [
                                'descripcion' => 'required',
                                'cod_sp'      => 'required',
                                'cod_sp_sec'  => 'required',
                                'cuenta_no'   => 'required',
                                'porciento'   => 'required',
                                'estado'      => 'required',
                            ],$messages);
                         
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest);                        
                            }                                                               
                            coCuentasProveedor::create($datosd);
                        }                        
                    }
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }  
        }
    }

    public function show(Request $request,$codspsec)
    {
        $myArray = explode('-',$codspsec);
       
        $cod = $myArray[0];
        $codsec = $myArray[1];
        
        $proveedor = proveedores::where([['cod_sp','=',$cod], ['cod_sp_sec','=',$codsec]])->first();
                 
        $cuentas = coCuentasProveedor::where([['cod_sp','=',$proveedor->cod_sp],
                                              ['cod_sp_sec','=',$proveedor->cod_sp_sec],
                                              ['co_cuentas_proveedores.estado','=','activo']])->
                                       join('cgcatalogo','cgcatalogo.cuenta_no','=','co_cuentas_proveedores.cuenta_no')->
                                       select('co_cuentas_proveedores.*','cgcatalogo.origen','cgcatalogo.tipo_cuenta')->
                                       get();
        
        $proveedor->cuentas_proveedor = $cuentas;

        if ($proveedor == null) {
            return $this->errorResponse('No existen datos');
        }
        else {
            return $this->successResponse($proveedor, $request->urlRequest);
        }
    }
    
    public function update(Request $request, $id)
    {
        $myArray = explode('-',$id);
       
        $cod = $myArray[0];
        $codsec = $myArray[1];
        
        $datos=array(
            "cod_sp"           => $request->input("cod_sp"),
            "cod_sp_sec"       => $request->input("cod_sp_sec"),
            "nom_sp"           => $request->input("nom_sp"),
            "dir_sp"           => $request->input("dir_sp"),
            "id_ciudad"        => $request->input("id_ciudad"),
            "id_pais"          => $request->input("id_pais"),
            "tel_sp"           => $request->input("tel_sp"),
            "fax_sp"           => $request->input("fax_sp"),
            "cont_sp"          => $request->input("cont_sp"),
            "cond_pago"        => $request->input("cond_pago"),
            "documento"        => $request->input("documento"),
            "moneda"           => $request->input("id_moneda"),
            "email"            => $request->input("email"),
            "tipo_doc"         => $request->input("tipo_doc"),
            "cuenta_no"        => $request->input("cuenta_no"),
            "estado"           => $request->input("estado"),
            "usuario_creador"  => $request->input("usuario_creador"),
            "usuario_modificador"  => $request->input("usuario_modificador")        
        );

        $message=[
            'required'  => 'El campo: attribute es requerido',
            'unique'  => 'El campo: attribute debe ser unico',
            'numeric'  => 'El campo: attribute debe ser numerico'
        ];
        
        $validator = validator($datos, [
            'cod_sp'              => 'required',
            'nom_sp'              => 'required',
            'dir_sp'              => 'required',
            'tel_sp'              => 'required',
            "cont_sp"             => 'required',
            "cond_pago"           => 'required',
            "documento"           => 'required',
            "tipo_doc"            => 'required',
            "cuenta_no"           => 'required',
            "id_pais"             => 'required',
            "id_ciudad"           => 'required',
            'usuario_modificador' => 'required'            
        ],$message);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try {
                DB::beginTransaction();
                    proveedores::where([['cod_sp','=',$cod], ['cod_sp_sec','=',$codsec]])->update($datos);

                    if (count($request->input("cuentas_no")) !== 0) {

                        $datosd = null;
                        $cuentas = $request->input("cuentas_no");
                       
                        for ($i=0; $i < count($cuentas); $i++) {
                            
                            $coCuentasProveedor = coCuentasProveedor::where([['cod_sp','=',$datos['cod_sp']],
                                                                ['cod_sp_sec','=',$datos['cod_sp_sec']],
                                                                ['cuenta_no','=',$cuentas[$i]['cuenta_no']],
                                                                ['co_cuentas_proveedores.estado','=','activo']])->
                                                            first();
                            
                            $datosd = array('descripcion'=> $cuentas[$i]['descripcion'],	
                                            'cod_sp'	 => $datos['cod_sp'],
                                            'cod_sp_sec' => $datos['cod_sp_sec'],
                                            'cuenta_no'	 => $cuentas[$i]['cuenta_no'],
                                            'porciento'  => $cuentas[$i]['porciento'],
                                            "estado"     =>'activo',
                            );
                                                  
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];
            
                            $validator = validator($datosd, [
                                'descripcion' => 'required',
                                'cod_sp'      => 'required',
                                'cuenta_no'   => 'required',
                                'porciento'   => 'required',
                                'estado'      => 'required',
                            ],$messages);
                         
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest);                             
                            }    
                                     
                            if (empty($coCuentasProveedor)) {
                                coCuentasProveedor::create($datosd);
                            }else {                                       
                                $coCuentasProveedor->update($datosd);                                   
                            }         
                        }                        
                    }
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
        $proveedor = proveedores::find($id);
        if ($proveedor == null){
            return $this->response()->json(array("msj:" => "Registro no Existe"));
        }
         $proveedor->update(['estado' => 'ELIMINADO']);
         return response()->json(array("msj:" => "Registro Eliminado"));
    }
    
    public function busquedaTitulo(Request $request){
        $parametro = $request->get('proveedor');
        
        $productos = proveedores::where('proveedores.estado','=','ACTIVO')->
                                   titulo($parametro)->        
                                   get();

        return $this->successResponse($productos, $request->urlRequest);
    }

    public function autollenado(Request $request){ 
        try {
            $respuesta = array();
            
            $catalogo = cgcatalogo::orderBy('id', 'asc')->where([['nivel','=',3],['estado','=','ACTIVO']])->get();                                
            $condiciones = ve_CondicionesPago::orderBy('id', 'asc')->where('estado','=','activo')->get();
            $monedas = tipoMonedas::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();                                
            $tipoProveedor = coTipoProveedores::orderBy('id', 'asc')->where('estado','=','ACTIVO')->get();
            $tipoDocumento = tipo_documento::orderBy('tipo_documento', 'asc')->where('estado','=','ACTIVO')->get();
            $paises = pais::orderBy('created_at', 'desc')->get();                  

            $_catalogo = array("label" => 'catalogo', "data" => $catalogo, "icono" => 'fas fa-dolly-flatbed');
            $_condiciones = array("label" => 'condiciones', "data" => $condiciones, "icono" => 'fas fa-dolly-flatbed');
            $_monedas = array("label" => 'monedas', "data" => $monedas, "icono" => 'fas fa-dolly-flatbed');
            $_tipoProveedor = array("label" => 'tipo-proveedor', "data" => $tipoProveedor, "icono" => 'fas fa-dolly-flatbed');
            $_tipoDocumento = array("label" => 'tipo documento', "data" => $tipoDocumento, "icono" => 'fas fa-dolly-flatbed');
            $_paises = array("label" => 'mov_globales.paises', "data" => $paises, "icono" => 'fas fa-dolly-flatbed');

            array_push($respuesta,$_catalogo);
            array_push($respuesta,$_condiciones);
            array_push($respuesta,$_monedas);
            array_push($respuesta,$_tipoProveedor);
            array_push($respuesta,$_tipoDocumento);
            array_push($respuesta,$_paises);

            return $this->successResponse($respuesta, $request->urlRequest);      
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
    }

    public function catalogoProveedores(Request $request) {

        $proveedor = $request->get('nom_sp');
        $pais = $request->get('id_pais');
        $ciudad = $request->get('id_ciudad');
        $documento = $request->get('documento');
        $email = $request->get('email');
        $telefono = $request->get('tel_sp');
        $tipo_doc = $request->get('tipo_doc');
        $moneda = $request->get('moneda');
        $contacto = $request->get('cont_sp');

        $proveedores = proveedores::where([['mov_ventas.ve_cond_pagos.estado','=','activo'],
                                           ['proveedores.estado','=','activo']])->
                                    join('mov_ventas.ve_cond_pagos','mov_ventas.ve_cond_pagos.cond_pago','=','proveedores.cond_pago')->          
                                    parametro($proveedor)->     
                                    pais($pais)->                    
                                    ciudad($ciudad)->
                                    documento($documento)->
                                    email($email)->
                                    telefono($telefono)->
                                    tipoDoc($tipo_doc)->
                                    moneda($moneda)->
                                    contacto($contacto)->
        select('proveedores.nom_sp','proveedores.dir_sp','proveedores.tel_sp','proveedores.email','proveedores.cont_sp',
               'mov_ventas.ve_cond_pagos.descripcion as condicion_pago')->
        get();

        return $this->successResponse($proveedores, $request->urlRequest); 
    }
}
