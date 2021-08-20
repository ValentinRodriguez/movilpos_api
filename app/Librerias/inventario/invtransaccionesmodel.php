<?php

namespace App\Librerias\inventario;

use Illuminate\Database\Eloquent\Model;

class invtransaccionesmodel extends Model
{
    protected $connection = 'mov_inventario';
    protected $table='invtransaccionesmaster';
    protected $fillable = ['num_doc','numerosecuencia','fecha','id_tipomov','conduce_no','factura','tipo_cliente','sec_cliente',
                           'cod_sp','cod_sp_sec','num_rnc','direccion','email','id_num_oc','id_num_op','id_bodega',
                           'id_bodega_d','placa','cod_mov_entrada','num_doc_entrada','cod_transportista','cod_tarifa','comentario',
                           'departamento','id','nombre_departamento','cuenta_no','inv_tipomov_transferencia','documento_origen',
                           'codigo_movimiento_origen','descripcion_cuenta','nombre_recibido_por','origen','firma_recibido_por','controlCliente',
                           'controlDespacho','controlDepartamento','controlDevoluciones','controlTransferencia','controlOrdCompra','bodega_origen',
                           'nombre_entregado_por','firma_entregado_por','estado','condicion_recibo','usuario_creador','usuario_modificador'];

    public function ScopeCodmov($query, $codMov){
            if($codMov){
               return $query->where('invtransaccionesmaster.id_tipomov','=',"$codMov");
            }
    }

    public function ScopeSinDetalles($query)
    {
        return $query-> join('invtiposmovimientos','invtransaccionesmaster.id_tipomov','=','invtiposmovimientos.id_tipomov')->
                        leftjoin('veclientes',[['invtransaccionesmaster.tipo_cliente','=','veclientes.tipo_cliente'],
                                            ['invtransaccionesmaster.sec_cliente','=','veclientes.sec_cliente']])->
                        leftjoin('proveedores',[['invtransaccionesmaster.cod_sp','=','proveedores.cod_sp'],
                                            ['invtransaccionesmaster.cod_sp_sec','=','proveedores.cod_sp_sec']])->
                        
                        join('bodegas','invtransaccionesmaster.id_bodega','=','bodegas.id_bodega')->
                        leftjoin('nodepartamentos','invtransaccionesmaster.departamento','=','nodepartamentos.departamento')->
                        leftjoin('noempleados','invtransaccionesmaster.id','=','noempleados.id')->
                        leftjoin('transportistas','invtransaccionesmaster.cod_transportista','=','transportistas.cod_transportista')->
                        leftjoin('bodegas_usuarios','bodegas.id_bodega','=','bodegas_usuarios.id_bodega')->
                        select('invtransaccionesmaster.*',
                        
                            'veclientes.nombre as veclientes_nombre','veclientes.num_rnc as veclientes_num_rnc',
                            'veclientes.direccion as veclientes_direccion','veclientes.email as veclientes_email',
                            'veclientes.telefono_oficina as veclientes_telefono_oficina','veclientes.telefono_oficina as veclientes_telefono_oficina',
                            'veclientes.telefono_casa as veclientes_telefono_casa',

                            'proveedores.nom_sp as proveedores_nom_sp','proveedores.tel_sp as proveedores_tel_sp',
                            'bodegas.descripcion as bodegas_descripcion',
                            'nodepartamentos.titulo as nodepartamento_titulo',
                            'noempleados.primernombre as nodepartamento_primernombre',                                                    
                            'noempleados.primerapellido as nodepartamento_primerapellido',  
                            'invtiposmovimientos.titulo as titulo_mov',

                            'transportistas.nombre as transportista_nombre'                                                       
                            )-> 
                            orderBy('created_at', 'desc')->  
                            get();
    }

    public function ScopeConDetalles($query)
    {
        return $query-> join('invtransaccionesdetalle',[
                                        ['invtransaccionesmaster.num_doc','=','invtransaccionesdetalle.num_doc'],
                                        ['invtransaccionesmaster.id_tipomov','=','invtransaccionesdetalle.id_tipomov'],
                                        ['invtransaccionesmaster.id_bodega','=','invtransaccionesdetalle.id_bodega']
                                        ])->                       
                        
                        join('inv_productos','invtransaccionesdetalle.codigo','=','inv_productos.codigo')->
                        join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->                        
                        join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                        join('brands','brands.id_brand','=','inv_productos.id_brand')->
                        join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->

                        select('inv_productos.*',                        

                               'invtransaccionesdetalle.cantidad1 as cantidad1',
                               'invtransaccionesdetalle.cantidad as cantidad',
                               
                               'categorias.descripcion as categoria',
                               'brands.descripcion as marca',
                               'invtipos_inventarios.descripcion as tipoinventario',
                               'bodegas.descripcion as almacen'
                        )-> 
                        orderBy('created_at', 'desc')->  
                        get();
    }
}

