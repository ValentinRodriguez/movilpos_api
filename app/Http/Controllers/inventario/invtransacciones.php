<?php

namespace App\Http\Controllers\inventario;
use DateTime;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Exports\ProductosExport;

use App\Librerias\empresa\Empresa;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use App\Librerias\rrhh\noempleados;
use App\Librerias\ventas\Mclientes;
use App\Librerias\rrhh\Departamento;
use Maatwebsite\Excel\Facades\Excel;
use App\Librerias\inventario\Bodegas;
use App\Librerias\compras\proveedores;
use App\Librerias\inventario\InvProductos;
use App\Librerias\usuarios\bodegasUsuarios;
use App\Librerias\inventario\transportistas;
use App\Librerias\inventario\invnumeraciones;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\inventario\Invtiposmovimientos;
use App\Librerias\inventario\invtransaccionesmodel;
use App\Librerias\inventario\Invtransaccdetallemodel;

class invtransacciones extends ApiResponseController
{    
    public function index(Request $request)
    {
        $transacciones = invtransaccionesmodel::where('invtransaccionesmaster.estado','=','ACTIVO')-> 
                                                join('invtiposmovimientos','invtransaccionesmaster.id_tipomov','=','invtiposmovimientos.id_tipomov')->
                                                leftjoin('mov_ventas.veclientes',[['invtransaccionesmaster.tipo_cliente','=','mov_ventas.veclientes.tipo_cliente'],
                                                                       ['invtransaccionesmaster.sec_cliente','=','mov_ventas.veclientes.sec_cliente']])->
                                                leftjoin('mov.compras.proveedores',[['invtransaccionesmaster.cod_sp','=','mov.compras.proveedores.cod_sp'],
                                                                        ['invtransaccionesmaster.cod_sp_sec','=','mov.compras.proveedores.cod_sp_sec']])->
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
                                                       'mov.compras.proveedores.nom_sp as mov.compras.proveedores_nom_sp','mov.compras.proveedores.tel_sp as mov.compras.proveedores_tel_sp',
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
            
            $value->productos = $transaccionesDetalle;
        } 
        
