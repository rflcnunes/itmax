<?php

namespace App\Providers;

use App\Repositories\Contracts\CollaboratorRepositoryInterface;
use App\Repositories\Contracts\MachineRepositoryInterface;
use App\Repositories\Eloquent\CollaboratorRepository;
use App\Repositories\Eloquent\MachineRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CollaboratorRepositoryInterface::class,
            CollaboratorRepository::class
        );

        $this->app->bind(
          MachineRepositoryInterface::class,
          MachineRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
