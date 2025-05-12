<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CorsMiddleware;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Le chemin vers le fichier de routes pour l'application.
     *
     * @var string
     */
    protected $apiNamespace = 'App\Http\Controllers\Api'; // Change si tu as une structure différente

    /**
     * Enregistre les routes pour l'application.
     *
     * @return void
     */
    public function boot()
{
    parent::boot();

    $router = $this->app['router'];

    // Ajoute d'abord les middlewares aux groupes avant la définition des routes
    $router->pushMiddlewareToGroup('web', CorsMiddleware::class);
    $router->pushMiddlewareToGroup('api', CorsMiddleware::class);

    // Définir les routes pour l'API
    Route::middleware('api')
        ->prefix('api')
        ->namespace($this->apiNamespace)
        ->group(base_path('routes/api.php'));

    // Définir les routes pour l'application web
    Route::middleware('web')
        ->namespace($this->namespace)
        ->group(base_path('routes/web.php'));
}

    /**
     * Enregistre les services de l'application.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
