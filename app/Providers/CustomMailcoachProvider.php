<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomMailcoachProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\Gate::define('viewMailcoach', function ($user = null) {
            return $user;
        });
    }
}
