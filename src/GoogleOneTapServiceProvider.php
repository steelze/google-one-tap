<?php

namespace Steelze\GoogleOneTap;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class GoogleOneTapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'google-one-tap');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/google-one-tap.php' => config_path('google-one-tap.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/google-one-tap'),
            ], 'views');
        }

        Blade::directive('googleClientScript', function () {
            $tag = '<script src="https://accounts.google.com/gsi/client" async defer></script>';
            return "<?php echo '".$tag."'.PHP_EOL ?>";
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/google-one-tap.php', 'google-one-tap');

        // Register the main class to use with the facade
        $this->app->singleton('google-one-tap', function () {
            return new GoogleOneTap;
        });
    }
}
