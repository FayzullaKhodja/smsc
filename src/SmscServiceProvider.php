<?php

namespace Khodja\Smsc;

use Illuminate\Support\ServiceProvider;

class SmscServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Config
        $this->mergeConfigFrom( __DIR__.'/Config/services.php', 'services');

        $this->app->singleton('smsc', function($app) {
            return new Smsc;
        });
    }
}
