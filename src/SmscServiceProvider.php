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
        // Publish config files
        $this->publishes([
            __DIR__.'/config/smsc.php' => config_path('smsc.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
