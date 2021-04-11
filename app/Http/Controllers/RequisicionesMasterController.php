<?php

namespace App\Http\Controllers;

use App\Librerias\requisicionesMaster;
use App\Librerias\requisicionesDetalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequisicionesMasterController extends ApiResponseController
{
    
    public function index()
    {
        $requisicion = requisicionesMaster::orderBy('num_req', 'asc')->
                                    join('nodepartamentos','nodepartamentos.departamento','=','requisiciones_masters.departamento')->
                                    join('noempleados','noempleados.id_numemp','=','requisiciones_masters.cod_emp_sec')->
                                    join('veclientes',[['veclientes.tipo_cliente','=','requisiciones_masters.tipo_cliente'],
                                                       ['veclientes.sec_cliente','=','requisiciones_masters.sec_cliente']])->
                                    select('requisiciones_masters.*','nodepartamentos.titulo as depto','veclientes.nombre as nombre_cliente',
                                    DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"))->
                                    where('requisiciones_masters.estado','=','activo')->
                                    get();

        foreach ($requisicion as $key => $value) {      
            $requisicionDetalle = requisicionesDetalle::where([['requisiciones_detalles.num_req','=',$value->num_req],['requisiciones_detalles.estado','=','activo']])->
                                                join('inv_productos', 'requisiciones_detalles.codigo','=','inv_productos.codigo')->
                                                join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                                join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                                join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                                join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->
                                                select('requisiciones_detalles.*',
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
                                                
            $value->productos = $requisicionDetalle;
        } 
        return $this->successResponse($requisicion);
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
            return $this->errorResponseParams($errors->all());
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
                                return $this->errorResponseParams($errors->all());                               
                            }
                            requisicionesDetalle::create($datosd);
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
    
    public function show(requisicionesMaster $requisicionesMaster)
    {
        //
    }
    
    public function update(Request $request, requisicionesMaster $requisicionesMaster)
    {
        //
    }
    
    public function destroy($id)
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
            return $this->successResponse(1);
        } catch (\Exception $e ){
            return $this->errorResponse($e);
        }
        
    }
}
