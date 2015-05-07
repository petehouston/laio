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
        $this->registerSpawn();
    }

    /**
     * Register spawn commands
     *
     * @return void
     */
    protected function registerSpawn()
    {
        // spawn:seeder
        $this->app->singleton('com.petehouston.seed', function ($app) {
            return $app['\App\Console\Commands\SpawnSeederCommand'];
        });

        $this->commands('com.petehouston.seed');

        // spawn:observer
        $this->app->singleton('com.petehouston.observer', function ($app) {
            return $app['\App\Console\Commands\SpawnObserverCommand'];
        });

        $this->commands('com.petehouston.observer');

        // spawn::view.composer
        $this->app->singleton('com.petehouston.viewcomposer', function ($app) {
            return $app['\App\Console\Commands\SpawnViewComposerCommand'];
        });

        $this->commands('com.petehouston.viewcomposer');
    }

}
