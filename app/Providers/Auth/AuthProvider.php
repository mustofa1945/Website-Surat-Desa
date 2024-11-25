<?php

namespace App\Providers\Auth;

use App\Services\Auth\RegisterService;
use Illuminate\Support\ServiceProvider;

class AuthProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       $this->app->singleton(RegisterService::class , function(){
        return new RegisterService();
       });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
