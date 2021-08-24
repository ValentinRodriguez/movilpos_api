<?php

namespace App\Http\Controllers\compras;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\inventario\requisicionesMaster;
use App\Librerias\inventario\requisicionesDetalle;

class RequisicionesMasterController extends ApiResponseController
{
    
    public function index(Request $request)
    {
        $requisicion = requisicionesMaster::orderBy('num_req', 'asc')->
                                    join('mov_rrhh.nodepartamentos','mov_rrhh.nodepartamentos.departamento','=','requisiciones_masters.departamento')->
                                    join('mov_rrhh.noempleados','mov_rrhh.noempleados.id','=','requisiciones_masters.cod_emp_sec')->
                                    join('mov_ventas.veclientes',[['mov_ventas.veclientes.tipo_cliente','=','requisiciones_masters.tipo_cliente'],
                                                       ['mov_ventas.veclientes.sec_cliente','=','requisiciones_masters.sec_cliente']])->
                                    select('requisiciones_masters.*','mov_rrhh.nodepartamentos.titulo as depto','mov_ventas.veclientes.nombre as nombre_cliente',
                                    DB::raw("CONCAT(mov_rrhh.noempleados.primernombre,' ',mov_rrhh.noempleados.primerapellido) AS nombre_empleado"))->
                                    where('requisiciones_masters.estado','=','activo')->
                                    get();

        foreach ($requisicion as $key => $value) {      
            $requisicionDetalle = requisicionesDetalle::where([['requisiciones_detalles.num_req','=',$value->num_req],['requisiciones_detalles.estado','=','activo']])->
                                                join('mov_inventario.inv_productos', 'requisiciones_detalles.codigo','=','mov_inventario.inv_productos.codigo')->
                                                join('mov_inventario.categorias','mov_inventario.categorias.id_categoria','=','mov_inventario.inv_productos.id_categoria')->
                                                join('mov_inventario.brands','brands.id_brand','=','mov_inventario.inv_productos.id_brand')->
                                                join('mov_inventario.invtipos_inventarios','mov_inventario.invtipos_inventarios.id_tipoinventario','=','mov_inventario.inv_productos.id_tipoinventario')->
                                                join('mov_inventario.bodegas','mov_inventario.bodegas.id_bodega','=','mov_inventario.inv_productos.id_bodega')->
                                                select('requisiciones_detalles.*',
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
                                                
            $value->productos = $requisicionDetalle;
        } 
        return $this->successResponse($requisicion, $request->urlRequest);
    }
    
    public function store(Request $request)
    {
        $productos =  intval($request->productosLength);
        $documento = intval($request->documentoLength);
        
        $maxid=0;
        $idsecuencia=0;
        $maxid= requisicionesMaster::get('num_req')->max();

        if ($maxid==null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia=$maxid->num_req;
            $idsecuencia=$idsecuencia+1;
        }

        $datosm =  array(
            'num_req'         =>$idsecuencia,
            'departamento'    =>$request->input("departamento"), 
            'cod_emp_sec'     =>$request->input("cod_emp_sec"), 
            'uso'             =>$request->input("uso"),   
            'prioridad'       =>$request->input("prioridad"),   
            'tipo_cliente'    =>$request->input("tipo_cliente"), 
            'sec_cliente'     =>$request->input("sec_cliente"), 
            'nombre_cliente'  =>$request->input("nombre_cliente"),
            'observacion'     =>$request->input("observacion"),
            'estado'          =>$request->input("estado"),   
            'procesada'       =>$request->input("procesada"), 
            'fech_req'        =>$request->input("fech_req"), 
            'usuario_creador' =>$request->input("usuario_creador"),
            
        );
            
        $messages = [
                'required' => 'El campo :attribute es requerido.',
                'unique'   => 'El campo :attribute debe ser unico',
                'numeric'  => 'El campo :attribute debe ser numerico'
        ];
       
        $validator = validator($datosm, [
            'num_req'         => 'required', 
            'fech_req'        => 'required',
            'departamento'    => 'required',
            'cod_emp_sec'     => 'required',
            'uso'             => 'required',
            'prioridad'       => 'required',
            'tipo_cliente'    => 'required',
            'sec_cliente'     => 'required',
            'nombre_cliente'  => 'required',
            'observacion'     => 'required',
            'estado'          => 'required',
            'usuario_creador' => 'required'
        ],$messages);       
       
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            
            try{
                DB::beginTransaction();   
                           
                    if ($documento !== 0) {                        
                        $miDocumento = [];
                        for ($i=0; $i < $documento; $i++) {                            
                            $arch[$i] = $request->file('documento'.$i);        
                            $nombreArchivo = uniqid().'.'.$arch[$i]->getClientOriginalExtension();
                            $tempFile = $arch[$i]->storeAs('uploads', 'requisiciones/'.$nombreArchivo, 'public');
                            array_push($miDocumento, $tempFile);
                        }
                        $datosm['documento'] = json_encode($miDocumento);
                    }  

                    requisicionesMaster::create($datosm);                    
                    
                    if ($productos !== 0) {

                        $datosd = null; 
                        $secuencia = 0;   

                        for ($i=0; $i < $productos; $i++) {

                            $datosd = array('num_req'   => $datosm['num_req'],
                                            'codigo'    => $request->input('codigo'.$i),
                                            'cantidad'  => $request->input('cantidad1'.$i),
                                            'cod_sp'    => $request->input('cod_sp'.$i),
                                            'cod_sp_sec'=> $request->input('cod_sp_sec'.$i),
                                            'precio'    => $request->input('precio'.$i),
                                            'procesada' => 'no',
                                            'estado'    =>'activo'
                            );
                            
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];
            
                            $validator = validator($datosd, [
                                'codigo'     => 'required', 
                                'cantidad'   => 'required',
                                'cod_sp'     => 'required', 
                                'cod_sp_sec' => 'required',
                                'precio'     => 'required',
                                'estado'     => 'required',
                            ],$messages);
                                                     
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest);                               
                            }
                            requisicionesDetalle::create($datosd);
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
    
    public function show(requisicionesMaster $requisicionesMaster)
    {
        //
    }
    
    public function update(Request $request, requisicionesMaster $requisicionesMaster)
    {
        //
    }
    
    public function destroy(Request $request, $id)
    {
        try{
            DB::beginTransaction(); 
                $requisicion = requisicionesMaster::find($id);
                if ($requisicion == null){
                    return $this->errorResponse(null,"Registro no Existe");
                }
                $requisicion->update(['estado' => 'eliminado']);
                requisicionesDetalle::where('num_req','=',$requisicion->num_req)->update(['estado' => 'eliminado']);
            DB::commit();
            return $this->successResponse(1, $request->urlRequest);
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
        
    }
}
