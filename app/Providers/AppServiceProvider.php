<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

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

        // Unwrap wrapped data, specific per resource
        JsonResource::withoutWrapping();
    }
}
