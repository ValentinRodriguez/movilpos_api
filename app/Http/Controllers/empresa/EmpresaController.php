<?php

namespace App\Http\Controllers\empresa;
use Illuminate\Http\Request;

use App\Librerias\globales\Menu;
use App\Librerias\empresa\Empresa;
use Illuminate\Support\Facades\DB;
use App\Librerias\globales\Modulos;
use App\Librerias\empresa\sucursales;

use App\Librerias\empresa\permisosEmpresa;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\empresa\permisosEmpresaValor;

class EmpresaController extends ApiResponseController
{
    
    public function index(Request $request)
    {
        $empresa = Empresa::orderBy('created_at', 'desc')->where('estado','=','activo')->get();

        foreach ($empresa as $key => $value) {
            $sucursales = sucursales::join('mov_globales.paises','mov_globales.paises.id_pais','=','sucursales.id_pais')->
                        join('mov_globales.ciudades','mov_globales.ciudades.id_ciudad','=','sucursales.id_ciudad')->
                        join('mov_globales.regiones','mov_globales.regiones.id_region','=','sucursales.id_region')->
                        join('mov_globales.municipios','mov_globales.municipios.id_municipio','=','sucursales.id_municipio')->
                        join('mov_globales.provincias','mov_globales.provincias.id_provincia','=','sucursales.id_provincia')->
                        leftjoin('sectores','sectores.id_sector','=','sucursales.id_sector')->
                        select('sucursales.*',
                            'mov_globales.paises.descripcion as pais',
                            'mov_globales.ciudades.descripcion as ciudad',
                            'mov_globales.municipios.descripcion as municipio',
                            'mov_globales.regiones.descripcion as region',
                            'sectores.descripcion as sector',
                            'mov_globales.provincias.descripcion as provincia')->        
                        orderBy('created_at', 'desc')->
                        where([['sucursales.estado','=','ACTIVO'],['sucursales.cod_cia','=',$value->cod_cia]])->
                        get();
            
            $value->sucursales = $sucursales;
        }
        return $this->successResponse($empresa, $request->urlRequest);
    }
    
