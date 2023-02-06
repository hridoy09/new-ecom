<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Contracts\View\View;
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

        view()->composer('frontend.partials.header', function ($view) {
        $header['categories']=Category::with('subcategories')->get();
            $view->with($header);
        });
        Paginator::useBootstrap();

    }
}
