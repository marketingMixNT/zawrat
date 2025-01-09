<?php

namespace App\Providers;

use App\Models\SpecialOffer;
use App\Observers\SpecialOfferObserver;
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
        SpecialOffer::observe(SpecialOfferObserver::class);
    }
}
