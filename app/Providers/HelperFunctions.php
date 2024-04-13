<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperFunctions extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path('helpers').'/Helper.php';
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
