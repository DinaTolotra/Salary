<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\CorsMiddleware;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app['router']->aliasMiddleware('cors', CorsMiddleware::class);
        $this->app['router']->pushMiddlewareToGroup('api', 'cors');
        $this->app['router']->pushMiddlewareToGroup('web', 'cors');
    }
}
