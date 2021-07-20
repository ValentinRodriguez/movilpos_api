<?php

namespace App\Http\Controllers;

use App\Librerias\coOrdenesDetalle;
use App\Librerias\coOrdenesMaster;
use App\Librerias\co_puerto;
use App\Librerias\proveedores;
use App\Librerias\ve_CondicionesPago;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use App\Librerias\Empresa;
use App\Librerias\co_DireccionesEnvio;
use App\Librerias\invtransaccionesmodel;
use App\Librerias\Invtransaccdetallemodel;
use App\Librerias\coCuentasProveedor;

class CoOrdenesMasterController extends ApiResponseController
{    
    public function index(Request $request)
    {
        $compra = coOrdenesMaster::orderBy('created_at', 'asc')->
                                join('proveedores',function($join){
                                    $join->on('proveedores.cod_sp','=','co_ordenes_masters.cod_sp')->
                                    where('co_ordenes_masters.cod_sp_sec','=','proveedores.cod_sp_sec' )->
                                    orwhere([['co_ordenes_masters.estado','=',"activo"], ['co_ordenes_masters.orden_cerrada','=','no']]);
                                })->
                                join('ve_cond_pagos','ve_cond_pagos.cond_pago','=','co_ordenes_masters.cond_pago')->
                                select('co_ordenes_masters.*','proveedores.nom_sp','ve_cond_pagos.descripcion as descripcion_pago')->                                
                                get();

                                
        foreach ($compra as $key => $value) { 
            $compraDetalle = coOrdenesDetalle::where([['co_ordenes_detalles.estado','=','activo'], 
                                                     ['co_ordenes_detalles.num_oc','=', $value->num_oc]])-> 
                                                join('inv_productos','co_ordenes_detalles.codigo','=','inv_productos.codigo')->
                                                join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                                join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                                join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                                join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->
                                                select('co_ordenes_detalles.*',
                                                    
                                                        'inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo','inv_productos.origen',
                                                        'inv_productos.porcientodescuento','inv_productos.galeriaImagenes',

                                                        'categorias.descripcion as categoria',
                                                        'brands.descripcion as marca',
                                                        'invtipos_inventarios.descripcion as tipoinventario',
                                                        'bodegas.descripcion as almacen'
                                                )->
                                                get();        
            $value->productos = $compraDetalle;
        } 


        if ($compra == null){
            return $this->errorResponse('No existen datos');
        }
        else {
            return $this->successResponse($compra, $request->urlRequest);
        }
    }

