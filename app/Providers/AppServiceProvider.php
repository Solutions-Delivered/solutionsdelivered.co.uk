<?php

namespace App\Providers;

use App\Services\Polar\PolarCheckout;
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
        $this->app->singleton(PolarCheckout::class, fn (): PolarCheckout => new PolarCheckout(
            token: config('services.polar.token'),
            baseUrl: config('services.polar.base_url'),
        ));
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
