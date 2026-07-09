<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\Configuracion\RolRepositoryInterface;
use App\Repositories\Eloquent\Configuracion\RolRepository;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            RolRepositoryInterface::class,
            RolRepository::class
        );
    }


    
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