    public function store(Request $request)
    {
        $datos = $request->all();
        // return response()->json($datos);
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            "nombre"             => 'required',
            "telefono_empresa"   => 'required',
            "email_empresa"      => 'required',
            "documento"          => 'required',
            "tipo_documento"     => 'required',
            "calle"              => 'required',  
            "contacto"           => 'required',   
            "telefono_contacto"  => 'required',
            "id_pais"            => 'required',
            "id_region"          => 'required',
            "id_municipio"       => 'required',
            "id_provincia"       => 'required',
            "empresa_verde"      => 'required',
            "tipo_cuadre"        => 'required',
            "valuacion_inv"      => 'required',
            "usuario_creador"    => 'required',
            "estado"             => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            if ($request->hasFile('logo')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('logo');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['logo'] = $request->file('logo')->storeAs('uploads', 'empresa/'.$nombreImagen, 'public');
            }

            try {                
                $datos['logo'] = '';
                DB::beginTransaction();
                    $maxid=0;
                    $idsecuencia=0;
                
                    $maxid= Empresa::get('cod_cia')->max();
            
                    if ($maxid==null){
                        $idsecuencia=1;
                    }
                    else{
                        $idsecuencia=$maxid->cod_cia;
                        $idsecuencia=$idsecuencia+1;
                    }
                    $datos['cod_cia'] = $idsecuencia;
                    Empresa::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }            
        }
        return response()->json(array("datos" => $datos));
    }
    
    public function show(Request $request,$id)
    {
        $empresa = Empresa::find($id);
        if ($empresa == null){
            return $this->errorResponse($empresa);
        }
        return $this->successResponse($empresa, $request->urlRequest);
    }
    
    public function update(Request $request){
    
    }

    public function actualizar(Request $request, $id)
    {
        $empresa = Empresa::find($id);

        $datos = array(
            "nombre"              =>$request->input("nombre"),
            "telefono_empresa"    =>$request->input("telefono_empresa"),
            "email_empresa"       =>$request->input("email_empresa"),
            "rnc"                 =>$request->input("rnc"),
            "calle"               =>$request->input("calle"),
            "web"                 =>$request->input("web"),
            "id_pais"             =>$request->input("id_pais"),
            "id_ciudad"           =>$request->input("id_ciudad"),
            "id_region"           =>$request->input("id_region"),
            "id_municipio"        =>$request->input("id_municipio"),
            "id_provincia"        =>$request->input("id_provincia"),
            "id_sector"           =>$request->input("id_sector"),
            "contacto"            =>$request->input("contacto"),
            "telefono_contacto"   =>$request->input("telefono_contacto"),
            "moneda"              =>$request->input("moneda"),
            "logo"                =>$request->input("logo"),
            "empresa_verde"       =>$request->input("empresa_verde"),
            "tipo_cuadre"         =>$request->input("tipo_cuadre"),
            "valuacion_inv"       =>$request->input("valuacion_inv"),
            "usuario_modificador" =>$request->input("usuario_modificador")
       );

       $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
       ];

       $validator = validator($datos, [
           "nombre"              => 'required|string',
           "telefono_empresa"    => 'required|string',
           "email_empresa"       => 'required|string',
           "rnc"                 => 'required|string',
           "calle"               => 'required|string',  
           "contacto"            => 'required|string',   
           "telefono_contacto"   => 'required|string',
           "id_region"           => 'required',
           "id_municipio"        => 'required',
           "id_provincia"        => 'required',
           "empresa_verde"       => 'required',
           "tipo_cuadre"         => 'required',
           "valuacion_inv"       => 'required',
           "usuario_modificador" => 'required',
       ],$messages);

       if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
       }else{
           if ($request->hasFile('logo')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('logo');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['logo'] = $request->file('logo')->storeAs('uploads', 'empresa/'.$nombreImagen, 'public');
            }

            $empresa->update($datos);
            return $this->successResponse($empresa, $request->urlRequest);
       }
    }
    
    public function destroy(Empresa $empresa)
    {
        //
    }

    // public function recibimientos()
    // {
    //     $puertos = dirrecepcion::orderBy('id_pais', 'asc')->
    //                             join('mov_globales.paises','mov_globales.paises.id_pais','=','dirrecepciones.id_pais')->
    //                             join('mov_globales.ciudades','mov_globales.ciudades.id_ciudad','=','dirrecepciones.id_ciudad')->
    //                             select('dirrecepciones.*','mov_globales.paises.descripcion as pais','mov_globales.ciudades.descripcion as ciudad')->
    //                             where('dirrecepciones.estado','=','ACTIVO')->
    //                             get();

    //     return $this->successResponse($puertos, $request->urlRequest);
    // }

    public function busqueda(Request $request){
        $empresa = $request->get('empresa');
        
        $busqueda = Empresa::where([['empresas.nombre','=',$empresa],
                                    ['empresas.estado','=','ACTIVO']])->get(); 
                                                        
        return $this->successResponse($busqueda, $request->urlRequest);
    }

    public function permisosEmpresaValor(Request $request)
    {
        $empresa = permisosEmpresaValor::get();
        return $this->successResponse($empresa, $request->urlRequest);
    }
    
    public function AutoLlenadoPermisosEmpresa(Request $request) {        
        $respuesta = array();
            
        $modulos = Modulos::orderBy('orden', 'asc')->get();
    
        $generales = permisosEmpresa::orderBy('created_at', 'desc')->get();
    
        $menu = Menu::join('modulos','modulos.id','=','menus.modulo')->
                        select('menus.*','modulos.icon','modulos.modulo as nombre_modulo')->
                        get();
    
    
        $_modulos = array("label" => 'modulos', "data" => $modulos, "icono" => 'fas fa-dolly-flatbed');
        $_generales = array("label" => 'generales', "data" => $generales, "icono" => 'fas fa-dolly-flatbed');
        $_menu = array("label" => 'menu', "data" => $menu, "icono" => 'fas fa-dolly-flatbed');
    
        array_push($respuesta,$_modulos);
        array_push($respuesta,$_generales);
        array_push($respuesta,$_menu);
    
        return $this->successResponse($respuesta, $request->urlRequest);

    }

    public function guardarPermisosEmpresa(Request $request) {
        $datos = $request->all();
        return response()->json($datos);
    }
}
