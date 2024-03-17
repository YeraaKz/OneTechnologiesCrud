<?php

namespace App\Providers;

use App\Services\MyLogger;
use Illuminate\Support\ServiceProvider;

class LoggerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->singleton(MyLogger::class, function ($app){
            return new MyLogger();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
