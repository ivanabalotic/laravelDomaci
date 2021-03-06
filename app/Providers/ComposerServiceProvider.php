<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\HomeComposer;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer('home', 'App\Http\ViewComposers\HomeComposer');

        // Using Closure based composers...
        View::composer('dashboard', function($view)
        {

        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}