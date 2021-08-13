<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Librerias\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Librerias\bodegasUsuarios;
use App\Librerias\noempleados;
use App\Librerias\Rol;
use App\Librerias\Empresa;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $user  = User::orderBy('name', 'asc')->
                       leftjoin('noempleados','noempleados.email','=','users.email')->
                       leftjoin('nopuestos','nopuestos.id_puesto','=','noempleados.id_puesto')->
                       select('users.*','noempleados.primernombre','noempleados.segundonombre',
                              'noempleados.primerapellido','noempleados.segundoapellido','nopuestos.titulo as puesto')->
                       where('users.estado','=','ACTIVO')->
                       get();

        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function login(Request $request)
    {                
        try {  
            $credentials = $request->only('email', 'password');
            if (!Auth::guard('web')->attempt($credentials)) {
                return response()->json(array("data" => false, "code" => 401, "msj" => 'Credenciales Incorrectas'), 401);
            }
            /**
             * @var User $user
            */
            $user = Auth::guard('web')->user();
            $token = $user->createToken($user->email);
            $sessionId = md5(uniqid());
            
            Log::debug($request->input("store"));
            
            if (!$request->input("store")) {
                return $this->respondWithToken($token, $user, $sessionId);
            } else {
                return $this->respondWithTokenStore($token, $user, $sessionId);
            }
        } catch (\Exception $e ){
            return response()->json(array("data" => null, "code" => 501, "msj" => $e->getMessage()), 501);
        }
    }

    public function signup(SignUpRequest $request)
    {
        $datos = $request->all();
         
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico'
        ];

        $validator = validator($datos, [
            "name"                  => 'required|string',
            "surname"               => 'required|string',
            "password"              => 'required|string|confirmed',
            "email"                 => 'required|unique:users',
            "username"              => 'required|string',
            "estado"                => 'required|string',
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json(array("error" => true, "code" => 422, "msj" => $errors->all()), 422);
        }else{
            if ($request->hasFile('foto')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('foto');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['foto']=$request->file('foto')->storeAs('uploads', 'usuarios/'.$nombreImagen, 'public');
            }

            try {     
                DB::beginTransaction();
                    $user = User::create($datos);
                    $sessionId = md5(uniqid());
                    $token = $user->createToken($datos['email']);
                DB::commit();
                
                // Log::debug($datos);
                // return response()->json(array("data" => '', "code" => 200, "msj" => "Respuesta Exitosa"), 200);
                return $this->respondWithTokenStore($token, $user, $sessionId);          

            } catch (\Exception $e ){
                return response()->json(array("data" => null, "code" => 501, "msj" => $e->getMessage()), 501);
            }
        }
    }
    
    public function logout()
    {
        /**
        * @var User $user
        */
        $user = Auth::user();
        $userToken = $user->token();
        $userToken->delete();

        return response()->json(array("data" => true, "code" => 200, "msj" => "Usuario Deslogueado"), 200);
    }

    public function desactivar(Request $request) {
        try {                
            DB::beginTransaction();                             
                $email = request('email'); 
                User::where('email','=',$email)->update(['estado' => 'inactivo']);                
            DB::commit();            
            return response()->json(array("data" => true, "code" => 200, "msj" => "Usuario Desactivado"), 200);
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }  
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    protected function respondWithTokenStore($token, $user, $sessionId = null)
    {
        $data = [
            'access_token' => $token->accessToken,
            'token_expires_at' => $token->token->expires_at,
            'sessionId' => $sessionId,
            'user' => $user
        ];

        return response()->json(array("data" => $data, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    protected function respondWithToken($token,$email, $sessionId = null)
    {
        if ($email !== null) {
            $bodegas_permiso = bodegasUsuarios::join('bodegas','bodegas_usuarios.id_bodega','=','bodegas.id_bodega')->
                                      select('bodegas_usuarios.*','bodegas.descripcion')->
                                      where('bodegas_usuarios.email','=',$email)->
                                      get();

            $empleados = noempleados::where('noempleados.email','=',$email)->first();
            $permisos = Rol::where('rols.email','=',$email)->first();
            $empresa = Empresa::orderBy('created_at', 'desc')->where('estado','=','activo')->first();
        }

        $data = [
            'access_token' => $token,
            'sessionId' => $sessionId,
            // 'expires_in' => $token->token->expires_at,
            'bodegas_permisos' => $bodegas_permiso,
            'empleado' => $empleados,
            'empresa' => $empresa,
            'permisos' => $permisos,
            'user' => auth('web')->user()
        ];

        return response()->json(array("data" => $data, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('parametro');
        $codigo = $request->get('codigo');
        $email = $request->get('email');
        $user  = User::orderBy('id', 'asc')->parametro($parametro)->codigo($codigo)->email($email)->get();

        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function cambia()
    {
        $credentials = request(['email', 'password']);
        $email = $credentials->get('email');

        $user=    user::where('email','=',$email)->update()->all();
        if($user == null){
            return response()->json(['error' => 'Email o clave incorrecta'], 401);
        }
        else{
            return response()->json(['email' => 'Actualizacion Exitosa'], 200);
        }
    }

    public function actualizar(Request $request, $id)
    {
        $usuario = User::find($id);

        $datos = array(
            "username"              =>$request->input("username"),
            "name"                  =>$request->input("name"),
            "surname"               =>$request->input("surname"),
            "email"                 =>$request->input("email"),
            "estado"                =>$request->input("estado"),
            'id'             =>$request->input('id'),
            "foto"                  =>$request->input("foto"),
            'impresora'             =>$request->input('impresora')
       );
       
       $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
       ];

       $validator = validator($datos, [
           "username"              => 'required|string',
            "name"                 => 'required|string',
            "surname"              => 'required|string',
            "id"            => 'required|string',
            "email"                => 'required|string',
            "estado"               => 'required|string',
       ],$messages);

       if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors->all());
       }else{
            if ($request->hasFile('foto')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('foto');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['foto'] = $request->file('foto')->storeAs('uploads', 'usuarios/'.$nombreImagen, 'public');
            }

            if ($request->input("password") !== null) {
                $datos['password'] = $request->input("password");
            }
            $usuario->update($datos);
            return response()->json(array("data" => $usuario, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
       }
    }

    public function destroy(Request $request, $id)
    {
        $usuario = User::find($id);
        // if ($usuario == null){
        //     return response()->json(array("data" => $usuario, "code" => 501, "msj" => "Respuesta Exitosa"), 501);
        // }
        $usuario->update(['estado' => 'desactivado']);
        return response()->json(array("data" => $usuario, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function show(Request $request,$id) {
        $user = User::find($id);
        
        if ($user == null){
            return response()->json(array("data" => $user, "code" => 501, "msj" => "Respuesta Exitosa"), 501);
        }
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function busquedaUsuario(Request $request)
    {
        $username = $request->get('username');
        $user  = User::orderBy('id', 'asc')->username($username)->get();
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function busquedaEmail(Request $request)
    {
        $email = $request->get('email');
        $user  = User::orderBy('id', 'asc')->emailequal($email)->get();
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function busquedaNumEmp(Request $request)
    {
        $numemp = $request->get('empleado');
        $user  = User::orderBy('id', 'asc')->
                       where([['estado','=','activo'],['id','=',$numemp]])->
                       get();
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

}
