<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConsoleCommandServiceProvider extends ServiceProvider {

    /**
     * Bootstrap application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('com.petehouston.seed', function ($app) {
            return $app['\App\Console\Commands\SpawnSeederCommand'];
        });

        $this->commands('com.petehouston.seed');
    }

}
