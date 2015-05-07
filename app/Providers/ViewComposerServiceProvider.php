<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeViews();
    }

    /**
     * Compose views
     *
     * @return  void
     */
    protected function composeViews()
    {
        // compose a view
        // for example:
        // $this->app['view']->composer(
        //     'view',
        //     'view_composer_class'
        // );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
