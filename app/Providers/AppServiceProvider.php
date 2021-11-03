<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    { 
        Fortify::RegisterView(function () {
            return view('auth.register');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::loginView(function () {
            return view('auth.login');
        });
        Fortify::forgotView(function () {
            return view('auth.forgot-password');
        });
    }
}
