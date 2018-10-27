<?php

namespace Lock;

use Illuminate\Support\ServiceProvider;

class LockServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/lock.php' => $this->app['path.config'].DIRECTORY_SEPARATOR.'lock.php',
            ]);
        }
    }
}
