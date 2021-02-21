<?php

namespace Indotcode\Field;

use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'indotcodeField');

        $this->loadViewsFrom(__DIR__.'/views', 'indotcodeField');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'indotcodeField');

        $this->loadViewsFrom(__DIR__.'/views', 'indotcodeField');

//        $this->publishes([
//            __DIR__.'/config/config.php' => config_path('indotcodeField.php'),
//        ]);
//
//        $this->publishes([
//            __DIR__.'/views' => resource_path('views/indotcodeField'),
//        ]);
    }
}
