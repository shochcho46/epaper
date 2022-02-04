<?php

namespace App\Providers;

use App\Http\Controllers\BanglaDateController;
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

        view()->composer(['*'], function ($view) {
            $pricesClass = new BangladateController(time(), 0);
            $bangladate = $pricesClass->get_date();
            $ebadate = $pricesClass->englishdate();
            $edate = date("l, F j, Y");
            $view->with('bdate', $bangladate)
                ->with('bedate', $ebadate)
                ->with('edate', $edate);
        });
    }
}
