<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
{
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(function(){
                require base_path('routes/api.php');
                require base_path('routes/pos/inventario/inventario.routes.php');
                require base_path('routes/pos/compras/compras.routes.php');
                require base_path('routes/pos/contabilidadGeneral/contabilidadGeneral.routes.php');
                require base_path('routes/pos/cuentasXpagar/cuentaspagar.routes.php');
                require base_path('routes/pos/globales/globales.routes.php');
                require base_path('routes/pos/tienda/tienda.routes.php');
                require base_path('routes/pos/empresa/empresa.routes.php');
                require base_path('routes/pos/miscelaneos/miscelaneos.routes.php');
                require base_path('routes/pos/rrhh/rrhh.routes.php');
                require base_path('routes/pos/ventas/ventas.routes.php');
            });
    }
}
