<?php

namespace App\Providers\Validation;

use Illuminate\Support\ServiceProvider;
use App\Services\Validation\BaseValidation;


class ValidationProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       $this->app->singleton(BaseValidation::class , function($app){
          return new BaseValidation();
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
