<?php

namespace App\Providers;

use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate; 
use App\Models\User; 
use App\Models\Country;
use App\Policies\CountryPolicy;

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
        $this->app->afterResolving(EncryptCookies::class, function ($middleware) {
            $middleware->disableFor('laravel_session');
            $middleware->disableFor('XSRF-TOKEN');
        });

        Gate::define('is-admin', function (User $user) { 
            return $user->role_id == 1; 
           });
           
        Gate::policy(Country::class, CountryPolicy::class);

    }

}
