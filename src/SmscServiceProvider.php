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
        $this->app->singleton('smsc', function($app) {
            return new Smsc;
        });
    }
}
