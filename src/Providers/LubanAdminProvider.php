<?php

namespace Shopex\LubanAdmin\Providers;

use File;
use Illuminate\Support\ServiceProvider;

class LubanAuthProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(\Illuminate\Routing\Router $router)
    {
        $this->loadViewsFrom(__DIR__ . '/../../publish/views', 'admin');

        $this->publishes([
            __DIR__ . '/../../publish/migrations/' => database_path('migrations'),
            __DIR__ . '/../../publish/Model/' => app_path(),
            __DIR__ . '/../../publish/Controllers/' => app_path('Http/Controllers'),
        ], 'php');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
