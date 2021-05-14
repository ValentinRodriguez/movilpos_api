<?php

namespace App\Http\Controllers;

use App\Librerias\recepcionVehiculos;
use App\Librerias\Mclientes;
use App\Librerias\CategoriasModel;
use App\Librerias\BrandsModel;
use App\Librerias\Propiedadesprod;
use App\Librerias\inspeccionesVehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecepcionVehiculosController extends ApiResponseController
{
    public function index()
    {
        $recepcion = recepcionVehiculos::join('categorias','categorias.id_categoria','=','recepcion_vehiculos.id_categoria')->
                                        join('brands','brands.id_brand','=','recepcion_vehiculos.id_brand')->
                                        join('propiedades','propiedades.id_propiedad','=','recepcion_vehiculos.id_propiedad')->
                                        join('veclientes','veclientes.id','=','recepcion_vehiculos.cliente')->
                                        where('recepcion_vehiculos.estado','=','ACTIVO')->
                                        select('recepcion_vehiculos.*','brands.descripcion as marca','propiedades.descripcion as color','categorias.descripcion as categoria',
                                               'veclientes.nombre as nombre_cliente')->
                                        get();
        return $this->successResponse($recepcion);
    }

    public function inspeccionesVehiculos()
    {
        $inspecciones = inspeccionesVehiculos::all();
        return $this->successResponse($inspecciones);
    }

    public function store(Request $request)
    {
        $archivos = intval($request->get('archivosLength'));
        $datosm = $request->all();

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            'required_if' => 'El campo :attribute no puede estar en blanco'
        ];
        
        $validator = validator($datosm, [
            'cliente'         => 'required',
            'recibido'        => 'required',
            'entregado'       => 'required',
            'fecha_entrega'   => 'required',
            'inspecciones'    => 'required',
            'id_brand'        => 'required',
            'id_categoria'    => 'required',
            'kilometraje'     => 'required',
            'placa'           => 'required',
            'chasis'          => 'required',
            'tipo_producto'   => 'required',
            'id_propiedad'    => 'required',
            'inspecciones'    => 'required',
            'estado'          => 'required',
            'usuario_creador' => 'required',
            'estado'          => 'required',
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
        
                            $tempFile = $arch[$i]->storeAs('uploads', 'recepcion-vehiculos/'.$nombreArchivo, 'public');
                            array_push($misArchivos, $tempFile);
                        }
                        $datosm['archivos'] = json_encode($misArchivos);
                    }  

                    if ($request->hasFile('imagen')) {
                        // Storage::delete('public/'.$producto->imagen);
                        $imagen = $request->file('imagen');
                        $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                        $datosm['imagen'] = $request->file('imagen')->storeAs('uploads', 'recepcion-vehiculos/'.$nombreImagen, 'public');
                    } 
                    
                    recepcionVehiculos::create($datosm);                              
                DB::commit();
                return $this->successResponse($datosm);
            } 
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }
        }
    }
    
    public function show($id)
    {
        $recepcion = recepcionVehiculos::find($id);       

        if ($recepcion == null){
            return $this->errorResponse($recepcion);
        }
        return $this->successResponse($recepcion);
        // return response()->streamDownload(function () {
        //     echo file_get_contents('https://sites.google.com/site/dragonballshinbudokai2psp/_/rsrc/1384280284781/personajes/picolo/Piccoro.jpg?height=313&width=400');
        // },'nice-name.jpg');
    }
    
    public function updateRecepcion(Request $request, $id)
    {
        $recepcion = recepcionVehiculos::find($id);
        $datosm = $request->all();
        $archivos = intval($request->get('archivosLength'));
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            'required_if' => 'El campo :attribute no puede estar en blanco'
        ];
        // return response()->json($archivos); 
        $validator = validator($datosm, [
            'cliente'         => 'required',
            'recibido'        => 'required',
            'entregado'       => 'required',
            'fecha_entrega'   => 'required',
            'inspecciones'    => 'required',
            'id_brand'        => 'required',
            'id_categoria'    => 'required',
            'kilometraje'     => 'required',
            'placa'           => 'required',
            'chasis'          => 'required',
            'tipo_producto'   => 'required',
            'id_propiedad'    => 'required',
            'inspecciones'    => 'required',
            'estado'          => 'required',
            'usuario_creador' => 'required',
            'estado'          => 'required',
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
        
                            $tempFile = $arch[$i]->storeAs('uploads', 'recepcion-vehiculos/'.$nombreArchivo, 'public');
                            array_push($misArchivos, $tempFile);
                        }
                        $datosm['archivos'] = json_encode($misArchivos);
                    }  

                    if ($request->hasFile('imagen')) {
                        // Storage::delete('public/'.$producto->imagen);
                        $imagen = $request->file('imagen');
                        $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                        $datosm['imagen'] = $request->file('imagen')->storeAs('uploads', 'recepcion-vehiculos/'.$nombreImagen, 'public');
                    } 
                    // return response()->json($datosm); 
                $recepcion->update($datosm);
                              
                DB::commit();
                return $this->successResponse($datosm);
            } 
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }
        }
    }
    
    public function destroy($id)
    {
        // return response()->json($recepcionVehiculos);
        $recepcionVehiculos = recepcionVehiculos::find($id);
        $recepcionVehiculos->update(['estado' => 'ELIMINADO']);

        // $invproductos = InvProductos::where('id_brand','=',$id)->where('estado','=','ACTIVO')->first();
        
        // if($invproductos <> null){
        //     return $this->errorResponse("No puede eliminar esta bodega, tiene producto/s asociado/s");
        // }

        // $brand->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, "Marca eliminada");
    }

    public function autoLlenado()
    {        
        $respuesta = array();

        $clientes = Mclientes::join('paises','paises.id_pais','=','veclientes.id_pais')->
                                join('ciudades','ciudades.id_ciudad','=','veclientes.id_ciudad')->
                                select('veclientes.*','paises.descripcion as pais','ciudades.descripcion as ciudad')->
                                orderBy('created_at', 'desc')->
                                where('veclientes.estado','=','ACTIVO')->
                                get();

        $modelos = CategoriasModel::orderBy('created_at', 'desc')->
                                where('categorias.estado','=','ACTIVO')->
                                get();

        $marcas = BrandsModel::orderBy('id_brand', 'asc')->
                                where('brands.estado','=','ACTIVO')->
                                get();
                                
        $propiedades = Propiedadesprod::orderBy('created_at', 'desc')->
                                where('propiedades.estado','=','ACTIVO')->
                                get();

        $inspecciones = inspeccionesVehiculos::all();                       

        $_clientes = array("label" => 'clientes', "data" => $clientes, "icono" => 'fas fa-dolly-flatbed');
        $_modelos = array("label" => 'modelos', "data" => $modelos, "icono" => 'fas fa-dolly-flatbed');
        $_marcas = array("label" => 'marcas', "data" => $marcas, "icono" => 'fas fa-dolly-flatbed');
        $_propiedades = array("label" => 'propiedades', "data" => $propiedades, "icono" => 'fas fa-dolly-flatbed');
        $_inspecciones = array("label" => 'inspecciones', "data" => $inspecciones, "icono" => 'fas fa-dolly-flatbed');

        array_push($respuesta,$_clientes);
        array_push($respuesta,$_modelos);
        array_push($respuesta,$_marcas);
        array_push($respuesta,$_propiedades);
        array_push($respuesta,$_inspecciones);

        return $this->successResponse($respuesta);
    }
}
