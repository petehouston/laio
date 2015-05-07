<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{

    /**
    * Bootstrap any necessary services.
    *
    * @return void
    */
    public function boot()
    {
        // Observe event
        // For example:
        //      User::observe( new UserObserver );
    }

    /**
    * Register the service provider.
    *
    * @return void
    */
    public function register()
    {
    }
}