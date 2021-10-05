<?php

namespace Fluentytech\Onesignal;

use Illuminate\Support\ServiceProvider;

class OnesignalServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('Fluentytech\Onesignal\OnesignalController');
    }
}
