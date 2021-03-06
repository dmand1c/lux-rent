<?php

namespace App\Providers;

use App\Repositories\VehicleRepository;
use App\Repositories\VehicleRepositoryInterface;
use App\Repositories\BrandRepository;
use App\Repositories\BrandRepositoryInterface;
use App\Repositories\ReservationsRepository;
use App\Repositories\ReservationsRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(BrandRepositoryInterface::class, BrandRepository::class);
        $this->app->bind(VehicleRepositoryInterface::class, VehicleRepository::class);
        $this->app->bind(ReservationsRepositoryInterface::class, ReservationsRepository::class);
    }
}
