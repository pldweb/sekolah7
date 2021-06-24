<?php

namespace App\Providers;

// tambahkan ini agar tidak error
use Illuminate\Support\Facades\Schema; 
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
        // Tambahkann ini juga
        Schema::defaultStringLength(191);
    }
}
