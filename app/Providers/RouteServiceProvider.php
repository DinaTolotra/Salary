<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Le chemin vers le fichier de routes pour l'application.
     *
     * @var string
     */
    protected $webNamespace = 'App\Http\Controllers\web'; // Change si tu as une structure différente
    protected $apiNamespace = 'App\Http\Controllers\api'; // Change si tu as une structure différente

    /**
     * Enregistre les routes pour l'application.
     *
     * @return void
     */
    public function boot()
    {

        $router = $this->app['router'];

        // Définir les routes pour l'API
        Route::middleware('api')
           ->prefix('api')
           ->namespace($this->apiNamespace)
           ->group(base_path('routes/api.php'));

        // Définir les routes pour l'application web
        Route::middleware('web')
           ->namespace($this->webNamespace)
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
