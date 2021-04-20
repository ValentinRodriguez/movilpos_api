<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\ExistenciasAlmacen;
use App\Librerias\invTipos;
use App\Librerias\Bodegas;
use App\Librerias\InvProductos;
use Illuminate\Support\Facades\DB;

class ExistenciasAlmacenController extends ApiResponseController
{
    public function autoLlenado() {
        $respuesta = array();

        $tipoInv = invTipos::orderBy('created_at', 'desc')->get();

        $bodegas = Bodegas::orderBy('id_bodega', 'asc')->
                            join('paises','paises.id_pais','=','bodegas.id_pais')->
                            join('ciudades','ciudades.id_ciudad','=','bodegas.id_ciudad')->
                            select('bodegas.*','paises.descripcion as pais','ciudades.descripcion as ciudad')->
                            where('bodegas.estado','=','ACTIVO')->
                            get();

        $productos = InvProductos::leftjoin('invtransaccionesdetalle','invtransaccionesdetalle.codigo','=','inv_productos.codigo')->

                            join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->                        
                            join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                            join('brands','brands.id_brand','=','inv_productos.id_brand')->
                            join('propiedades','propiedades.id_propiedad','=','inv_productos.id_propiedad')->
                            join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->

                            select('inv_productos.id','inv_productos.titulo','inv_productos.descripcion','inv_productos.id_tipoinventario',
                                    'inv_productos.codigo', 'inv_productos.existenciaMinima', 'inv_productos.existenciaMaxima', 
                                    'inv_productos.precio_compra', 'inv_productos.precio_venta', 'inv_productos.costo', 
                                    'inv_productos.fechaInicioDescuento', 'inv_productos.fechaFinDescuento', 'inv_productos.ventas', 
                                    'inv_productos.devoluciones', 'inv_productos.galeriaImagenes', 'inv_productos.descripcion','inv_productos.porcientodescuento',         
                                    'inv_productos.cod_sp','inv_productos.cod_sp_sec','inv_productos.id_propiedad','inv_productos.tipo_producto',

                            DB::raw('sum(invtransaccionesdetalle.cantidad1) as cantidad1'),
                            DB::raw('sum(invtransaccionesdetalle.cantidad) as cantidad'),
                                
                                'categorias.descripcion as categoria',
                                'brands.descripcion as marca',
                                'invtipos_inventarios.descripcion as tipoinventario',
                                'bodegas.descripcion as almacen',
                                'propiedades.descripcion as propiedad'
                            )-> 
                            where([['inv_productos.estado','=','ACTIVO']])->
                            groupby('inv_productos.id','inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo', 
                                    'inv_productos.existenciaMinima','inv_productos.existenciaMaxima','inv_productos.precio_compra', 
                                    'inv_productos.precio_venta','inv_productos.costo','inv_productos.fechaInicioDescuento','inv_productos.fechaFinDescuento', 
                                    'inv_productos.ventas','inv_productos.devoluciones','inv_productos.galeriaImagenes','inv_productos.descripcion',
                                    'inv_productos.cod_sp','inv_productos.cod_sp_sec','categorias.descripcion','brands.descripcion','invtipos_inventarios.descripcion',
                                    'inv_productos.tipo_producto','bodegas.descripcion','propiedades.descripcion')->

                            orderBy('inv_productos.created_at', 'desc')->  
                            get();

        // return response()->json($bodegas);

        $_tipoInv = array("label" => 'tipoInv', "data" => $tipoInv, "icono" => 'fas fa-dolly-flatbed');
        $_bodegas = array("label" => 'bodegas', "data" => $bodegas, "icono" => 'fas fa-dolly-flatbed');
        $_productos = array("label" => 'productos', "data" => $productos, "icono" => 'fas fa-dolly-flatbed');
        
        array_push($respuesta,$_tipoInv);
        array_push($respuesta,$_bodegas);
        array_push($respuesta,$_productos);
        
        return $this->successResponse($respuesta);
    }

    public function existenciasAlmacen(Request $request){
        $datos = $request->all();
        // return response()->json($datos);
        $productos = InvProductos::tipoInventario($datos['id_tipoinventario'])->
                                   bodega($datos['id_bodega'])->
                                   producto($datos['id_producto'])->
                                   ConDetalles();        

        return $this->successResponse($productos);
    }
}
