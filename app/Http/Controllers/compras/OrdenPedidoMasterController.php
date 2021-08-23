<?php

namespace App\Http\Controllers\compras;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Librerias\ventas\ordenPedidoMaster;
use App\Librerias\ventas\ordenPedidoDetalle;
use App\Http\Controllers\ApiResponseController;

class OrdenPedidoMasterController extends ApiResponseController
{
    
    public function index(Request $request)
    {
        $pedido = ordenPedidoMaster::orderBy('num_oc', 'asc')->
                                    join('mov_rrhh.noempleados','mov_rrhh.noempleados.id','=','orden_pedido_masters.sec_vend')->
                                    join('mov_ventas.veclientes',[['mov_ventas.veclientes.tipo_cliente','=','orden_pedido_masters.tipo_cliente'],['mov_ventas.veclientes.sec_cliente','=','orden_pedido_masters.sec_cliente']])->
                                    join('mov_globales.ciudades','mov_globales.ciudades.id_ciudad','=','orden_pedido_masters.id_ciudad')->
                                    join('mov_globales.paises','mov_globales.paises.id_pais','=','orden_pedido_masters.id_pais')->
                                    select('orden_pedido_masters.*','mov_ventas.veclientes.nombre','mov_globales.ciudades.descripcion as ciudad_cliente','mov_globales.paises.descripcion as pais_cliente',
                                        DB::raw("CONCAT(mov_rrhh.noempleados.primernombre,' ',mov_rrhh.noempleados.primerapellido) AS nombre_empleado"))->
                                    where('orden_pedido_masters.estado','=','ACTIVO')->
                                    get();

        foreach ($pedido as $key => $value) {      
            $pedidoDetalle = ordenPedidoDetalle::where([['orden_pedido_detalles.num_oc','=',$value->num_oc],['orden_pedido_detalles.estado','=','activo']])->
                                                join('mov_inventario.inv_productos', 'orden_pedido_detalles.codigo','=','mov_inventario.inv_productos.codigo')->
                                                join('mov_inventario.categorias','mov_inventario.categorias.id_categoria','=','mov_inventario.inv_productos.id_categoria')->
                                                join('mov_inventario.brands','mov_inventario.brands.id_brand','=','mov_inventario.inv_productos.id_brand')->
                                                join('mov_inventario.invtipos_inventarios','mov_inventario.invtipos_inventarios.id_tipoinventario','=','mov_inventario.inv_productos.id_tipoinventario')->
                                                join('mov_inventario.bodegas','mov_inventario.bodegas.id_bodega','=','mov_inventario.inv_productos.id_bodega')->
                                                select('orden_pedido_detalles.*',
                                                        'mov_inventario.inv_productos.titulo','mov_inventario.inv_productos.descripcion','mov_inventario.inv_productos.codigo','mov_inventario.inv_productos.codigo_referencia',
                                                        'mov_inventario.inv_productos.origen','mov_inventario.inv_productos.existenciaMinima','mov_inventario.inv_productos.existenciaMaxima','mov_inventario.inv_productos.ultimaFechaCompra',
                                                        'mov_inventario.inv_productos.precio_compra','mov_inventario.inv_productos.precio_venta','mov_inventario.inv_productos.costo','mov_inventario.inv_productos.fechaInicioDescuento',
                                                        'mov_inventario.inv_productos.fechaFinDescuento','mov_inventario.inv_productos.porcientodescuento','mov_inventario.inv_productos.ventas','mov_inventario.inv_productos.devoluciones',
                                                        'mov_inventario.inv_productos.galeriaImagenes',
                                                        'mov_inventario.categorias.descripcion as categoria',
                                                        'mov_inventario.brands.descripcion as marca',
                                                        'mov_inventario.invtipos_inventarios.descripcion as tipoinventario',
                                                        'mov_inventario.bodegas.descripcion as almacen')->
                                                get(); 
            $value->productos = $pedidoDetalle;
        } 
        return $this->successResponse($pedido, $request->urlRequest);
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
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
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
                                return $this->errorResponseParams($errors->all(), $request->urlRequest);                               
                            }
                            ordenPedidoDetalle::create($datosd);                                                   
                            //return response()->json($datosd);
                        }                        
                    }else{
                        return $this->errorResponse('No hay productos agragados a la transaccion');
                    }
                    DB::commit();
                    return $this->successResponse($datosm, $request->urlRequest);
                } 
                catch (\Exception $e ){
                    return $this->errorResponse($e->getMessage(), $request->urlRequest);
                }
            }
    }
    
    public function show(Request $request,$id)
    {
        $pedido = ordenPedidoMaster::orderBy('num_oc', 'asc')->
                            join('mov_rrhh.noempleados','mov_rrhh.noempleados.id','=','orden_pedido_masters.sec_vend')->
                            join('mov_ventas.veclientes',[['mov_ventas.veclientes.tipo_cliente','=','orden_pedido_masters.tipo_cliente'],['mov_ventas.veclientes.sec_cliente','=','orden_pedido_masters.sec_cliente']])->
                            join('mov_globales.ciudades','mov_globales.ciudades.id_ciudad','=','orden_pedido_masters.id_ciudad')->
                            join('mov_globales.paises','mov_globales.paises.id_pais','=','orden_pedido_masters.id_pais')->
                            select('orden_pedido_masters.*','mov_ventas.veclientes.nombre','mov_globales.ciudades.descripcion as ciudad_cliente','mov_globales.paises.descripcion as pais_cliente',
                                DB::raw("CONCAT(mov_rrhh.noempleados.primernombre,' ',mov_rrhh.noempleados.primerapellido) AS nombre_empleado"))->
                            where([['orden_pedido_masters.id','=',$id],['orden_pedido_masters.estado','=','ACTIVO']])->
                            get();

        foreach ($pedido as $key => $value) {      
            $pedidoDetalle = ordenPedidoDetalle::where([['orden_pedido_detalles.num_oc','=',$value->num_oc],['orden_pedido_detalles.estado','=','activo']])->
                                join('mov_inventario.inv_productos', 'orden_pedido_detalles.codigo','=','mov_inventario.inv_productos.codigo')->
                                join('mov_inventario.categorias','mov_inventario.categorias.id_categoria','=','mov_inventario.inv_productos.id_categoria')->
                                join('mov_inventario.brands','mov_inventario.brands.id_brand','=','mov_inventario.inv_productos.id_brand')->
                                join('mov_inventario.invtipos_inventarios','mov_inventario.invtipos_inventarios.id_tipoinventario','=','mov_inventario.inv_productos.id_tipoinventario')->
                                join('mov_inventario.bodegas','mov_inventario.bodegas.id_bodega','=','mov_inventario.inv_productos.id_bodega')->
                                select('orden_pedido_detalles.*',
                                        'mov_inventario.inv_productos.titulo','mov_inventario.inv_productos.descripcion','mov_inventario.inv_productos.codigo','mov_inventario.inv_productos.codigo_referencia',
                                        'mov_inventario.inv_productos.origen','mov_inventario.inv_productos.existenciaMinima','mov_inventario.inv_productos.existenciaMaxima','mov_inventario.inv_productos.ultimaFechaCompra',
                                        'mov_inventario.inv_productos.precio_compra','mov_inventario.inv_productos.precio_venta','mov_inventario.inv_productos.costo','mov_inventario.inv_productos.fechaInicioDescuento',
                                        'mov_inventario.inv_productos.fechaFinDescuento','mov_inventario.inv_productos.porcientodescuento','mov_inventario.inv_productos.ventas','mov_inventario.inv_productos.devoluciones',
                                        'mov_inventario.inv_productos.galeriaImagenes',
                                        'mov_inventario.categorias.descripcion as categoria',
                                        'mov_inventario.brands.descripcion as marca',
                                        'mov_inventario.invtipos_inventarios.descripcion as tipoinventario',
                                        'mov_inventario.bodegas.descripcion as almacen')->
                                get(); 
            $value->productos = $pedidoDetalle;
        } 
        return $this->successResponse($pedido, $request->urlRequest);
    }
    
    public function update(Request $request, ordenPedidoMaster $ordenPedidoMaster)
    {
        //
    }
    
    public function destroy(Request $request, $id)
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
            return $this->successResponse($ordenPedido, $request->urlRequest);
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
    }

    public function buscaOrden(Request $request,$orden)
    {
        $data = array();  
        
        $pedido = ordenPedidoMaster::where([['orden_pedido_masters.num_oc','=',$orden],['orden_pedido_masters.estado','=','activo']])->
                                     join('mov_ventas.veclientes',[['mov_ventas.veclientes.tipo_cliente','=','orden_pedido_masters.tipo_cliente'],
                                                        ['mov_ventas.veclientes.sec_cliente','=','orden_pedido_masters.sec_cliente']])->
                                     select('orden_pedido_masters.*','mov_ventas.veclientes.email','mov_ventas.veclientes.num_rnc')->
                                     get();
        
        $pedidoDetalle = ordenPedidoDetalle::where([['orden_pedido_detalles.num_oc','=',$orden],['orden_pedido_detalles.estado','=','activo']])->
                                             join('mov_inventario.inv_productos', 'orden_pedido_detalles.codigo','=','mov_inventario.inv_productos.codigo')->
                                             join('mov_inventario.categorias','mov_inventario.categorias.id_categoria','=','mov_inventario.inv_productos.id_categoria')->
                                             join('mov_inventario.brands','mov_inventario.brands.id_brand','=','mov_inventario.inv_productos.id_brand')->
                                             join('mov_inventario.invtipos_inventarios','mov_inventario.invtipos_inventarios.id_tipoinventario','=','mov_inventario.inv_productos.id_tipoinventario')->
                                             join('mov_inventario.bodegas','mov_inventario.bodegas.id_bodega','=','mov_inventario.inv_productos.id_bodega')->
                                             select('orden_pedido_detalles.*',
                                                    'mov_inventario.inv_productos.titulo','mov_inventario.inv_productos.descripcion','mov_inventario.inv_productos.codigo','mov_inventario.inv_productos.codigo_referencia',
                                                    'mov_inventario.inv_productos.origen','mov_inventario.inv_productos.existenciaMinima','mov_inventario.inv_productos.existenciaMaxima','mov_inventario.inv_productos.ultimaFechaCompra',
                                                    'mov_inventario.inv_productos.precio_compra','mov_inventario.inv_productos.precio_venta','mov_inventario.inv_productos.costo','mov_inventario.inv_productos.fechaInicioDescuento',
                                                    'mov_inventario.inv_productos.fechaFinDescuento','mov_inventario.inv_productos.porcientodescuento','mov_inventario.inv_productos.ventas','mov_inventario.inv_productos.devoluciones',
                                                    'mov_inventario.inv_productos.galeriaImagenes',
                                                    'mov_inventario.categorias.descripcion as categoria',
                                                    'mov_inventario.brands.descripcion as marca',
                                                    'mov_inventario.invtipos_inventarios.descripcion as tipoinventario',
                                                    'mov_inventario.bodegas.descripcion as almacen')->
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
            return $this->successResponse($data, $request->urlRequest);
        }
    }
}