    public function autollenado(Request $request){ 
        try {
            $respuesta = array();

            $condiciones = ve_CondicionesPago::orderBy('id', 'asc')->
                                where('estado','=','activo')->
                                get();

            $proveedores= proveedores::join('ciudades', 'ciudades.id_ciudad','=','proveedores.id_ciudad')->
                                join('paises', 'paises.id_pais','=','proveedores.id_pais')->
                                select('proveedores.*','ciudades.descripcion as ciudad','paises.descripcion as pais') ->
                                where('proveedores.estado','=','activo')->
                                get();

            $puertos = co_puerto::orderBy('created_at', 'desc')->
                                get();

            $direcciones = co_DireccionesEnvio::join('ciudades', 'ciudades.id_ciudad','=','co_direcciones_envios.id_ciudad')->
                                join('paises', 'paises.id_pais','=','co_direcciones_envios.id_pais')->
                                select('co_direcciones_envios.*','ciudades.descripcion as ciudad','paises.descripcion as pais') ->
                                where('co_direcciones_envios.estado','=','activo')->
                                get();

            $_condiciones = array("label" => 'condiciones', "data" => $condiciones, "icono" => 'fas fa-dolly-flatbed');
            $_proveedores = array("label" => 'proveedores', "data" => $proveedores, "icono" => 'fas fa-dolly-flatbed');
            $_puertos     = array("label" => 'puertos', "data" => $puertos, "icono" => 'fas fa-dolly-flatbed');
            $_direcciones     = array("label" => 'direcciones', "data" => $direcciones, "icono" => 'fas fa-dolly-flatbed');

            array_push($respuesta,$_condiciones);
            array_push($respuesta,$_proveedores);
            array_push($respuesta,$_puertos);
            array_push($respuesta,$_direcciones);

            return $this->successResponse($respuesta, $request->urlRequest);      
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
    }
    
    public function store(Request $request)
    {
        $productos =  intval($request->productosLength);
        $archivos = intval($request->archivosLength);

        $maxid=0;
        $idsecuencia=0;
        $maxid= coOrdenesMaster::get('num_oc')->max();

        if ($maxid==null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia=$maxid->num_oc;
            $idsecuencia=$idsecuencia+1;
        }

        $datosm =array('fecha_enviada'        => $request->input('fecha_enviada'),
                       'num_oc'               => $idsecuencia,
                       'numero_proforma'      => $request->input('numero_proforma'),
                       'archivo'              => $request->input('archivo'),
                       'cond_pago'            => $request->input('cond_pago'),
                       'via_envio'            => $request->input('via_envio'),
                       'cod_sp'               => $request->input('cod_sp'),
                       'cod_sp_sec'           => $request->input('cod_sp_sec'),
                       'id_moneda'            => $request->input('id_moneda'),
                       'id_puerto'            => $request->input('id_puerto'),
                       'total_bruto'          => $request->input('total_bruto'),
                       'total_desc'           => $request->input('total_desc'),
                       'total_itbis'          => $request->input('total_itbis'),
                       'total_neto'           => $request->input('total_neto'),
                       'observaciones'        => $request->input('observaciones'),
                       'nombre'               => $request->input('nombre'),
                       'id_pais'              => $request->input('id_pais'),
                       'id_ciudad'            => $request->input('id_ciudad'),
                       'direccion_a'          => $request->input('direccion_a'),
                       'direccion_b'          => $request->input('direccion_b'),
                       'telefono'             => $request->input('telefono'),                       
                       'orden_cerrada'        => 'no',
                       'pagada'               => 'no',
                       "estado"               => 'activo',
                       'usuario_creador'      => $request->input('usuario_creador')                      
                       //'ship_to'              => $request->input('ship_to'),
                       //'n_b_a'                => $request->input('n_b_a'),
                       //'c_i_d'                => $request->input('c_i_d'),
        );
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            'required_if' => 'El campo :attribute no puede estar en blanco'
        ];
        // return response()->json($datosm); 
        $validator = validator($datosm, [
           // 'cond_pago'        => 'exists:invtiposmovimientos,id_tipomov',
            'cod_sp'         => 'required|numeric',
            'cod_sp_sec'     => 'required|numeric',
            'cond_pago'      => 'required',
            'fecha_enviada'  => 'required',
            'orden_cerrada'  => 'required',
            'id_moneda'      => 'required',
            'fecha_enviada'  => 'required',
            'total_bruto'    => 'required',            
            'total_desc'     => 'required',
            'total_itbis'    => 'required',
            'total_neto'     => 'required',
            'direccion_a'    => 'required',
            'direccion_b'    => 'required',
            'estado'         => 'required',
        ],$messages);       

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            
            try{
                DB::beginTransaction(); 
                //return response()->json($archivos); 
                    if ($archivos !== 0) {
                        $misArchivos = [];
                        
                        for ($i=0; $i < $archivos; $i++) {
                            $arch[$i] = $request->file('archivos'.$i);
        
                            $nombreArchivo = uniqid().'.'.$arch[$i]->getClientOriginalExtension();
        
                            $tempFile = $arch[$i]->storeAs('uploads', 'oredenes-compras/'.$nombreArchivo, 'public');
                            array_push($misArchivos, $tempFile);
                        }
                        $datosm['archivo'] = json_encode($misArchivos);
                    }  

                    coOrdenesMaster::create($datosm);
                    
                    if ($request->productos !== 0) {
                        $datosd = null;
                        
                        for ($i=0; $i < $productos; $i++) {
                            $datosd = array('num_oc'      => $idsecuencia,
                                            'num_req'     => $request->input('num_req'.$i),
                                            'codigo'      => $request->input('codigo'.$i),
                                            'cantidad'    => $request->input('cantidad1'.$i),
                                            'precio'      => $request->input('precio'.$i),
                                            'porc_desc'   => $request->input('porc_desc'.$i),  
                                            'monto_desc'  => $request->input('porc_desc'.$i),
                                            'itbis'       => $request->input('itbis'.$i),
                                            'valor_bruto' => $request->input('valor_bruto'.$i),
                                            'valor_neto'  => $request->input('valor_neto'.$i),
                                            "estado"      =>'activo',
                            );
                            
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];
            
                            $validator = validator($datosd, [
                                'num_oc'          => 'required',
                                'precio'           => 'required',
                                'codigo'           => 'required',
                                'cantidad'         => 'required'
                            ],$messages);
                         
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest); 
                            }                                        
                            coOrdenesDetalle::create($datosd);                                                   
                        }                        
                    }else{
                        return $this->errorResponse('No hay productos agragados a la transacción');
                    }               
                    DB::commit();
                    return $this->successResponse($datosm, $request->urlRequest);
                } 
                catch (\Exception $e ){
                    return $this->errorResponse($e->getMessage(), $request->urlRequest);
                }
            }
    }
    
    
    public function show(Request $request,$coOrdenesMaster)
    {
        $datos = coOrdenesMaster::where([['co_ordenes_masters.id','=',$coOrdenesMaster],
                                         ['orden_cerrada','=','no']])->
                                join('co_ordenes_detalles','co_ordenes_masters.num_oc','=','co_ordenes_detalles.num_oc')->
                                join('inv_productos','co_ordenes_detalles.codigo','=','inv_productos.codigo')->
                                join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->

                                select('co_ordenes_masters.*',

                                    'co_ordenes_detalles.cantidad','co_ordenes_detalles.precio as precio_venta','co_ordenes_detalles.porc_desc',
                                    'co_ordenes_detalles.valor_bruto','co_ordenes_detalles.valor_neto','co_ordenes_detalles.valor_neto',

                                    'inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo','inv_productos.imagenPrincipal',
                                    'inv_productos.galeriaImagenes','categorias.descripcion as c','brands.descripcion as marca',
                                    'invtipos_inventarios.descripcion as tipoinventario',
                                    'bodegas.descripcion as almacen')->
                                get();
        
        if($datos == null){
            return $this->errorResponse('no existen ordenes o todas estan cerradas');
        }
        else{
            return $this->successResponse($datos, $request->urlRequest);
        }
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy(Request $request, $id)
    {
        try{
            DB::beginTransaction(); 
                $ordenCompra = coOrdenesMaster::find($id);
                if ($ordenCompra == null){
                    return $this->errorResponse(null,"Registro no Existe");
                }
                $ordenCompra->update(['estado' => 'eliminado']);
                coOrdenesDetalle::where('num_oc','=',$ordenCompra->num_oc)->update(['estado' => 'eliminado']);
                
            DB::commit();
            return $this->successResponse(1, $request->urlRequest);
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
    }

    public function buscaOrdenCompra($orden){
        $data = array();  
        $valor = 0;

        $compra = coOrdenesMaster::where([['co_ordenes_masters.estado','=','activo'], 
                                          ['co_ordenes_masters.orden_cerrada','=','no'], 
                                          ['co_ordenes_masters.num_oc','=',$orden]])-> 
                                   join('proveedores',[['co_ordenes_masters.cod_sp','=','proveedores.cod_sp'],
                                          ['co_ordenes_masters.cod_sp_sec','=','proveedores.cod_sp_sec']])->
                                   select('co_ordenes_masters.*','proveedores.nom_sp','proveedores.documento','proveedores.email')->
                                   get();

        $proveedor = proveedores::join('ciudades', 'ciudades.id_ciudad','=','proveedores.id_ciudad')->
                                  join('paises', 'paises.id_pais','=','proveedores.id_pais')->
                                  select('proveedores.*','ciudades.descripcion as ciudad','paises.descripcion as pais') ->
                                  where([['proveedores.estado','=','activo'],
                                         ['proveedores.cod_sp','=',$compra[0]['cod_sp']],
                                         ['proveedores.cod_sp_sec','=',$compra[0]['cod_sp_sec']]
                                        ])->
                                  first();
        
        $coCuentasProveedor = coCuentasProveedor::join('cgcatalogo','cgcatalogo.cuenta_no','=','co_cuentas_proveedores.cuenta_no')->
                                                  select('co_cuentas_proveedores.*',
                                                         'cgcatalogo.depto','cgcatalogo.catalogo','cgcatalogo.referencia',
                                                         'cgcatalogo.tipo_cuenta','cgcatalogo.retencion')->      
                                                  where([['co_cuentas_proveedores.cod_sp','=',$proveedor->cod_sp],
                                                         ['co_cuentas_proveedores.cod_sp_sec','=',$proveedor->cod_sp_sec],
                                                         ['co_cuentas_proveedores.estado','=','activo']])->                                                
                                                get();
        $proveedor->cuentas_proveedor = $coCuentasProveedor;
    
        $transacciones = invtransaccionesmodel::where([['invtransaccionesmaster.estado','=','ACTIVO'],
                                                       ['invtransaccionesmaster.num_doc','=',$compra[0]['num_oc']]])->
                                                first();
        
        if ($transacciones != null){       
            $transaccionesDetalle = Invtransaccdetallemodel::where([['invtransaccionesdetalle.estado','=','ACTIVO'],
                                                                    ['invtransaccionesdetalle.num_doc','=',$transacciones->num_doc],
                                                                    ['invtransaccionesdetalle.id_tipomov','=',$transacciones->id_tipomov],
                                                                    ['invtransaccionesdetalle.id_bodega','=',$transacciones->id_bodega]])->  
                                                             get();

            for ($i=0; $i < count($transaccionesDetalle); $i++) { 
                $valor += intval($transaccionesDetalle[$i]['precio_venta']);
            }
            
        }        
        
        $compraDetalle = coOrdenesDetalle::where([['co_ordenes_detalles.estado','=','activo'], 
                                                  ['co_ordenes_detalles.num_oc','=',$orden]])-> 
                                           join('inv_productos','co_ordenes_detalles.codigo','=','inv_productos.codigo')->
                                           join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                           join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                           join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                           join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->
                                           select('co_ordenes_detalles.*',
                                                
                                                'inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo','inv_productos.origen',
                                                'inv_productos.porcientodescuento','inv_productos.galeriaImagenes','inv_productos.costo',

                                                'categorias.descripcion as categoria',
                                                'brands.descripcion as marca',
                                                'invtipos_inventarios.descripcion as tipoinventario',
                                                'bodegas.descripcion as almacen')->
                                           get();       
       
        if ($compra == null){
            return $this->errorResponse('Esta orden de compra no existe');
        }
        else {
            foreach ($compra as $key => $value) {
                $value->productos = $compraDetalle;
                $value->proveedor = $proveedor;
                $value->valor_recibido = $valor;
                array_push($data, $value);
            }
            return $this->successResponse($data, $request->urlRequest);
        }
    }

    public function busqueda(Request $request, $id){
        
      
        $datos = coOrdenesMaster::where([['orden_cerrada','=','no'],['co_ordenes_masters.num_oc', '=', "$id" ]])->
                                join('co_ordenes_detalles','co_ordenes_masters.num_oc','=','co_ordenes_detalles.num_oc')->
                                join('inv_productos','co_ordenes_detalles.codigo','=','inv_productos.codigo')->
                                join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->

                                select('co_ordenes_masters.*',

                                'co_ordenes_detalles.cantidad','co_ordenes_detalles.precio as precio_venta','co_ordenes_detalles.porc_desc',
                                'co_ordenes_detalles.total_desc','co_ordenes_detalles.valor_bruto','co_ordenes_detalles.itbis',
                                'co_ordenes_detalles.valor_neto','co_ordenes_detalles.num_req',

                                'inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo','inv_productos.imagenPrincipal',
                                'inv_productos.galeriaImagenes','categorias.descripcion as c','brands.descripcion as marca',
                                'invtipos_inventarios.descripcion as tipoinventario',
                                'bodegas.descripcion as almacen')->
                                get();

        if($datos == null){
            return $this->errorResponse('no existen ordenes o todas estan cerradas');
        }
        else{
            return $this->successResponse($datos, $request->urlRequest);
        }
    }

    function actualizar(request $request ,$id){

        $productos =  $request->productosLength;
      
           $orden = coOrdenesMaster::find($id);          

           $datosm =array('fecha' => today(),
                        'numero_proforma'      => $request->input('numero_proforma'),
                        'cond_pago'            => $request->input('cond_pago'),
                        'via_envio'            => $request->input('via_envio'),
                        'cod_sp'               => $request->input('cod_sp'),
                        'cod_sp_sec'           => $request->input('cod_sp_sec'),                        
                        'fecha_enviada'        => $request->input('fecha_enviada'),
                        'pagada'               => $request->input('pagada'),
                        'fecha_pagada'         => $request->input('fecha_pagada'),
                        'orden_cerrada'        => 'no',
                        'id_moneda'            => $request->input('id_moneda'),
                        'id_puerto'            => $request->input('id_puerto'),
                        'total_bruto'          => $request->input('total_bruto'),
                        'total_desc'           => $request->input('total_desc'),
                        'total_itbis'          => $request->input('total_itbis'),
                        'total_neto'           => $request->input('total_neto'),
                        'observaciones'        => $request->input('observaciones'),
                        'ship_to'              => $request->input('ship_to'),
                        'n_b_a'                => $request->input('n_b_a'),
                        'c_i_d'                => $request->input('c_i_d'),
                        'notas'                => $request->input('notas'),
                        "estado"               =>'ACTIVO',
                        'usuario_modificador'  => $request->input('usuario_modificador')                      
           );
         
            $messages = [
                'required' => 'El campo :attribute es requerido.',
                'unique'   => 'El campo :attribute debe ser unico',
                'numeric'  => 'El campo :attribute debe ser numerico',
                'required_if' => 'El campo :attribute no puede estar en blanco'
            ];
              
   
            $validator = validator($datosm, [
            // 'cond_pago'        => 'exists:invtiposmovimientos,id_tipomov',
            'cod_sp'   => 'required|numeric',
            'cod_sp_sec'       => 'required|numeric',
            'cond_pago'        => 'required',
            'via_envio'        => 'required',
            'enviada'          => 'required',
            'fecha_enviada'    => 'required',
            'pagada'           => 'required',
            'orden_cerrada'    => 'required',
            'id_moneda'        => 'required',
            'id_puerto'        => 'required',
            'total_bruto'      => 'required'
            ],$messages);       
   
            if ($validator->fails()) {                
                $errors = $validator->errors();            
                return $this->errorResponseParams($errors->all(), $request->urlRequest);
            }
            else{
                try{
      
                    DB::beginTransaction();    
                    
                    $orden->update($request->all());    
    
                    if ($request->productos !== 0) {
                    
                        $datosd = null;
                        
                        for ($i=0; $i < $productos; $i++) {

                            $datosd = array(
                                            //'num_req'          => $request->input('num_req'),
                                            'num_req'          =>1,
                                            'codigo'           => $request->input('codigo'.$i),
                                            'cantidad'         => $request->input('cantidad'.$i),
                                            'porc_desc'        => $request->input('porc_desc'.$i),  
                                            'precio'           => $request->input('precio'.$i),
                                            'total_desc'       => $request->input('total_desc'.$i),
                                            'itbis'       => $request->input('itbis'.$i),
                                            'valor_bruto'      => $request->input('valor_bruto'.$i),
                                            'valor_neto'       => $request->input('valor_neto'.$i)
                                            );
                                        //   return response()->json($datosd);
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];
            
                            $validator = validator($datosd, [
                                'precio'           => 'required',
                                'codigo'           => 'required',
                                'cantidad'         => 'required'
                            ],$messages);
                        
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest);                             
                            }
                           //return response()->json($datosd['valor_neto']);
                           coOrdenesDetalle::where('co_ordenes_detalles.num_oc','=',$orden['num_oc'])->
                                             update([
                                                'num_req'=>$datosd['num_req'],
                                                'codigo'=>$datosd['codigo'],
                                                'cantidad'=>$datosd['cantidad'],
                                                'porc_desc'=>$datosd['porc_desc'],
                                                'precio'=>$datosd['precio'],
                                                'total_desc'=>$datosd['total_desc'],
                                                'itbis'=>$datosd['itbis'],
                                                'valor_bruto'=>$datosd['valor_bruto'],
                                                'valor_neto'=>$datosd['valor_neto']
                                             ]);
                        
                        } 
                        
                    }else{
                        return $this->errorResponse('No hay productos agragados a la transacción');
                    }
   
                    DB::commit();
   
                return $this->successResponse('1', $request->urlRequest);
                } 
                catch (\Exception $e ){
                    return $this->errorResponse($e->getMessage(), $request->urlRequest);
                }
        }
    }

    public function verReporte($num_oc){
        $data = array(); 

        $compra = coOrdenesMaster::where([['co_ordenes_masters.estado','=','ACTIVO'],
                                          ['co_ordenes_masters.num_oc','=',$num_oc]])-> 
                                join('proveedores',function($join){
                                    $join->on('proveedores.cod_sp','=','co_ordenes_masters.cod_sp')->
                                    where('co_ordenes_masters.cod_sp_sec','=','proveedores.cod_sp_sec' )->
                                    orwhere([['co_ordenes_masters.estado','=',"activo"], ['co_ordenes_masters.orden_cerrada','=','no']]);
                                })->
                                join('ve_cond_pagos','ve_cond_pagos.cond_pago','=','co_ordenes_masters.cond_pago')->
                                join('tipo_monedas','tipo_monedas.id','=','co_ordenes_masters.id_moneda')->
                                select('co_ordenes_masters.*',
                                       'proveedores.nom_sp as nombre_proveedor','proveedores.tel_sp as telefono_provedor',
                                       'proveedores.dir_sp as direccion_proveedor','proveedores.email as email_proveedor',
                                       'tipo_monedas.simbolo','tipo_monedas.divisa',
                                       've_cond_pagos.descripcion as descripcion_pago')->                                
                                get();

                                
        $compraDetalle = coOrdenesDetalle::where([['co_ordenes_detalles.estado','=','activo'], 
                                        ['co_ordenes_detalles.num_oc','=', $compra[0]->num_oc]])-> 
                                join('inv_productos','co_ordenes_detalles.codigo','=','inv_productos.codigo')->
                                join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->
                                select('co_ordenes_detalles.*',
                                    
                                        'inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo','inv_productos.codigo_referencia',
                                        'inv_productos.origen','inv_productos.existenciaMinima','inv_productos.existenciaMaxima','inv_productos.ultimaFechaCompra',
                                        'inv_productos.precio_compra','inv_productos.precio_venta','inv_productos.costo','inv_productos.fechaInicioDescuento',
                                        'inv_productos.fechaFinDescuento','inv_productos.porcientodescuento','inv_productos.ventas','inv_productos.devoluciones',
                                        'inv_productos.galeriaImagenes',                                        
                                        'categorias.descripcion as categoria',
                                        'brands.descripcion as marca',
                                        'invtipos_inventarios.descripcion as tipoinventario',
                                        'bodegas.descripcion as almacen'
                                )->
                                get();        

        if ($compra == null){
            return $this->errorResponse('No existen datos');
        }
        else {
            $empresa = Empresa::orderBy('created_at', 'desc')->first();
            foreach ($compra as $key => $value) {
                $value->productos = $compraDetalle;
                array_push($data, $value);
            }
            $datos = $data[0];
            $datos->empresa = $empresa;
            //return response()->json($datos);            
            // return view('orden_compra', ['datos' => $datos]);
            $pdf = PDF::loadView('orden_compra', compact('datos'));
            return $pdf->stream('orden_compra.pdf');
        }                       
    }

    public function verReporteH(){
        $productos = coOrdenesMaster::all();
    	$pdf = PDF::loadView('orden_compra', compact('datos'));
        $pdf->setPaper("A4","landscape");
    	return $pdf->stream('Orden-compra.pdf');
    }

}
