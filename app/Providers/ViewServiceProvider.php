<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $categories = Category::with('subCategories')->get(); 
            $view->with('categories', $categories); 
        });
        // view()->composer('*', function ($view) {
        //     $categories = Cache::remember('categories', 3600, function () {
        //         return Category::with('subCategories')->get();
        //     });
        //     $view->with('categories', $categories);
        // });
    }
}
