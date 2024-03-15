<?php

namespace recooty_aditya\recooty_database;

use Illuminate\Support\ServiceProvider;

class RecootyDatabaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/resources/migrations' => database_path('migrations'),
        ], 'migrations');
    }

    public function register()
    {
        // Register any package services
    }
}
