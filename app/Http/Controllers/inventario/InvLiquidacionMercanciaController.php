<?php

namespace App\Http\Controllers\inventario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Librerias\compras\proveedores;
use App\Librerias\compras\coOrdenesMaster;
use App\Librerias\compras\coCuentasProveedor;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\inventario\invtransaccionesmodel;
use App\Librerias\inventario\Invtransaccdetallemodel;
use App\Librerias\inventario\inv_liquidacionMercancia;

class InvLiquidacionMercanciaController extends ApiResponseController
{
    public function index(Request $request)
    {
        $liquidacion = inv_liquidacionMercancia::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();
        return $this->successResponse($liquidacion);
    }

    public function autoLlenado(Request $request)
    {
        $respuesta = array();

        try {
    
            $proveedores = proveedores::join('mov_globales.ciudades', 'mov_globales.ciudades.id_ciudad','=','proveedores.id_ciudad')->
                                        join('mov_globales.paises', 'mov_globales.paises.id_pais','=','proveedores.id_pais')->
                                        select('proveedores.*','mov_globales.ciudades.descripcion as ciudad','mov_globales.paises.descripcion as pais') ->
                                        where('proveedores.estado','=','activo')->
                                        get();
    
            foreach ($proveedores as $key => $value) {
                $coCuentasProveedor = coCuentasProveedor::where([['co_cuentas_proveedores.cod_sp','=',$value->cod_sp],
                                                        ['co_cuentas_proveedores.cod_sp_sec','=',$value->cod_sp_sec],
                                                        ['co_cuentas_proveedores.estado','=','activo']])->get();
    
                $value->cuentas_proveedor = $coCuentasProveedor; 
            }
    
            $pendientes = $this->buscaPendientes();
        
            $_pendientes = array("label" => 'pendientes', "data" => $pendientes, "icono" => 'fas fa-dolly-flatbed');
            $_proveedores = array("label" => 'proveedores', "data" => $proveedores, "icono" => 'fas fa-dolly-flatbed');
    
            array_push($respuesta,$_pendientes);
            array_push($respuesta,$_proveedores);
    
            return $this->successResponse($respuesta, $request->urlRequest);
            
        } catch (\Exception $e ){
                  return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }

    }

    public function pendientes(Request $request)
    {
        $pendientes = $this->buscaPendientes();
        
        return $this->successResponse($pendientes, $request->urlRequest);
    }

