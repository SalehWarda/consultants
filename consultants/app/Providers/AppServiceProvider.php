<?php

namespace App\Providers;

use App\Models\Backend\About;
use App\Models\Backend\Contact;
use App\Models\Backend\Package;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer('partials.site.footer',function ($view){

            $view->with('contact',Contact::first());
        });
        view()->composer('partials.site.footer',function ($view){

            $view->with('about',About::first());
        });
        view()->composer('partials.site.footer',function ($view){

            $view->with('packages',Package::get());
        });
    }
}
