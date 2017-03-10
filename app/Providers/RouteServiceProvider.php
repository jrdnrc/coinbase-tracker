<?php

namespace JrdnRc\CoinbaseTracker\Laravel\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * @var string[]
     */
    private $routes = [
        'web',
        'api',
    ];

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(Router $router)
    {
        foreach ($this->routes as $route) {
            require app_path("Http/Routes/{$route}.php");
        }
    }
}
