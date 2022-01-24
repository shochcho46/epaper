<?php

namespace App\Providers;

use App\Models\Footer;
use App\Models\Websetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class WebsettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer(['layouts.*'], function ($view) {
            $view->with('websetting', Websetting::first());
        });

        view()->composer(['layouts.*'], function ($view) {
            $view->with('footer', Footer::first());
        });
    }
}
