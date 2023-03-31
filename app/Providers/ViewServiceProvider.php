<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\cat;
use App\Models\Setting;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        view()->composer('front.inc.header', function($view){
            $view->with('cats', cat::select('id','name')->get());
            $view->with('sett', Setting::select('logo','favicon')->first());
        });

        view()->composer('front.inc.footer', function($view){
            $view->with('sett', Setting::first());
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
