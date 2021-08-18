<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @\closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role == "1"){
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}


// |--------------------------------------------------------------------------
// | Web Routes
// 1 hay que generar la funcion en  app\Providers\RouteServiceProvider.php

// protected function mapAdminRoutes(){
//         Route::middleware('web')
//              ->namespace($this->namespace)
//              ->group(base_path('routes/adminWeb.php'));
//     }
// 2 Hay que inyectar la funcion
//  public function map()
//     {
//         $this->mapApiRoutes();
//         $this->mapAdminRoutes();
//         $this->mapWebRoutes();

//         //
//     }
// 3 Actualizar las dependencias en el terminal
//     composer dump-autoload

//Hay que crear otro middleware para el administrador
//php artisan make:middleware IsAdmin
//en la ruta del kernel hay que poner el alias ------app\Http\Kernel.php
//protected $routeMiddleware[
//'IsAdmin' => \App\Http\Middleware\IsAdmin::class];

