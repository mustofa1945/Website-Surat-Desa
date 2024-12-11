<?php

namespace App\Providers\Auth;

use App\Services\Auth\LoginService;
use Illuminate\Support\Facades\View;
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

       
       $this->app->singleton(LoginService::class , function(){
        return new LoginService();
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
