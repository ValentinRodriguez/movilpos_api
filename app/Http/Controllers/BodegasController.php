<?php

namespace App\Http\Controllers;

use App\Librerias\Bodegas;
use App\librerias\pais;
use App\librerias\User;
use App\librerias\invProductos;
use App\librerias\BodegasUsuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BodegasController extends ApiResponseController
{

    public function index(){
        $bodegas = Bodegas::orderBy('id_bodega', 'asc')->
                           join('paises','paises.id_pais','=','bodegas.id_pais')->
                           join('ciudades','ciudades.id_ciudad','=','bodegas.id_ciudad')->
                           select('bodegas.*','paises.descripcion as pais','ciudades.descripcion as ciudad')->
                           where('bodegas.estado','=','ACTIVO')->
                           get();

        return $this->successResponse($bodegas);
    }

    public function store(Request $request){
        $maxid=0;
        $idsecuencia=0;
        $maxid = bodegas::get('id_bodega')->max();

        if ($maxid == null){
            $idsecuencia=1;
        } else {
            $idsecuencia = $maxid->id_bodega;
            $idsecuencia=$idsecuencia + 1;
        }

        $datos = $request->all();
        $datos = $datos + array('id_bodega' =>$idsecuencia);
        //return response()->json($datos);
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion' => 'required',
            'estado'      => 'required',
            'id_pais'     => 'required',
            'id_ciudad'   => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors =  $validator->errors();
            return $this->errorResponseParams($errors->all());
        } else {
            try {                
                DB::beginTransaction();
                    bodegas::create($datos);
                DB::commit();
                return $this->successResponse($datos, "Bodega guardada");
            }
            catch (\Exception $e ){
                return $this->errorResponse($e);
            }
        }
    }

    public function show($id){
        $datos = bodegas::join('paises','paises.id_pais','=','bodegas.id_pais')->
                         join('ciudades','ciudades.id_ciudad','=','bodegas.id_ciudad')->
                         select('bodegas.*','paises.descripcion as pais','ciudades.descripcion as ciudad')->
                         where([['id_bodega', '=', "$id"],['bodegas.estado','=','ACTIVO']])->
                         first();
      if($datos == null){
        return $this->errorResponse('No existe bodega con esta condicion');
      }
      return $this->successResponse($datos);
    }
        
    public function update(Request $request, $id){
        $bodegas = Bodegas::find($id);
        $messages = [
            'required' => 'El campo :attribute es requerido',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico'
        ];

        $validator = validator($request->all(), [
            'descripcion'         => 'required|string|min:10|max:500',
            'id_pais'             => 'required',
            'id_ciudad'           => 'required',
            'usuario_creador'     => 'required',
            'usuario_modificador' => 'required',
            'estado'              => 'required'
        ],$messages);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            $bodegas->update($request->all());
            return $this->successResponse($bodegas, "Bodega actualizada");
        }
    }
    
    public function destroy($bodegas){
        $bodega = Bodegas::where('id_bodega','=',$bodegas)->first();
        $usuario_permisos = bodegasUsuarios::where('id_bodega','=',$bodegas)->get();
        
        if ($bodega == null){
            return $this->errorResponse(null, "Esta bodega no existe");
        }

        $invproductos = InvProductos::where('id_bodega','=',$bodegas)->where('estado','=','ACTIVO')->first();
        if($invproductos <> null){
            return $this->errorResponse("No puede eliminar esta bodega, tiene producto/s asociado/s");
        }

        DB::table('bodegas_usuarios')->where('id_bodega','=',$bodegas)->delete();
        $bodega->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null,"Bodega Eliminada");
    }

    public function busqueda(Request $request){
        $existe = $request->get('parametro');
        $id_bodega = $request->get('id_bodega');
        
        $busqueda = Bodegas::orderBy('id_bodega', 'asc')->
                                join('paises','paises.id_pais','=','bodegas.id_pais')->
                                join('ciudades','ciudades.id_ciudad','=','bodegas.id_ciudad')->
                                select('bodegas.*','paises.descripcion as pais','ciudades.descripcion as ciudad')->
                                existe($existe)->
                                codigo($id_bodega)->
                                where('bodegas.estado','=','ACTIVO')->
                                get(); 
                                                        
        return $this->successResponse($busqueda);
    }

    public function busquedaBodega(Request $request){
        $existe = $request->get('bodega');
        $id_bodega = $request->get('id_bodega');
        
        $busqueda = Bodegas::orderBy('id_bodega', 'asc')->
                                join('paises','paises.id_pais','=','bodegas.id_pais')->
                                join('ciudades','ciudades.id_ciudad','=','bodegas.id_ciudad')->
                                select('bodegas.*','paises.descripcion as pais','ciudades.descripcion as ciudad')->
                                existe($existe)->
                                codigo($id_bodega)->
                                where('bodegas.estado','=','ACTIVO')->
                                get(); 
                                                        
        return $this->successResponse($busqueda);
    }

    public function concederPermisosBodega(Request $request){

        $datos = array('id_bodega'        =>$request->input('id_bodega'),
                       'email'            =>$request->input('email'),
                       'usuario_creador'  =>$request->input('usuario_creador'),
                       'usuario_permisos' =>$request->input('usuario_permisos'),
                       'estado'           =>$request->input('estado'),
        );

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'numeric'  => 'El campo :attribute debe ser numerico'
        ];

        $validator = validator($datos, [
            "id_bodega"        => 'required',
            "usuario_creador"  => 'required',
            "usuario_permisos" => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors =  $validator->errors();
            return $this->errorResponseParams($errors->all());
        }
        else {            
            DB::beginTransaction();
                $usuario_permisos = json_decode($datos['usuario_permisos']);
                for ($i=0; $i < count($usuario_permisos); $i++) { 
                    
                    $coincidencia = bodegasUsuarios::where('id_bodega','=',$datos['id_bodega'])->
                                                     where('email','=',$usuario_permisos[$i]->email)->
                                                     get();

                    if (count($coincidencia) === 0) {
                        bodegasUsuarios::insert(['email'           => $usuario_permisos[$i]->email, 
                                                 'id_bodega'       => $datos['id_bodega'],
                                                 'usuario_creador' => $datos['usuario_creador'],
                                                 'estado'          => $datos['estado'],
                                               ]);
                    }
                }
            DB::commit();
            return $this->successResponse($datos, "Permisos Concedidos");
        }
    }

    public function usuariosPermisosBodegas($id_bodega)
    {
        $datos = BodegasUsuarios::join('users','users.email','=','bodegas_usuarios.email')->
                                  select('users.*','bodegas_usuarios.id_bodega')->        
                                  where('id_bodega','=',$id_bodega)->
                                  get();
        if($datos == null){
            return $this->errorResponse('No existe bodega con esta condicion');
        }
        return $this->successResponse($datos);
    }

    public function usuarioConPermisosBodegas($email)
    {
        $datos = BodegasUsuarios::join('bodegas','bodegas.id_bodega','=','bodegas_usuarios.id_bodega')->
                                  select('bodegas.descripcion','bodegas_usuarios.id_bodega')->        
                                  where('bodegas_usuarios.email','=',$email)->
                                  get();

        if($datos == null){
            return $this->errorResponse('No existe bodega con esta condicion');
        }
        return $this->successResponse($datos);
    }

    
    public function autoLlenado($email)
    {        
        $paises = pais::orderBy('created_at', 'desc')->get();

        $usuarios = User::join('nopuestos','nopuestos.id_puesto','=','users.id_puesto')->
                      select('users.*','nopuestos.titulo as puesto')->orderBy('id', 'asc')->get();

        $respuesta = array('usuarios' => $usuarios, 'paises' => $paises );
        return $this->successResponse($respuesta);
    }
}
