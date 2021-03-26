<?php

namespace App\Librerias;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class InvProductos extends Model
{
    protected $table = 'inv_productos';

    protected $fillable = ["titulo","tipo", "id_categoria","id_brand","id_tipoinventario","descripcion", "chasis","motor",     
                           "fabricacion","asientos","asientosAd","id_propiedad","descripcion_us","codigo","codigo_referencia", "origen","existenciaMinima",                          
                           "existenciaMaxima","controlDeExistencias","unidadMed","factor_c","controlItbis","bodegaRecepcion","centroDeCostos",
                           "usuario_modificador","tipo_producto","despiece","ultimoproveedor","ultimaFechaCompra","precio_compra","id_bodega",
                           "precio_venta","costo","fechaInicioDescuento","fechaFinDescuento","porcientodescuento","ventas","devoluciones", 
                           "estado","galeriaImagenes","imagenPrincipal","variaciones","usuario_creador","descuento"];

    public function ScopeParametro($query, $parametro)
    {
        if ($parametro) {
            return $query->where('inv_productos.titulo', 'LIKE', "%$parametro%")->
                           orWhere('inv_productos.codigo', 'LIKE', "%$parametro%");
        }
    }

    public function ScopeTitulo($query, $parametro)
    {
        if ($parametro) {
            return $query->where('inv_productos.titulo', '=', "$parametro");
        }
    }

    public function ScopeIdcategoria($query, $idcategoria)
    {
        if ($idcategoria) {
            return $query->where('inv_productos.id_categoria', 'LIKE', "%$idcategoria%");
        }
    }

    public function Scopeidbrand($query, $idbrand)
    {
        if ($idbrand) {
            return $query->where('inv_productos.id_brand', 'LIKE', "%$idbrand%");
        }
    }

    public function ScopecodigoReferencia($query, $codigoReferencia)
    {
        if ($codigoReferencia) {
            return $query->where('inv_productos.codigo_referencia', 'LIKE', "%$codigoReferencia%");
        }
    }

    // public function ScopefechaCreacion($query, $creacion_desde, $creacion_hasta)
    // {
    //     if ($creacion_desde && $creacion_hasta) {

    //         $ini = new DateTime($creacion_desde);
    //         $fin = new DateTime($creacion_hasta);
    //         return $query->whereBetween('inv_productos.created_at', [$ini, $fin]);
    //     }
    // }

    public function ScopeConDetalles($query)
    {
        return $query-> leftjoin('invtransaccionesdetalle','invtransaccionesdetalle.codigo','=','inv_productos.codigo')->

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
    }

    public function ScopeConDetallesExiste($query)
    {
        return $query-> leftjoin('invtransaccionesdetalle','invtransaccionesdetalle.codigo','=','inv_productos.codigo')->

                        join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->                        
                        join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                        join('brands','brands.id_brand','=','inv_productos.id_brand')->
                        join('propiedades','propiedades.id_propiedad','=','inv_productos.id_propiedad')->
                        join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                        
                        select('inv_productos.id','inv_productos.titulo','inv_productos.descripcion',
                                'inv_productos.codigo', 'inv_productos.existenciaMinima', 'inv_productos.existenciaMaxima', 
                                'inv_productos.precio_compra', 'inv_productos.precio_venta', 'inv_productos.costo', 
                                'inv_productos.fechaInicioDescuento', 'inv_productos.fechaFinDescuento', 'inv_productos.ventas', 
                                'inv_productos.devoluciones', 'inv_productos.galeriaImagenes', 'inv_productos.descripcion',
                                'inv_productos.porcientodescuento','inv_productos.id_propiedad',   

                        DB::raw('sum(invtransaccionesdetalle.cantidad1) as cantidad1'),
                        DB::raw('sum(invtransaccionesdetalle.cantidad) as cantidad'),
                            
                            'categorias.descripcion as categoria',
                            'brands.descripcion as marca',
                            'invtipos_inventarios.descripcion as tipoinventario',
                            'bodegas.descripcion as almacen',
                            'propiedades.descripcion as propiedad'
                        )-> 
                        where([['inv_productos.estado','=','ACTIVO'],['invtransaccionesdetalle.cantidad1','>',0]])->
                        groupby('inv_productos.id','inv_productos.titulo','inv_productos.descripcion',       
                                'inv_productos.codigo', 'inv_productos.existenciaMinima', 'inv_productos.existenciaMaxima', 
                                'inv_productos.precio_compra', 'inv_productos.precio_venta', 'inv_productos.costo', 
                                'inv_productos.fechaInicioDescuento', 'inv_productos.fechaFinDescuento', 'inv_productos.ventas', 
                                'inv_productos.devoluciones', 'inv_productos.galeriaImagenes', 'inv_productos.descripcion',  
                                'categorias.descripcion','brands.descripcion','invtipos_inventarios.descripcion','bodegas.descripcion',
                                'propiedades.descripcion')->

                        orderBy('inv_productos.created_at', 'desc')->  
                        get();
    }
}
