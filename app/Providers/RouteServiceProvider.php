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
    protected $namespace = 'App\Http\Controllers'; // Change si tu as une structure différente

    /**
     * Enregistre les routes pour l'application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        // Définir les routes pour l'API
        Route::middleware('api')
            ->prefix('api')
            ->namespace($this->namespace.'\api')
            ->group(base_path('routes/api.php'));

        // Définir les routes pour l'application web
        Route::middleware('web')
            ->namespace($this->namespace.'\web')
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
