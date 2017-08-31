<?php

namespace Biggo6\Cpanel;

use Illuminate\Support\ServiceProvider;

use Biggo6\Cpanel\Console\Commands\BiggoCpanel;

class Biggo6CpanelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
                $this->commands([
                    BiggoCpanel::class
                ]);
        }
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
