<?php

namespace App\Providers;
use App\Social;
use View;
use App\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.includes.menu', function ($view) {
            $view->with('publishedCategories', Category::where('publication_status', 1)->get());
        });

        View::composer('front.includes.menu', function ($view) {
            $view->with('social', Social::all()->take(1)->first());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
