<?php

namespace Sikrew\G9sms;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'sms');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/sikrew/sms'),
        ]);
        $this->publishes([
            __DIR__.'/config/sms.php' => config_path('sms.php'),
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Sikrew\G9sms\SmsController');
    }
}
