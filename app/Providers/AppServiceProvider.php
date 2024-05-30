<?php

namespace App\Providers;

use App\Interface\UserRegisterInterface;
use App\Services\UserRegistrationService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRegisterInterface::class, UserRegistrationService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
