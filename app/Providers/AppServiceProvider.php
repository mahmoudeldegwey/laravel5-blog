<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('layouts/home',function($view){

            $view->with('categories',\App\Category::take(4)->get());
            $view->with('allcategories',\App\Category::all());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
