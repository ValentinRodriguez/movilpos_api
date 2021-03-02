<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\Librerias\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class isLogged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $email = $request->get('usuario_creador');        
        $session_id = $request->header('sessionId');
        $usuario = User::where('email','=',$email)->first();

        if ($usuario->session_id == $session_id) {
            // return $next($request);    
            return response()->json('es el mismo usuario');
        } else {
            // return response()->json('otro usuario');
            User::where('email','=',$email)->update(['session_id' => $session_id]);
            return response()->json(array("data" => '501x', "code" => 501, "msj" => "Sesión duplicada"), 501);
        }            
    }
}