    public function buscaPendientes()
    {
        $transacciones = invtransaccionesmodel::where([['invtransaccionesmaster.estado','=','ACTIVO'],['id_num_oc','!=',NULL]])-> 
                                                whereNotIn('invtransaccionesmaster.num_doc', DB::table('inv_liquidacion_mercancias')->
                                                                                                 where('inv_liquidacion_mercancias.estado', '=', 'ACTIVO')->
                                                                                                //  whereIn('inv_liquidacion_mercancias.tipo', [1, 2, 3])
                                                                                                 get()
                                                )->                                                
                                                join('invtiposmovimientos','invtransaccionesmaster.id_tipomov','=','invtiposmovimientos.id_tipomov')->
                                                leftjoin('mov_ventas.veclientes',[['invtransaccionesmaster.tipo_cliente','=','mov_ventas.veclientes.tipo_cliente'],
                                                                       ['invtransaccionesmaster.sec_cliente','=','mov_ventas.veclientes.sec_cliente']])->
                                                leftjoin('proveedores',[['invtransaccionesmaster.cod_sp','=','proveedores.cod_sp'],
                                                                        ['invtransaccionesmaster.cod_sp_sec','=','proveedores.cod_sp_sec']])->
                                                leftjoin('mov_rrhh.nodepartamentos','invtransaccionesmaster.departamento','=','mov_rrhh.nodepartamentos.id')->
                                                leftjoin('mov_rrhh.noempleados','invtransaccionesmaster.id','=','mov_rrhh.noempleados.id')->
                                                leftjoin('transportistas','invtransaccionesmaster.cod_transportista','=','transportistas.cod_transportista')->
                                                //leftjoin('bodegas_usuarios','bodegas.id_bodega','=','bodegas_usuarios.id_bodega')->
                                                leftjoin('bodegas','invtransaccionesmaster.id_bodega','=','bodegas.id_bodega')->
                                                select('invtransaccionesmaster.*',
                                                       'invtiposmovimientos.titulo as titulo_mov',
                                                       'mov_ventas.veclientes.nombre as veclientes_nombre','mov_ventas.veclientes.documento as veclientes_documento',
                                                       'mov_ventas.veclientes.direccion as veclientes_direccion','mov_ventas.veclientes.email as veclientes_email',
                                                       'mov_ventas.veclientes.telefono_oficina as veclientes_telefono_oficina','mov_ventas.veclientes.telefono_oficina as veclientes_telefono_oficina',
                                                       'mov_ventas.veclientes.telefono_casa as veclientes_telefono_casa',
                                                       'proveedores.nom_sp as proveedores_nom_sp','proveedores.tel_sp as proveedores_tel_sp',
                                                       'bodegas.descripcion as bodegas_descripcion',
                                                       'mov_rrhh.nodepartamentos.titulo as nodepartamento_titulo',
                                                       'mov_rrhh.noempleados.primernombre as nodepartamento_primernombre', 'mov_rrhh.noempleados.primerapellido as nodepartamento_primerapellido',
                                                       'transportistas.nombre as transportista_nombre' )->
                                                orderBy('created_at', 'desc')->
                                                get();

        foreach ($transacciones as $key => $value) {
               
            $transaccionesDetalle = Invtransaccdetallemodel::where([['invtransaccionesdetalle.estado','=','ACTIVO'],
                                                                    ['invtransaccionesdetalle.num_doc','=',$value->num_doc],
                                                                    ['invtransaccionesdetalle.id_tipomov','=',$value->id_tipomov],
                                                                    ['invtransaccionesdetalle.id_bodega','=',$value->id_bodega]])-> 
                                                             join('inv_productos','invtransaccionesdetalle.codigo','=','inv_productos.codigo')->
                                                             join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->                        
                                                             join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                                             join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                                             join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                            
                                                             select(
                                                                'inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo','inv_productos.origen',
                                                                'inv_productos.porcientodescuento','inv_productos.galeriaImagenes',                        
    
                                                                'invtransaccionesdetalle.*',
                                                                
                                                                'categorias.descripcion as categoria',
                                                                'brands.descripcion as marca',
                                                                'invtipos_inventarios.descripcion as tipoinventario',
                                                                'bodegas.descripcion as almacen')->                                                                 
                                                             orderBy('created_at', 'desc')->  
                                                             get();
                                                            
            $datos = coOrdenesMaster::where([['co_ordenes_masters.num_oc','=',$value->id_num_oc],['orden_cerrada','=','no']])->
                                    // join('co_ordenes_detalles','co_ordenes_masters.num_oc','=','co_ordenes_detalles.num_oc')->
                                    // join('inv_productos','co_ordenes_detalles.codigo','=','inv_productos.codigo')->
                                    // join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                    // join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                    // join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                    // join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->
    
                                    select('co_ordenes_masters.*',
    
                                        // 'co_ordenes_detalles.cantidad','co_ordenes_detalles.precio as precio_venta','co_ordenes_detalles.porc_desc',
                                        // 'co_ordenes_detalles.valor_bruto','co_ordenes_detalles.valor_neto','co_ordenes_detalles.valor_neto',
    
                                        // 'inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo',
                                        // 'inv_productos.galeriaImagenes',
                                        // 'categorias.descripcion as c','brands.descripcion as marca',
                                        // 'invtipos_inventarios.descripcion as tipoinventario',
                                        // 'bodegas.descripcion as almacen'
                                        )->
                                    first(); 

            $value->productos = $transaccionesDetalle;
            $value->orden = $datos;
        } 
        
        return $transacciones;
    }

    public function store(Request $request)
    {
        //
    }
    
    public function show(inv_liquidacionMercancia $inv_liquidacionMercancia)
    {
        //
    }
    
    public function update(Request $request, inv_liquidacionMercancia $inv_liquidacionMercancia)
    {
        //
    }
    
    public function destroy(inv_liquidacionMercancia $inv_liquidacionMercancia)
    {
        //
    }
}
