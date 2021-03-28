<?php

namespace App\Http\Controllers;

use App\Librerias\ordenPedidoDetalle;
use App\Librerias\ordenPedidoMaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrdenPedidoMasterController extends ApiResponseController
{
    
    public function index()
    {
        $pedido = ordenPedidoMaster::orderBy('num_oc', 'asc')->
                                    join('noempleados','noempleados.id_numemp','=','orden_pedido_masters.sec_vend')->
                                    join('veclientes',[['veclientes.tipo_cliente','=','orden_pedido_masters.tipo_cliente'],['veclientes.sec_cliente','=','orden_pedido_masters.sec_cliente']])->
                                    join('ciudades','ciudades.id_ciudad','=','orden_pedido_masters.id_ciudad')->
                                    join('paises','paises.id_pais','=','orden_pedido_masters.id_pais')->
                                    select('orden_pedido_masters.*','veclientes.nombre','ciudades.descripcion as ciudad_cliente','paises.descripcion as pais_cliente',
                                        DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"))->
                                    where('orden_pedido_masters.estado','=','ACTIVO')->
                                    get();

        foreach ($pedido as $key => $value) {      
            $pedidoDetalle = ordenPedidoDetalle::where([['orden_pedido_detalles.num_oc','=',$value->num_oc],['orden_pedido_detalles.estado','=','activo']])->
                                                join('inv_productos', 'orden_pedido_detalles.codigo','=','inv_productos.codigo')->
                                                join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                                join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                                join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                                join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->
                                                select('orden_pedido_detalles.*',
                                                        'inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo','inv_productos.codigo_referencia',
                                                        'inv_productos.origen','inv_productos.existenciaMinima','inv_productos.existenciaMaxima','inv_productos.ultimaFechaCompra',
                                                        'inv_productos.precio_compra','inv_productos.precio_venta','inv_productos.costo','inv_productos.fechaInicioDescuento',
                                                        'inv_productos.fechaFinDescuento','inv_productos.porcientodescuento','inv_productos.ventas','inv_productos.devoluciones',
                                                        'inv_productos.galeriaImagenes',
                                                        'categorias.descripcion as categoria',
                                                        'brands.descripcion as marca',
                                                        'invtipos_inventarios.descripcion as tipoinventario',
                                                        'bodegas.descripcion as almacen')->
                                                get(); 
            $value->productos = $pedidoDetalle;
        } 
        return $this->successResponse($pedido);
    }
    
    public function store(Request $request)
    {
        $productos =  intval($request->productosLength);
        $archivos = intval($request->archivosLength);
        
        $maxid=0;
        $idsecuencia=0;
        $maxid= ordenPedidoMaster::get('num_oc')->max();

        if ($maxid==null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia=$maxid->num_oc;
            $idsecuencia=$idsecuencia+1;
        }

        $datosm = $request->all();
        $datosm['num_oc'] =  $idsecuencia;
        $datosm['sec_vend'] = 1;
        
        $messages = [
                'required' => 'El campo :attribute es requerido.',
                'unique'   => 'El campo :attribute debe ser unico',
                'numeric'  => 'El campo :attribute debe ser numerico',
                'required_if' => 'El campo :attribute no puede estar en blanco'
        ];
       
        $validator = validator($datosm, [
            'num_oc'            => 'required',
            //'ventas'            => 'required',
            'cotizacion_no'     => 'required',
            'fecha_orden'       => 'required',
            'sec_vend'          => 'required',
            'nombre_cliente'    => 'required',
            // 'pais_cliente'      => 'required',
            'urbanizacion_cliente'=> 'required',
            // 'ciudad_cliente'    => 'required',
            // 'direccion_cliente' => 'required',
            'tipo_cliente'      => 'required',
            'sec_cliente'       => 'required',
            'direccion'         => 'required',
            'telefono'          => 'required',
            // 'fax'               => 'required',
            'fecha_entrega'     => 'required',
            'cond_pago'         => 'required',
            'total_bruto'       => 'required',
            'sub_total'         => 'required',
            'monto_desc'        => 'required',
            'neto'              => 'required',
            'itbis'             => 'required',
            'ubicacion'         => 'required',
            //'cerrada'           => 'required',
            //'fecha_cierre'      => 'required',
            'id_pais'           => 'required',
            'id_ciudad'         => 'required',
            //'id_zonalocal'      => 'required',
            'observacion'       => 'required',
            'tipo_orden'        => 'required',
            //'id_ultima_bodega'  => 'required',
            //'estado_despacho'   => 'required',
            //'estado_devolucion' => 'required',
            //'orden_sustituta'   => 'required',
            'estado'            => 'required',
            'usuario_creador'   => 'required'
        ],$messages);       
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            
            try{
                DB::beginTransaction();               
                    if ($archivos !== 0) {                        
                        $misArchivos = [];
                        for ($i=0; $i < $archivos; $i++) {                            
                            $arch[$i] = $request->file('archivos'.$i);        
                            $nombreArchivo = uniqid().'.'.$arch[$i]->getClientOriginalExtension();
                            $tempFile = $arch[$i]->storeAs('uploads', 'ordenes-pedidos/'.$nombreArchivo, 'public');
                            array_push($misArchivos, $tempFile);
                        }
                        $datosm['archivo'] = json_encode($misArchivos);
                    }  

                    //return response()->json($datosm);
                    ordenPedidoMaster::create($datosm);
                    
                    if ($productos !== 0) {
                        $datosd = null;                    
                        for ($i=0; $i < $productos; $i++) {

                            $datosd = array('num_oc'            => $idsecuencia,
                                            'secuencia'         => ($i + 1),
                                            'area'              => $request->input('area'.$i),
                                            'codigo'            => $request->input('codigo'.$i),
                                            'precio'            => $request->input('precio'.$i),
                                            'cantidad'          => $request->input('cantidad1'.$i),
                                            'porc_desc'         => $request->input('porc_desc'.$i),
                                            'descuento'         => $request->input('descuento'.$i),
                                            'total_bruto'       => $request->input('total_bruto'.$i),
                                            'itbis'             => $request->input('itbis'.$i),
                                            'sub_total'         => $request->input('sub_total'.$i),
                                            'neto'              => $request->input('neto'.$i),
                                            'costo'             => $request->input('costo'.$i),
                                            'fecha_compromiso'  => $request->input('fecha_compromiso'.$i),
                                            'estado_produccion' => 'solicitada',
                                            'observacion'       => $request->input('observacion'.$i),
                                            'id_kit'            => $request->input('id_kit'.$i),
                                            //'departamento'      => $request->input('departamento'.$i)
                                            "estado"      =>'activo'
                            );
                            
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];
            
                            $validator = validator($datosd, [
                                'num_oc'           => 'required',
                                'secuencia'        => 'required',
                                'area'             => 'required',
                                'codigo'           => 'required',
                                'precio'           => 'required',
                                'cantidad'         => 'required',
                                'total_bruto'      => 'required',
                                'itbis'            => 'required',
                                'sub_total'        => 'required',
                                'neto'             => 'required',
                                'costo'            => 'required',
                                'fecha_compromiso' => 'required',
                            ],$messages);
                                                     
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all());                               
                            }
                            ordenPedidoDetalle::create($datosd);                                                   
                            //return response()->json($datosd);
                        }                        
                    }else{
                        return $this->errorResponse('No hay productos agragados a la transacción');
                    }
                    DB::commit();
                    return $this->successResponse($datosd);
                } 
                catch (\Exception $e ){
                    return $this->errorResponse($e);
                }
            }
    }
    
    public function show($id)
    {
        $pedido = ordenPedidoMaster::orderBy('num_oc', 'asc')->
                            join('noempleados','noempleados.id_numemp','=','orden_pedido_masters.sec_vend')->
                            join('veclientes',[['veclientes.tipo_cliente','=','orden_pedido_masters.tipo_cliente'],['veclientes.sec_cliente','=','orden_pedido_masters.sec_cliente']])->
                            join('ciudades','ciudades.id_ciudad','=','orden_pedido_masters.id_ciudad')->
                            join('paises','paises.id_pais','=','orden_pedido_masters.id_pais')->
                            select('orden_pedido_masters.*','veclientes.nombre','ciudades.descripcion as ciudad_cliente','paises.descripcion as pais_cliente',
                                DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"))->
                            where([['orden_pedido_masters.id','=',$id],['orden_pedido_masters.estado','=','ACTIVO']])->
                            get();

        foreach ($pedido as $key => $value) {      
            $pedidoDetalle = ordenPedidoDetalle::where([['orden_pedido_detalles.num_oc','=',$value->num_oc],['orden_pedido_detalles.estado','=','activo']])->
                                join('inv_productos', 'orden_pedido_detalles.codigo','=','inv_productos.codigo')->
                                join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->
                                select('orden_pedido_detalles.*',
                                        'inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo','inv_productos.codigo_referencia',
                                        'inv_productos.origen','inv_productos.existenciaMinima','inv_productos.existenciaMaxima','inv_productos.ultimaFechaCompra',
                                        'inv_productos.precio_compra','inv_productos.precio_venta','inv_productos.costo','inv_productos.fechaInicioDescuento',
                                        'inv_productos.fechaFinDescuento','inv_productos.porcientodescuento','inv_productos.ventas','inv_productos.devoluciones',
                                        'inv_productos.galeriaImagenes',
                                        'categorias.descripcion as categoria',
                                        'brands.descripcion as marca',
                                        'invtipos_inventarios.descripcion as tipoinventario',
                                        'bodegas.descripcion as almacen')->
                                get(); 
            $value->productos = $pedidoDetalle;
        } 
        return $this->successResponse($pedido);
    }
    
    public function update(Request $request, ordenPedidoMaster $ordenPedidoMaster)
    {
        //
    }
    
    public function destroy($id)
    {   
        try{
            DB::beginTransaction(); 
                $ordenPedido = ordenPedidoMaster::find($id);
                if ($ordenPedido == null){
                    return $this->errorResponse(null,"Registro no Existe");
                }
                $ordenPedido->update(['estado' => 'eliminado']);
                ordenPedidoDetalle::where('num_oc','=',$ordenPedido->num_oc) ->update(['estado' => 'eliminado']);

            DB::commit();
            return $this->successResponse($ordenPedido);
        } catch (\Exception $e ){
            return $this->errorResponse($e);
        }
    }

    public function buscaOrden($orden)
    {
        $data = array();  
        
        $pedido = ordenPedidoMaster::where([['orden_pedido_masters.num_oc','=',$orden],['orden_pedido_masters.estado','=','activo']])->
                                     join('veclientes',[['veclientes.tipo_cliente','=','orden_pedido_masters.tipo_cliente'],
                                                        ['veclientes.sec_cliente','=','orden_pedido_masters.sec_cliente']])->
                                     select('orden_pedido_masters.*','veclientes.email','veclientes.num_rnc')->
                                     get();
        
        $pedidoDetalle = ordenPedidoDetalle::where([['orden_pedido_detalles.num_oc','=',$orden],['orden_pedido_detalles.estado','=','activo']])->
                                             join('inv_productos', 'orden_pedido_detalles.codigo','=','inv_productos.codigo')->
                                             join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                             join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                             join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                             join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->
                                             select('orden_pedido_detalles.*',
                                                    'inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo','inv_productos.codigo_referencia',
                                                    'inv_productos.origen','inv_productos.existenciaMinima','inv_productos.existenciaMaxima','inv_productos.ultimaFechaCompra',
                                                    'inv_productos.precio_compra','inv_productos.precio_venta','inv_productos.costo','inv_productos.fechaInicioDescuento',
                                                    'inv_productos.fechaFinDescuento','inv_productos.porcientodescuento','inv_productos.ventas','inv_productos.devoluciones',
                                                    'inv_productos.galeriaImagenes',
                                                    'categorias.descripcion as categoria',
                                                    'brands.descripcion as marca',
                                                    'invtipos_inventarios.descripcion as tipoinventario',
                                                    'bodegas.descripcion as almacen')->
                                             get();                                  
                                             
        if ($pedido == null){
            return $this->errorResponse('Esta orden de pedido no existe');
        }
        else{
            foreach ($pedido as $key => $value) {
                $value->productos = $pedidoDetalle;
                array_push($data, $value);
            }
            // return response()->json($data);
            return $this->successResponse($data);
        }
    }
}
