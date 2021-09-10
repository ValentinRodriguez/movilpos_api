<?php

namespace App\Http\Middleware;

use Closure;

class addSecretsParams
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
        $request->request->add([
            'grant_type' => 'password',
            'client_id' => config('auth.passport.client_id'),
            'client_secret' => config('auth.passport.client_secret'),
        ]);
        return $next($request);
    }
}
