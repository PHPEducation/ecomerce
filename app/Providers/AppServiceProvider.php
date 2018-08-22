<?php

namespace App\Providers;

use App\Brand;
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
        Category::deleting(function ($category){
            $category->products()->delete();
        });

        Brand::deleting(function ($brand){
            $brand->products()->delete();
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