        return $this->successResponse($transacciones, $request->urlRequest);
    }

    public function store(Request $request)
    {
        try{
            DB::beginTransaction();  

                $idtipomov       = $request->get('id_tipomov');
                $idtipocliente   = $request->get('tipo_cliente');
                $productos       = $request->get('productos');
                $usuario_creador = strtolower($request->get('usuario_creador'));
                
                $documentomov = 0;
                $numerosecuencia = 0;
                
                $controlmovimientos = Invtiposmovimientos::where('id_tipomov','=',$idtipomov)->
                                                            select('control_clientes','control_despachos',
                                                                    'control_devoluciones','control_transferencia',
                                                                    'control_departamento','control_orden_compra','origen')->
                                                            first();
                                                                                             
                $controlcliente       =strtolower($controlmovimientos->control_clientes);
                $controldespacho      =strtolower($controlmovimientos->control_despachos);
                $controldepartamento  =strtolower($controlmovimientos->control_departamento);
                $controldevoluciones  =strtolower($controlmovimientos->control_devoluciones);
                $controltransferencia =strtolower($controlmovimientos->control_transferencia);
                $controlOrdCompra     =strtolower($controlmovimientos->control_orden_compra);
                $origenes             =strtolower($controlmovimientos->origen); 
                
                if($controlmovimientos == null){
                    return response()->json('Codigo movimiento no existe');
                }
                
                $numdoc = invnumeraciones::where('id_tipomov','=',$idtipomov)->
                                           select('num_doc')->
                                           get()->
                                           max();
        
                $numerosecuencia = invnumeraciones::get('secuencia')->max();
                
                if( $numdoc == null){
                    
                    $documentomov = 1;
                    $datossec = ['num_doc'=> 1,
                                'id_tipomov' =>$idtipomov,
                                'secuencia' => 1,
                                'usuario_creador' => $usuario_creador,
                                'usuario_modificador' => 'no'];
                    
                    invnumeraciones::create($datossec);                    
                }
                else{
                    $documentomov = $numdoc->num_doc + 1;
                }
        
                if( $numerosecuencia == null){
                    $numerosecuencia = 1;
                }
                else{
                    $numerosecuencia =$numerosecuencia->secuencia + 1;
                }
                
                $datosm = $request->all();
                $datosm['num_doc'] = $documentomov;
                $datosm['numerosecuencia'] = $numerosecuencia;
                $datosm['controlCliente'] = $controlcliente;
                $datosm['controlDespacho'] = $controldespacho;
                $datosm['controlDepartamento'] = $controldepartamento;
                $datosm['controlDevoluciones'] = $controldevoluciones;
                $datosm['controlTransferencia'] = $controltransferencia;
                $datosm['controlOrdCompra'] = $controlOrdCompra;
                $date = new DateTime($datosm['fecha']);
                $datosm['fecha'] = $date->format('Y-m-d H:i:s');
                $datosm['origen'] = $origenes;         
                
                $nombre_departamento = Departamento::where('id','=',$datosm['departamento'])->first();

                $datosm['nombre_departamento'] = $nombre_departamento->descripcion;
                
                $messages = [
                    'required' => 'El campo :attribute es requerido.',
                    'unique'   => 'El campo :attribute debe ser unico',
                    'numeric'  => 'El campo :attribute debe ser numerico',
                    'required_if' => 'El campo :attribute no puede estar en blanco',
                    'min' => 'El campo :attribute de ser de al menos 10 caracteres',
                ];
                
                $validator = validator($datosm, [
                    'id_tipomov'        => 'exists:invtiposmovimientos,id_tipomov',
                    'numerosecuencia'   => 'required|numeric',
                    'comentario'        => 'required|string|min:10|max:500',
                    'estado'            => 'required|string',
                    'id_bodega'         => 'exists:bodegas,id_bodega',
                    'id_bodega_d'       => 'exclude_if:controlTransferencia,no|exists:bodegas,id_bodega',
                    'id_num_op'         => 'exclude_if:controlDespacho,no|exists:prordenesmaster,num_oc',
                    'departamento'      => 'exclude_if:controlDepartamento,no|exists:nodepartamentos,departamento',
                    'sec_cliente'       => ['exclude_if:controlCliente,no',
                                        Rule::exists('mov_ventas.veclientes','sec_cliente')->
                                                where(function ($query) use ($idtipocliente){
                                                    $query->where('tipo_cliente', '=',$idtipocliente);
                                                })],
                    'factura' => 'exclude_if:controlDevoluciones,no|exists:vefacturasmaster,factura'],
                $messages);       
                
                if ($validator->fails()) {            
                    $errors = $validator->errors();
                    return $this->errorResponseParams($errors->all(), $request->urlRequest);
                }else{
                    invtransaccionesmodel::create($datosm);
                                        
                    if (count($productos) !== 0) {
                        $datosd = null;
                        for ($i=0; $i < count($productos); $i++) {

                            $cantidadtrx = $productos[$i]['cantidad1'];                            
                            
                            if($origenes == 'credito'){                                
                                $cantidadtrx = $cantidadtrx* -1;

                                $existencia = Invtransaccdetallemodel::where('codigo','=',$request->input('codigo'.$i))->
                                                                       sum('cantidad');

                                if($cantidadtrx > $existencia){
                                    return $this->errorResponse('Cantidad Excede Existencia');
                                } 
                            } else {                                
                                $cantidadtrx = $productos[$i]['cantidad1'];                                
                                if($cantidadtrx < 0){
                                    $cantidadtrx = $cantidadtrx * -1;
                                }
                            }
                            
                            $datosd = array('num_doc'          => $documentomov,
                                            'id_tipomov'       => $request->input('id_tipomov'),
                                            'id_bodega'        => $request->input('id_bodega'),
                                            'numerosecuencia'  => $numerosecuencia,
                                            'area'             => 0,
                                            'codigo'           => $productos[$i]['codigo'],
                                            'cantidad1'        => $cantidadtrx,
                                            'cantidad'         => 0,
                                            'margen'           => 0,  
                                            'precio'           => $productos[$i]['precio'],
                                            'costo'            => $productos[$i]['costo'],
                                            'estado'           => 'activo'
                                            // 'imagenPrincipal'  => $request->input('imagenPrincipal'.$i),
                                            // 'condicion_recibo' => $request->input('condicion_recibo'.$i),
                                            // 'unidadMed'        => $request->input('unidadMed'.$i),
                                            // 'titulo_producto'  => $request->input('titulo'.$i)
                            );
                            // return response()->json($datosd);
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];
            
                            $validator = validator($datosd, [
                                'num_doc'          => 'required',
                                'precio'           => 'required',
                                'numerosecuencia'  => 'required',
                                'codigo'           => 'required',
                                'cantidad1'        => 'required',
                                'cantidad'         => 'required'
                            ],$messages);
            
                            if ($validator->fails()) {                                
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest);
                            }
                            
                            Invtransaccdetallemodel::create($datosd);                           
                        }                                      
                    }else{
                        return $this->errorResponse('No hay productos agragados a la transaccion');
                    }
                    invnumeraciones::where('id_tipomov','=',$idtipomov)->
                                    update(['num_doc' =>$documentomov,
                                            'secuencia'=>$numerosecuencia]);
                }            
            DB::commit();
            return $this->successResponse($datosm, $request->urlRequest);
        }
        catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
    }

    public function show(Request $request,$id)
    {
        $transacciones = invtransaccionesmodel::where([['invtransaccionesmaster.estado','=','ACTIVO'],
                                                       ['invtransaccionesmaster.id','=',$id]])-> 
                                                SinDetalles();

                                                return $this->successResponse($transacciones, $request->urlRequest);
    }
    
    public function consultaBalances(Request $request)
    {

        // "SELECT '('+cast(c.cod_mov as char(2))+')'+RTRIM(c.descrip_mov), a.num_doc,a.num_oc,a.orden_compra,a.fecha,",
        // "SUM(a.cantidad_2),'0','0','('+cast(b.cod_bodega as char(1))+')'+RTRIM(b.descripcion) FROM iptb00006 a,intb00009 b,iptb00005 c ", 
        // "WHERE a.cod_n = ? and a.cod_grupo=? and ",
        // "      a.cod_tipo =? and a.cod_sec=? and ", 
        // "      a.status_t is null and a.fecha between ? and  ? and ",
        // "      a.cod_mov = c.cod_mov and ",
        // "      a.bodega = b.cod_bodega and ",criterio CLIPPED,
        // " GROUP BY a.num_doc,a.fecha,a.orden_compra,a.num_oc,c.cod_mov,c.descrip_mov,b.cod_bodega,b.descripcion ",
        // "      ORDER BY a.fecha,a.num_doc "

        // 'invtransaccionesmaster.orden_compra',

        $productos = invtransaccionesmodel::join('invtransaccionesdetalle','invtransaccionesdetalle.num_doc','=','invtransaccionesmaster.num_doc')-> 
                                            join('bodegas','bodegas.id_bodega','=','invtransaccionesdetalle.id_bodega')-> 
                                            join('invtiposmovimientos','invtiposmovimientos.id_tipomov','=','invtransaccionesdetalle.id_tipomov')-> 
                                            select('invtransaccionesmaster.num_doc','invtransaccionesmaster.id_num_oc',
                                                   'invtransaccionesmaster.fecha','invtransaccionesdetalle.cantidad1 as cantidad',
                                                   'bodegas.id_bodega','bodegas.descripcion',
                                                   'invtiposmovimientos.id_tipomov','invtiposmovimientos.descripcion')->
                                            get();
       
        return $this->successResponse($productos, $request->urlRequest);
    }

    public function update($validacion)
    {

    }

    public function destroy(Request $request, $id)
    {
        $transaccion = invtransaccionesmodel::find($id);

        DB::beginTransaction(); 
            $transaccion->update(['estado' => 'eliminado']);
        DB::commit();

        if($transaccion == null){
            return $this->errorResponse('NO EXISTE TRANSACCION');
        } else {
            return $this->successResponse(null, $request->urlRequest,"Registro Eliminado");
        }   
    }
    
    public function operacionmov(Request $request){

        // return response()->json($fechaInicial);
        $fechaInicial = $request->get('fecha_inicial');
        if($fechaInicial == null){
            $fechaInicial = 'FECHA INICIAL NO TIENE DATOS o el request debe venir <fecha_inicial> sin <>';
            return $this->errorResponse($fechaInicial);
        }
        $fechaFinal   = $request->get('fecha_final');
        if($fechaFinal == null){
            $fechaFinal = 'FECHA FINAL NO TIENE DATOS o el request debe venir <fecha_final> sin <>';
            return $this->errorResponse($fechaFinal);
        }
        $fecha1 = strtotime($fechaInicial);
        $fecha2 = strtotime($fechaFinal);
       // return response()->json(date('d-m-y',$fecha1));
        if($fecha2 < $fecha1){
            return $this->errorResponse('Fecha Final Menor que la fecha Inicial');
        }
        $codMov = $request->get('codmov');

       $operaciones = InvProductos::select('e.descripcion as categoria','f.descripcion as brand','invtransaccionesmaster.costo',
                                           DB::Raw("IFNULL(concat('(',h.cuenta_no,')',h.descripcion),'NO TIENE') as cuenta_contable"),
                                           DB::Raw("concat('(',invtransaccionesmaster.codigo,')',invtransaccionesmaster.descripcion) as producto"),
                                           DB::Raw("concat('(',d.id_tipomov,')',d.descripcion) as tipo_movimiento"),
                                           DB::Raw('SUM(invtransaccionesdetalle.cantidad) as consumo'),
                                           DB::Raw('SUM(invtransaccionesdetalle.cantidad*invtransaccionesmaster.costo) as valor_costo'))
                                    ->join('invtransaccionesdetalle as b','invtransaccionesmaster.codigo','invtransaccionesdetalle.codigo')
                                    ->join('invtransaccionesmaster as c','c.num_doc','invtransaccionesdetalle.num_doc')
                                    ->join('invtiposmovimientos as d','c.id_tipomov','d.id_tipomov')
                                    ->join('categorias as e','e.id_categoria','=','invtransaccionesmaster.id_categoria')
                                    ->join('brands as f','f.id_brand','=','invtransaccionesmaster.id_brand')
                                    ->leftjoin('invcuentasmovimientos as g','g.id_tipomov','=','d.id_tipomov')
                                    ->leftjoin('cgcatalogo as h','h.cuenta_no','=','g.cuenta_no')
                                    ->whereBetween('c.fecha',[date('y-m-d',$fecha1),date('y-m-d',$fecha2)])
                                    ->groupby('invtransaccionesmaster.codigo','invtransaccionesmaster.descripcion','d.id_tipomov','d.descripcion','e.descripcion',
                                              'f.descripcion','h.cuenta_no','h.descripcion','invtransaccionesmaster.costo')
                                    ->get();
       return $this->successResponse($operaciones, $request->urlRequest);

    }

    public function diasInventario(Request $request){

        $meses = $request->get('meses');
        if($meses == null){
            return $this->errorResponse('Parametro meses esta en blanco');
        }

        $fechaInicial = $request->get('fecha_inicial');
        if($fechaInicial == null){
            $fechaInicial = 'FECHA INICIAL NO TIENE DATOS o el request debe venir <fecha_inicial> sin <>';
            return $this->errorResponse($fechaInicial);
        }
        $fechaFinal   = $request->get('fecha_final');
        if($fechaFinal == null){
            $fechaFinal = 'FECHA FINAL NO TIENE DATOS o el request debe venir <fecha_final> sin <>';
            return $this->errorResponse($fechaFinal);
        }
        $fecha1 = strtotime($fechaInicial);
        $fecha2 = strtotime($fechaFinal);

        $datos = InvProductos::select('invtransaccionesmaster.codigo','invtransaccionesmaster.titulo','invtransaccionesmaster.unidadMed','d.descripcion',
                                        DB::Raw("concat('(',c.descripcion,')') as categoria"),
                                        DB::Rwa("concat('(',d.descripcion,')') as marca"))
                                ->addSelect(['existencia' =>
                                            Invtransaccdetallemodel::sum('invtransaccionesdetalle.cantidad')
                                                ->whereColumn('invtransaccionesdetalle.codigo','invtransaccionesmaster.codigo')
                                                ->where('invtransaccionesdetalle.fecha','<=',date('y-m-d',$fecha2))
                                                ->where('invtransaccionesdetalle.estado','=','ACTIVO')
                                            ])
                                ->addSelect(['consumo' =>
                                            Invtransaccdetallemodel::sum('invtransaccionesdetalle.cantidad')
                                                ->whereColumn('invtransaccionesdetalle.codigo','invtransaccionesmaster.codigo')
                                                ->whereBetween('invtransaccionesdetalle.fecha',[date('y-m-d',$fecha1),date('y-m-d',$fecha2)])
                                            ])
                                ->join('categorias as c','c.id_categoria','=','invtransaccionesmaster.id_categoria')
                                ->join('brands as d','d.id_brand','=','invtransaccionesmaster.id_brand')
                                ->toSQl();

                            return $this->successResponse($datos, $request->urlRequest);

    }

    public function pendientesAlmacen(Request $request,$email)
    {   
        $data = array();       

        $bodegas_permisos = bodegasUsuarios::join('bodegas','bodegas_usuarios.id_bodega','=','bodegas.id_bodega')->
                                             select('bodegas_usuarios.*','bodegas.descripcion')->
                                             where('bodegas_usuarios.email','=',"$email")->
                                             get();
                                             
        foreach ($bodegas_permisos as $key => $value) {
            $i = 0;
            $id_bodega = $value->id_bodega;
            $transacciones = invtransaccionesmodel::where([['invtransaccionesmaster.estado','=','activo'],
                                                           ['invtransaccionesmaster.condicion_recibo','=','no'],
                                                           ['invtransaccionesmaster.id_bodega_d','=',$id_bodega]
                                                           ])->
                                                           leftjoin('transportistas','invtransaccionesmaster.cod_transportista','=','transportistas.cod_transportista')->
                                                           select("invtransaccionesmaster.*","transportistas.nombre as transportista_nombre")->
                                                           get();
             
                                                                  
            foreach ($transacciones as $key => $value) {
                
                $transaccionDetalle = Invtransaccdetallemodel::where("invtransaccionesdetalle.num_doc","=",$value->num_doc)->
                                                               get(); 
                 
                $value->detalle_transacciones = $transaccionDetalle;
                array_push($data, $value);
                $i++;
            }
        }
        
        return $this->successResponse($data, $request->urlRequest);
    }

    public function recibirTransaccion(Request $request, $id)
    {
        $transaccion = invtransaccionesmodel::find($id);
        $datosm = $request->all();
        $datosm['condicion_recibo'] = 'si';
        $idtipomov = $datosm['id_tipomov']; 
        $documento = $datosm['num_doc'];
        
        $numdoc = invnumeraciones::where('id_tipomov','=',$idtipomov)->
                                   select('num_doc')->
                                   get()->
                                   max();      

        $mov = Invtiposmovimientos::where('id_tipomov','=',$idtipomov)->
                                    select('control_clientes','control_despachos','inv_tipomov_transferencia',
                                            'control_devoluciones','control_transferencia',
                                            'control_departamento','control_orden_compra','origen')->
                                    get()->
                                    first();
        
        $documentomov = $numdoc->num_doc + 1; 
        $origenes = strtolower($mov->origen); 

        $numerosecuencia = invnumeraciones::get('secuencia')->max();
        $numerosecuencia = $numerosecuencia->secuencia + 1;

        $datosd = null;
        
        $datosm['documento_origen'] = $datosm['num_doc'];
        $datosm['bodega_origen'] = $datosm['id_bodega'];
        $datosm['num_doc'] = $mov->inv_tipomov_transferencia;
        $datosm['inv_tipomov_transferencia'] = $datosm['id_tipomov'];
        
        try{
            DB::beginTransaction();            
                $transaccion->update(['condicion_recibo' => 'si']);               
                 
                invtransaccionesmodel::create($datosm);
                
                $productos = Invtransaccdetallemodel::where('invtransaccionesdetalle.num_doc','=',$documento)->
                                                      get();              
                                                                    
                for ($i=0; $i < count($productos); $i++) {

                    $cantidadtrx = $productos[$i]->cantidad1;                    
                                               
                    if($origenes == 'credito'){    
                        $cantidadtrx = $cantidadtrx* -1;

                        $existencia = Invtransaccdetallemodel::where('codigo','=',$request->input('codigo'.$i))->
                                                               sum('cantidad');
                        if($cantidadtrx > $existencia){
                            return $this->errorResponse('Cantidad Excede Existencia');
                        } 
                    } else {                        
                        $cantidadtrx = $productos[$i]->cantidad;            
                        if($cantidadtrx < 0){
                            $cantidadtrx = $cantidadtrx * -1;
                        }
                    }
                                                 
                    $datosd = array('num_doc'          => intval($datosm['num_doc']),
                                    'id_tipomov'       => $datosm['id_tipomov'],
                                    'id_bodega'        => $productos[$i]->id_bodega,
                                    'numerosecuencia'  => $numerosecuencia,
                                    'area'             => 0,
                                    'codigo'           => $productos[$i]->codigo,
                                    'cantidad1'        => $productos[$i]->cantidad1,
                                    'cantidad'         => $cantidadtrx,
                                    'margen'           => 0,  
                                    'precio'           => $productos[$i]->precio,
                                    'costo'            => $productos[$i]->costo
                    );
                                 
                    $messages = [
                        'required' => 'El campo :attribute es requerido.',
                        'unique'   => 'El campo :attribute debe ser unico',
                        'numeric'  => 'El campo :attribute debe ser numerico',
                    ];
                    
                    $validator = validator($datosd, [
                        'num_doc'          => 'required',
                        'id_tipomov'       => 'required',
                        'id_bodega'        => 'required',
                        'numerosecuencia'  => 'required',
                        'area'             => 'required',
                        'codigo'           => 'required',
                        'cantidad1'        => 'required',
                        'cantidad'         => 'required',
                        'margen'           => 'required', 
                        'precio'           => 'required',
                        'costo'            => 'required'            
                    ],$messages);
                     
                    if ($validator->fails()) {
                        $errors = $validator->errors();
                        return $this->errorResponseParams($errors->all(), $request->urlRequest);
                    }
                    
                    Invtransaccdetallemodel::create($datosd);
                }      
                
                invnumeraciones::where('id_tipomov','=',$idtipomov)->
                                 update(['num_doc' =>$documentomov, 'secuencia'=>$numerosecuencia]);
            DB::commit();
        }catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
        return $this->successResponse($transaccion, $request->urlRequest);
    }

    public function detalleTransaccion(Request $request,$id){
        $productos = invtransaccionesmodel::where([['invtransaccionesmaster.estado','=','ACTIVO'],
                                                    ['invtransaccionesmaster.id','=',$id]])->
                                            ConDetalles();                                             
        if($productos === null){
            return $this->errorResponse('NO EXISTEN DOCUMENTOS');
        } else {
            return $this->successResponse($productos, $request->urlRequest); 
        }               
    }


    public function autollenado(Request $request){ 
        try {
            $respuesta = array();

            $clientes = Mclientes::join('mov_globales.paises','mov_globales.paises.id_pais','=','mov_ventas.veclientes.id_pais')->
                                join('mov_globales.ciudades','mov_globales.ciudades.id_ciudad','=','mov_ventas.veclientes.id_ciudad')->
                                select('mov_ventas.veclientes.*','mov_globales.paises.descripcion as pais','mov_globales.ciudades.descripcion as ciudad')->
                                orderBy('created_at', 'desc')->
                                where('mov_ventas.veclientes.estado','=','ACTIVO')->
                                get();
            
            $transportistas = transportistas::orderBy('id', 'asc')->where('estado','=','activo')->get();

            $departamentos = Departamento::orderBy('id', 'asc')->where('estado','=','activo')->get();
            
            $proveedores = proveedores::join('mov_globales.ciudades', 'mov_globales.ciudades.id_ciudad','=','proveedores.id_ciudad')->
                                        join('mov_globales.paises', 'mov_globales.paises.id_pais','=','proveedores.id_pais')->
                                        select('proveedores.*','mov_globales.ciudades.descripcion as ciudad','mov_globales.paises.descripcion as pais') ->
                                        where('proveedores.estado','=','activo')->
                                        get();

            $vendedor = noempleados::where('mov_rrhh.noempleados.id_puesto','=',3)->
                                select('mov_rrhh.noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"))->
                                get();
            
            $bodegas = Bodegas::orderBy('id_bodega', 'asc')->
                                join('mov_globales.paises','mov_globales.paises.id_pais','=','bodegas.id_pais')->
                                join('mov_globales.ciudades','mov_globales.ciudades.id_ciudad','=','bodegas.id_ciudad')->
                                select('bodegas.*','mov_globales.paises.descripcion as pais','mov_globales.ciudades.descripcion as ciudad')->
                                where('bodegas.estado','=','ACTIVO')->
                                get();

            $productos = InvProductos::ConDetalles();

            $movimientos = Invtiposmovimientos::orderby('id_tipomov','ASC')->
                                where('estado','=','ACTIVO')->get();

            // $usuarios = InvUsuarioMovimiento::join('users','users.email','=','invusuariosmovimientos.email')->
            //                     orderby('invusuariosmovimientos.id_tipomov','ASC')->
            //                     select('invusuariosmovimientos.*','users.name as name','users.surname as surname','users.username as username')->
            //                     where('invusuariosmovimientos.estado','=','ACTIVO')->
            //                     where('users.estado','=','ACTIVO')->
            //                     get();

            // $movimientos = array('codigosmov' => $codigomov, 'cuentas' => $cuentas,'usuarios' => $usuarios);


            $_clientes = array("label" => 'clientes', "data" => $clientes, "icono" => 'fas fa-dolly-flatbed');
            $_transportistas = array("label" => 'transportista', "data" => $transportistas, "icono" => 'fas fa-dolly-flatbed');
            $_departamentos = array("label" => 'departamentos', "data" => $departamentos, "icono" => 'fas fa-dolly-flatbed');
            $_proveedores = array("label" => 'proveedores', "data" => $proveedores, "icono" => 'fas fa-dolly-flatbed');
            $_vendedor = array("label" => 'vendedor', "data" => $vendedor, "icono" => 'fas fa-dolly-flatbed');
            $_bodegas = array("label" => 'bodegas', "data" => $bodegas, "icono" => 'fas fa-dolly-flatbed');
            $_movimientos = array("label" => 'movimientos', "data" => $movimientos, "icono" => 'fas fa-dolly-flatbed');
            $_productos = array("label" => 'productos', "data" => $productos, "icono" => 'fas fa-dolly-flatbed');

            array_push($respuesta,$_clientes);
            array_push($respuesta,$_transportistas);
            array_push($respuesta,$_departamentos);
            array_push($respuesta,$_proveedores);
            array_push($respuesta,$_vendedor);
            array_push($respuesta,$_bodegas);
            array_push($respuesta,$_movimientos);
            array_push($respuesta,$_productos);

            return $this->successResponse($respuesta, $request->urlRequest);      
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
    }
    
    public function verReporte($num_doc,$id_usuario){
        $data = array();  
        
        $transacciones = invtransaccionesmodel::where([['invtransaccionesmaster.estado','=','ACTIVO'],
                                                       ['invtransaccionesmaster.num_doc','=',$num_doc]])-> 
                                                join('invtiposmovimientos','invtransaccionesmaster.id_tipomov','=','invtiposmovimientos.id_tipomov')->
                                                leftjoin('mov_ventas.veclientes',[['invtransaccionesmaster.tipo_cliente','=','mov_ventas.veclientes.tipo_cliente'],
                                                                       ['invtransaccionesmaster.sec_cliente','=','mov_ventas.veclientes.sec_cliente']])->
                                                leftjoin('proveedores',[['invtransaccionesmaster.cod_sp','=','proveedores.cod_sp'],
                                                                        ['invtransaccionesmaster.cod_sp_sec','=','proveedores.cod_sp_sec']])->
                                                leftjoin('mov_rrhh.nodepartamentos','invtransaccionesmaster.departamento','=','mov_rrhh.nodepartamentos.id')->
                                                leftjoin('mov_rrhh.noempleados','invtransaccionesmaster.id','=','mov_rrhh.noempleados.id')->
                                                leftjoin('transportistas','invtransaccionesmaster.cod_transportista','=','transportistas.cod_transportista')->
                                                join('bodegas','invtransaccionesmaster.id_bodega','=','bodegas.id_bodega')->
                                                select('invtransaccionesmaster.*',
                                                       'invtiposmovimientos.titulo as titulo_mov',
                                                       'mov_ventas.veclientes.nombre as veclientes_nombre','mov_ventas.veclientes.documento as veclientes_documento',
                                                       'mov_ventas.veclientes.direccion as veclientes_direccion','mov_ventas.veclientes.email as veclientes_email',
                                                       'mov_ventas.veclientes.telefono_oficina as veclientes_telefono_oficina','mov_ventas.veclientes.telefono_oficina as veclientes_telefono_oficina',
                                                       'mov_ventas.veclientes.telefono_casa as veclientes_telefono_casa','mov_ventas.veclientes.celular as veclientes_celular',
                                                       'proveedores.nom_sp as proveedores_nom_sp','proveedores.tel_sp as proveedores_tel_sp',
                                                       'bodegas.descripcion as bodega_destino',
                                                       'mov_rrhh.nodepartamentos.titulo as nodepartamento_titulo',
                                                       'mov_rrhh.noempleados.primernombre as vendedor_primernombre', 'mov_rrhh.noempleados.primerapellido as vendedor_primerapellido',
                                                       'transportistas.nombre as transportista_nombre','transportistas.nombre as transportista_telefono')->
                                                orderBy('created_at', 'desc')->
                                                get();
                                                
        $bodega_origen = bodegasUsuarios::join('users','users.email','=','bodegas_usuarios.email')->
                                          join('bodegas','bodegas_usuarios.id_bodega','=','bodegas.id_bodega')->
                                          where('users.id','=',$id_usuario)->
                                          select('bodegas.descripcion as bodega_origen')->
                                          first();   

        $transacciones[0]['bodega_origen'] = $bodega_origen->bodega_origen;
        
        $transaccionesDetalle = Invtransaccdetallemodel::where([['invtransaccionesdetalle.estado','=','ACTIVO'],
                                                                ['invtransaccionesdetalle.num_doc','=',$num_doc],
                                                                ['invtransaccionesdetalle.id_tipomov','=',$transacciones[0]->id_tipomov],
                                                                ['invtransaccionesdetalle.id_bodega','=',$transacciones[0]->id_bodega]])-> 
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
                                                         'bodegas.descripcion as almacen')-> 
                                                            
                                                         orderBy('created_at', 'desc')->  
                                                         get();
                                                                                               
        if ($transacciones == null){
            return $this->errorResponse('Esta transaccion no existe');
        }
        else {
            $empresa = Empresa::orderBy('created_at', 'desc')->first();
            foreach ($transacciones as $key => $value) {
                $value->productos = $transaccionesDetalle;
                array_push($data, $value);
            }
            $datos = $data[0];
            $datos->empresa = $empresa;
            // return response()->json($datos);
            $pdf = PDF::loadView('transaccion', compact('datos'));
            //return view('transaccion', ['datos' => $datos]);
            return $pdf->stream('transaccion.pdf');
        }             
    }
    
    public function descargaPDF() {
        $productos = InvProductos::all();
        $pdf = PDF::loadView('transaccion', compact('productos'));
        //$pdf = new Dompdf();
        //$pdf->loadHtml('hola');
        $pdf->setPaper("A4","landscape");
        // $pdf->render();
        return $pdf->download('transaccion.pdf');
    }

    public function verReporteH(){
        $productos = InvProductos::all();
    	$pdf = PDF::loadView('transaccion', compact('productos'));
        $pdf->setPaper("A4","landscape");
    	return $pdf->stream('transaccion.pdf');
    }

    public function ProductosXLS() {
        return Excel::download(new ProductosExport, 'users.xlsx');
    }
}

