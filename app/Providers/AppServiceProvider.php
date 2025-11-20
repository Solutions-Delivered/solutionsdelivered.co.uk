<?php

namespace App\Providers;

use App\View\Composers\BrandComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share brand data across all views
        View::composer('*', BrandComposer::class);
    }
}
