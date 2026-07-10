<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Interfaces\Configuracion\RolRepositoryInterface;
use App\Repositories\Interfaces\Configuracion\EntidadRepositoryInterface;

use App\Repositories\Eloquent\Configuracion\RolRepository;
use App\Repositories\Eloquent\Configuracion\EntidadRepository;

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

        $this->app->bind(
            EntidadRepositoryInterface::class,
            EntidadRepository::class
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