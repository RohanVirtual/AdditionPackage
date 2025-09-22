<?php

namespace dadirohan\SimpleMath;

use Illuminate\Support\ServiceProvider;

class SimpleMathServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind our class in the container
        $this->app->singleton(SimpleMathService::class, function ($app) {
            return new SimpleMathService();
        });
    }

    public function boot()
    {
        // Bootstrapping if needed (routes, views, etc.)
    }
}
