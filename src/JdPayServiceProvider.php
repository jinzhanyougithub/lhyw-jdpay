<?php

namespace Lhyw\JdPay;

use Illuminate\Support\ServiceProvider;

class JdPayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('jdpay', function ($app) {
            return new JdPay($app['config']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/jd.php' => config_path('jd.php'),
        ]);
    }
}
